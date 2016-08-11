<?php namespace App\Http\Controllers;

use App\Http\Controllers\Auth;

use App\Models\Apartment;
use App\Models\Complaint;
use App\Models\Payment;
use App\Models\Profile;
use App\Models\Transaction;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth as LAuth;
use Illuminate\Support\Facades\DB;

class UserController extends Controller {

    public function getHome()
    {

        $listsincomes       =   $this->getRecentIncomeList();
        $listsexpenses      =   $this->getRecentExpenseList();

        $charts             =   $this->getChartData();

        $piei               =   $this->getPieChartData()[0];
        $piee               =   $this->getPieChartData()[1];

        $isAdmin            =   $this->getUserType();

        $income             =   $this->getIncomeReports();
        $expense            =   $this->getExpenseReports();
        $apartments         =   $this->getAssociatedApartment()->lists('name','id');

        $requestBy          =   $this->getAddRequest();
        $profiles           =   $this->getMembers();

        $payment            =   $this->getPaymentDetails();
        $due_amount         =   $this->getDueAmount();
//        $due                =   $this->getDueAmount();

//        $complaints         =   $this->getComplaints();
//        $classifieds        =   $this->getClassifieds();

        return view('panels.user.home', compact('complaints', 'classifieds', 'payment', 'payer_list', 'due_amount',
                                                'listsincomes', 'listsexpenses',
                                                'charts', 'piei', 'piee',
                                                'income', 'expense',
                                                'apartments', 'profiles', 'requestBy', 'isAdmin'));

    }

    public function getIncomeReports()
    {
        $start              = Carbon::now()->startOfMonth();
        $end                = Carbon::now()->endOfMonth();
        $startweek          = Carbon::now()->startOfWeek();
        $endweek            = Carbon::now()->endOfWeek();
        $startprevmonth     = new Carbon('first day of last month');
        $endprevmonth       = new Carbon('last day of last month');

        $weekincome         = Transaction::whereBetween('date', [$startweek, $endweek])
                                ->where('type', '=', 'Income')
                                ->sum('amount');

        $monthincome        = Transaction::whereBetween('date', [$start, $end])
                                ->where('type', '=', 'Income')
                                ->sum('amount');

        $prevmonthincome    = Transaction::whereBetween('date', [$startprevmonth, $endprevmonth])
                                ->where('type', '=', 'Income')
                                ->sum('amount');

        if(count($prevmonthincome))
            $incomepercent      =       0;
        else
            $incomepercent      =       $monthincome/$prevmonthincome;

        return [$weekincome, $monthincome, $incomepercent];

    }

    public function getExpenseReports()
    {
        $start              = Carbon::now()->startOfMonth();
        $end                = Carbon::now()->endOfMonth();
        $startweek          = Carbon::now()->startOfWeek();
        $endweek            = Carbon::now()->endOfWeek();
        $startprevmonth     = new Carbon('first day of last month');
        $endprevmonth       = new Carbon('last day of last month');

        $weekexpense         = Transaction::whereBetween('date', [$startweek, $endweek])
                                ->where('type', '=', 'Expense')
                                ->sum('amount');

        $monthexpense       = Transaction::whereBetween('date', [$start, $end])
                                ->where('type', '=', 'Expense')
                                ->sum('amount');

        $prevmonthexpense   = Transaction::whereBetween('date', [$startprevmonth, $endprevmonth])
                                ->where('type', '=', 'Expense')
                                ->sum('amount');

        if(count($prevmonthexpense))
            $expensepercent             =       0;
        else
            $expensepercent             =       $monthexpense/$prevmonthexpense;

        return [$weekexpense, $monthexpense, $expensepercent];
    }

    public function getAssociatedApartment()
    {
        $apartments     = Profile::find(LAuth::user()->profile->id)->apartments()->approved()->get();

        return $apartments;
    }

    public function setDefaultApartment(Request $request)
    {
        LAuth::user()->profile->defaultApartment = $request->apartment;

        LAuth::user()->profile->save();

        return redirect()->back()
            ->withMessage('Default Apartment has been changed')
            ->withStatus('success');
    }

