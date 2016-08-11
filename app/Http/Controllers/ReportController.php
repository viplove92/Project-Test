<?php

namespace App\Http\Controllers;

use App\Models\Bankncash;
use App\Models\Event;
use App\Models\Transaction;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use MaddHatter\LaravelFullcalendar\Facades\Calendar;

class ReportController extends Controller
{
    public function getAccountStatementForm()
    {
        $account        = ['' => 'Choose an Account'] + Bankncash::lists('account', 'id')->toArray();
        $type           = ['All' => 'All Transaction', 'Credit' => 'Credit', 'Debit' => 'Debit' ];
        $from_date      = Carbon::now()->subMonth(1);
        $to_date        = Carbon::now();

        return view('reports.statement', compact('account', 'type', 'from_date', 'to_date'));
    }

    public function postAccountStatement(Request $request)
    {
        $account            =       Bankncash::find($request->account_id);
        $from_date          =       $request->from_date;
        $to_date            =       $request->to_date;
        $type               =       $request->type;


        if($type == 'Debit')
        $lists     =        Transaction::whereBetween('date', [$from_date, $to_date])
                                ->where('account_id', '=', $account->id)
                                ->where('dr', '!=', '0.00')
                                ->orderBy('date','DESC')
                                ->get();

        elseif($type == 'Credit')
        $lists     =        Transaction::whereBetween('date', [$from_date, $to_date])
                                ->where('account_id', '=', $account->id)
                                ->where('cr', '!=', '0.00')
                                ->orderBy('date','DESC')
                                ->get();

        else
        $lists     =        Transaction::whereBetween('date', [$from_date, $to_date])
                                ->where('account_id', '=', $account->id)
                                ->orderBy('date','DESC')
                                ->get();

//        dd($lists);

        return view('reports.accstatement', compact('account', 'from_date', 'to_date', 'lists', 'type'));

    }

    public function getIncomeReports()
    {
        $income             =      Transaction::with('banks')
                                        ->where('type', '=', 'Income')
                                        ->sum('bal');
        $lists              =      Transaction::with('banks')
                                        ->where('type', '=', 'Income')
                                        ->orderBy('created_at','DESC')
                                        ->limit(10)
                                        ->get();

        $now                = Carbon::now();
        $start              = Carbon::now()->startOfMonth();
        $end                = Carbon::now()->endOfMonth();
        $startweek          = Carbon::now()->startOfWeek();
        $endweek            = Carbon::now()->endOfWeek();
        $thirtydayincome    = Carbon::now()->subDays(30);

        $monthincome        = Transaction::whereBetween('date', [$start, $end])
                                ->where('type', '=', 'Income')
                                ->sum('bal');

        $weekincome         = Transaction::whereBetween('date', [$startweek, $endweek])
                                ->where('type', '=', 'Income')
                                ->sum('bal');

        $thirtydayincome    = Transaction::whereBetween('date', [$thirtydayincome, $now])
                                ->where('type', '=', 'Income')
                                ->sum('bal');

        $incomelinecharts   = $this->getIncomeChartData();

        return view('reports.income', compact(  'income', 'lists', 'monthincome',
                                                'weekincome', 'thirtydayincome',
                                                'incomelinecharts'));

    }

    public function getExpenseReports()
    {
        $expense             =     Transaction::with('banks')
                                        ->where('type', '=', 'Expense')
                                        ->sum('bal');
        $lists              =      Transaction::with('banks')
                                        ->where('type', '=', 'Expense')
                                        ->orderBy('created_at','DESC')
                                        ->limit(10)
                                        ->get();

        $now                = Carbon::now();
        $start              = Carbon::now()->startOfMonth();
        $end                = Carbon::now()->endOfMonth();
        $startweek          = Carbon::now()->startOfWeek();
        $endweek            = Carbon::now()->endOfWeek();
        $thirtydayincome    = Carbon::now()->subDays(30);

        $monthexpense       = Transaction::whereBetween('date', [$start, $end])
                                ->where('type', '=', 'Expense')
                                ->sum('bal');

        $weekexpense         = Transaction::whereBetween('date', [$startweek, $endweek])
                                ->where('type', '=', 'Expense')
                                ->sum('bal');

        $thirtydayexpense    = Transaction::whereBetween('date', [$thirtydayincome, $now])
                                ->where('type', '=', 'Expense')
                                ->sum('bal');

        $expenselinecharts   = $this->getExpenseChartData();

        return view('reports.expense', compact('expense', 'lists', 'monthexpense', 'weekexpense', 'thirtydayexpense', 'expenselinecharts'));

    }

