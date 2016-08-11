<?php namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Item;
use App\Models\Transaction;
use Carbon\Carbon;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    public function index()
    {

        dd(Auth::user());

        return Item::all()->toArray();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

    public function indexTest()
    {

        $start     =   Carbon::now()->daysInMonth;

        for($i=1; $i<=$start; $i++)
            $result[] = $i;

        $yourFirstChart["chart"] = array("type" => "area");
        $yourFirstChart['credits'] = ['enabled' => false];
        $yourFirstChart["title"] = array("text" => "Income vs Expense");

//        $yourFirstChart["xAxis"] = ["categories" => ['Apples', 'Bananas', 'Oranges']];
        $yourFirstChart["xAxis"] = ["categories" => $result];
        $yourFirstChart["yAxis"] = array("title" => array("text" => "Fruit eaten"));

        $yourFirstChart["series"] = [
            array("name" => "Jane", "data" => [1,0,1,0,1,0,1,0,1,0,1,0,1,0,1,0,4]),
            array("name" => "John", "data" => [5,7,5,7,5,7,5,7,5,7,5,7,5,7,5,7,3])
        ];


        return view('dump.temp', compact('yourFirstChart'));

    }
}