    public function getChartData()
    {
        $start              =   Carbon::now()->startOfMonth();
        $end                =   Carbon::now()->endOfMonth();

        $stats = DB::table('easymanage_transaction')
            ->whereBetween('created_at', [$start, $end])
            ->groupBy('date')
            ->orderBy('date', 'ASC')
            ->get([
                DB::raw('Date(date) as date'),
                DB::raw('SUM(cr) as cr'),
                DB::raw('SUM(dr) as dr'),
            ]);

        if(count($stats) > 0)
        foreach ($stats as $list){
            $dates[]    = $list->date;
            $income[]   = intval($list->cr);
            $expense[]  = intval($list->dr);
        }

        else
        {
            $dates[]    = 'No records for this Month';
            $income[]   = '0';
            $expense[]  = '0';
        }

        $charts["chart"]    = ["type" => "area"];
        $charts['credits']  = ['enabled' => false];
        $charts["title"]    = ["text" => "Income vs Expense"];
        $charts["subtitle"] = ["text" => date('F Y')];
        $charts["tooltip"]  = ["valuePrefix" => " ₹ "];

        $charts["xAxis"]    = ["categories" => $dates];
        $charts["yAxis"]    = ["title" => ["text" => "Amount"]];

        $charts["series"] = [
            ["name" => "Income",     "data"      => $income],
            ["name" => "Expense",    "data"      => $expense]
        ];

        return  $charts ;

    }

    public function getPieChartData()
    {
        $start              =   Carbon::now()->startOfMonth();
        $end                =   Carbon::now()->endOfMonth();

        $monthincome        = Transaction::whereBetween('date', [$start, $end])
                                ->where('type', '=', 'Income')
                                ->sum('amount');

        $monthexpense       = Transaction::whereBetween('date', [$start, $end])
                                ->where('type', '=', 'Expense')
                                ->sum('amount');

        $pieincome          =   intval($monthincome);
        $pieexpense         =   intval($monthexpense);

        $piecharts["chart"]    = ["type" => "pie"];

        $piecharts['credits']  = ['enabled' => false];
        $piecharts["title"]    = ["text" => "Income vs Expense"];
        $piecharts["subtitle"] = ["text" => date('F Y')];

        $piecharts["series"] = [
                    ["name" => "Income",     "data"      => $pieincome],
                    ["name" => "Expense",    "data"      => $pieexpense]
                ];

        return  [$pieincome, $pieexpense] ;

    }

    public function getUserType()
    {
        $admin      =       Apartment::find(LAuth::user()->profile->defaultApartment);

        $usertype   =       $admin->profile->contains(LAuth::user()->profile->id);

        return $usertype;
    }

    public function getRecentIncomeList()
    {
        $listsincomes       =   Transaction::with('banks')
                                ->where('type', '=', 'Income')
                                ->DefaultApartment()
                                ->orderBy('created_at','DESC')
                                ->take(5)
                                ->get();

        return $listsincomes;

    }

    public function getRecentExpenseList()
    {
        $listsexpenses      =   Transaction::with('banks')
                                ->where('type', '=', 'Expense')
                                ->DefaultApartment()
                                ->orderBy('created_at','DESC')
                                ->take(5)
                                ->get();

        return $listsexpenses;

    }

    public function getComplaints()
    {
        $complaints     =   Apartment::find(LAuth::user()->profile->defaultApartment)
                            ->complaints()
                            ->latest('created_at')
                            ->get();

        return $complaints;
    }

    public function getClassifieds()
    {
        $classifieds    =   Profile::find(LAuth::user()->profile->id)
                            ->classifieds()
                            ->latest('created_at')
                            ->get();

        return $classifieds;

    }

    public function getMembers()
    {
        $profiles           =   Apartment::find(LAuth::user()->profile->defaultApartment)
                                ->profiles()
                                ->approved()
                                ->get();

        return $profiles;
    }

    public function getAddRequest()
    {
        $requestBy          =   Apartment::find(LAuth::user()->profile->defaultApartment)
                                ->profiles()
                                ->notapproved()
                                ->get();

        return $requestBy;
    }

    public function getPaymentDetails()
    {
        $payment                =       Payment::DefaultApartment()->first();

        return $payment;
    }

    public function getDueAmount()
    {

//        $start              =   Carbon::now()->startOfMonth();
//        $start              =   '2016-05-01';
//        $end                =   Carbon::now()->endOfMonth();
//        $end                =   '2016-05-30';
//
//        $due        =       Transaction::DefaultApartment()
//                                        ->where('payer_id','=', LAuth::user()->profile->id)
//                                        ->whereBetween('created_at', [$start, $end])
//                                        ->first();
//
//        if(count($due))
//            dd('payment done');
//        else
//            dd('due pending');
//
//        return $due;





        if($this->getPaymentDetails()->due_date <= Carbon::now())
        {

            $first             =       $this->getPaymentDetails()->amount / count($this->getMembers());
            $due_amount        =       ($first * $this->getPaymentDetails()->fine) / 100 + $first;
        }

        else
        {
            $due_amount             =       $this->getPaymentDetails()->amount / count($this->getMembers());
        }

        return $due_amount;

    }


}