    public function getIncomeVsExpenseReports()
    {
        $income             =      Transaction::with('banks')->where('cr', '!=', '0.00')->sum('bal');
        $expense            =      Transaction::with('banks')->where('dr', '!=', '0.00')->sum('bal');
        $inmex              =      $income - $expense;

        $start              =       Carbon::now()->startOfMonth();
        $end                =       Carbon::now()->endOfMonth();

        $monthincome       = Transaction::whereBetween('date', [$start, $end])
                                ->where('type', '=', 'Income')
                                ->sum('bal');

        $monthexpense      = Transaction::whereBetween('date', [$start, $end])
                                ->where('type', '=', 'Expense')
                                ->sum('bal');

        $inmexm             =       $monthincome - $monthexpense;

        $charts             =       $this->getIncomeVsExpenseChartData();

        return view('transaction.incomevsexpense', compact('lists', 'accounts', 'income', 'expense', 'inmex', 'monthincome', 'monthexpense', 'inmexm', 'charts'));
    }

    public function getReportsByDate()
    {
        $result                     =   Transaction::where('created_at', '<=', Carbon::now())
                                            ->where('type', '!=', 'Transfer')
                                            ->get(['description as title', 'created_at as start'])
                                            ->toArray();

        $events['weekends']         =   true;
        $events['header']           =   [
                                        "left" => "prev,next today",
                                        "center" => "title",
                                        "right" => "month,agendaWeek,agendaDay"
                                        ];
        $events['editable']         =   false;
        $events['eventLimit']       =   true;
        $events['events']            =  $result;
        $events['eventColor']        =  '#116063';

        return view('reports.datecalendar', compact('events'));
    }

    public function getAllIncome()
    {
        $lists          =   Transaction::with('banks')
                                ->where('type', '=', 'Income')
                                ->orderBy('created_at','DESC')
                                ->paginate(20);
        $accounts       =   Bankncash::all();

        return view('reports.allincome', compact('lists', 'accounts'));
    }

    public function getAllExpense()
    {
        $lists          =   Transaction::with('banks')
                                ->where('type', '=', 'Expense')
                                ->orderBy('created_at','DESC')
                                ->paginate(20);
        $accounts       =   Bankncash::all();

        return view('reports.allexpense', compact('lists', 'accounts'));
    }

    public function getAllTransaction()
    {
        $lists          =   Transaction::with('banks')
                                ->orderBy('created_at','DESC')
                                ->paginate(20);
        $accounts       =   Bankncash::all();

        return view('transaction.transactions', compact('lists', 'accounts'));
    }

    public function getIncomeChartData()
    {
        $start              =   Carbon::now()->startOfYear();
        $end                =   Carbon::now()->endOfYear();

        $stats = DB::table('easymanage_transaction')
            ->whereBetween('created_at', [$start, $end])
            ->groupBy('month_date')
            ->orderBy('month', 'ASC')
            ->get([
                DB::raw('MONTH(date) as month'),
                DB::raw('MONTHNAME(date) as month_date'),
                DB::raw('SUM(cr) as cr'),
            ]);

        foreach ($stats as $list) {
            $month_name[]       =   $list->month_date;
            $amount[]           =   intval($list->cr);
        }

        $incomelinecharts["chart"]    = ["type" => "line"];
        $incomelinecharts['credits']  = ['enabled' => false];
        $incomelinecharts["title"]    = ["text" => "Income Report"];
        $incomelinecharts["subtitle"] = ["text" => date('Y')];
        $incomelinecharts["tooltip"]  = ["valuePrefix" => " ₹ "];

        $incomelinecharts["xAxis"]    = ["categories" => $month_name];
        $incomelinecharts["yAxis"]    = [
                                            ["title" => ["text" => "Amount  ( ₹ )"]
                                        ],
                                        [
                                            ['plotLines' => ['value' => 0, 'width' => 1, 'color' => '#808080' ]]
                                        ]
                                        ];

        $incomelinecharts["series"] =   [
                                        ["name" => "Income",     "data"      => $amount]
                                        ];

        return  $incomelinecharts ;

    }

    public function getExpenseChartData()
    {
        $start              =   Carbon::now()->startOfYear();
        $end                =   Carbon::now()->endOfYear();

        $stats = DB::table('easymanage_transaction')
            ->whereBetween('created_at', [$start, $end])
            ->groupBy('month_date')
            ->orderBy('month', 'ASC')
            ->get([
                DB::raw('MONTH(date) as month'),
                DB::raw('MONTHNAME(date) as month_date'),
                DB::raw('SUM(dr) as dr'),
            ]);

        foreach ($stats as $list) {
            $month_name[]       =   $list->month_date;
            $amount[]           =   intval($list->dr);
        }

        $expenselinecharts["chart"]    = ["type" => "line"];
        $expenselinecharts['credits']  = ['enabled' => false];
        $expenselinecharts["title"]    = ["text" => "Expense Report"];
        $expenselinecharts["subtitle"] = ["text" => date('Y')];
        $expenselinecharts["tooltip"]  = ["valuePrefix" => " ₹ "];

        $expenselinecharts["xAxis"]    = ["categories" => $month_name];
        $expenselinecharts["yAxis"]    = [
                                            ["title" => ["text" => "Amount  ( ₹ )"]
                                            ],
                                            [
                                                ["plotLines" => ["value" => 0, "width" => 2, "color" => "#FFFFFF" ]]
                                            ]
                                        ];

        $expenselinecharts["series"] =   [
                                            ["name" => "Expense",     "data"      => $amount]
                                        ];

        return  $expenselinecharts ;

    }

    public function getIncomeVsExpenseChartData()
    {
        $start              =   Carbon::now()->startOfYear();
        $end                =   Carbon::now()->endOfYear();

        $stats = DB::table('easymanage_transaction')
            ->whereBetween('created_at', [$start, $end])
            ->groupBy('month_date')
            ->orderBy('month', 'ASC')
            ->get([
                DB::raw('MONTH(date) as month'),
                DB::raw('MONTHNAME(date) as month_date'),
                DB::raw('SUM(cr) as cr'),
                DB::raw('SUM(dr) as dr'),
            ]);

        foreach ($stats as $list) {
            $month_name[]               =   $list->month_date;
            $amountincome[]             =   intval($list->cr);
            $amountexpense[]            =   intval($list->dr);
        }

        $incomevsexpenselinecharts["chart"]    = ["type" => "line"];
        $incomevsexpenselinecharts['credits']  = ['enabled' => false];
        $incomevsexpenselinecharts["title"]    = ["text" => "Income vs Expense Report"];
        $incomevsexpenselinecharts["subtitle"] = ["text" => date('Y')];
        $incomevsexpenselinecharts["tooltip"]  = ["valuePrefix" => " ₹ "];

        $incomevsexpenselinecharts["xAxis"]    = ["categories" => $month_name];
        $incomevsexpenselinecharts["yAxis"]    = [
            ["title" => ["text" => "Amount  ( ₹ )"]
            ],
            [
                ['plotLines' => ['value' => 0, 'width' => 1, 'color' => '#808080' ]]
            ]
        ];

        $incomevsexpenselinecharts["series"] =   [
            ["name" => "Income",        "data"      => $amountincome],
            ["name" => "Expense",       "data"      => $amountexpense]
        ];

        return  $incomevsexpenselinecharts ;
    }
}
