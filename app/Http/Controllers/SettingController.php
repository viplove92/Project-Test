<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class SettingController extends Controller
{

    public function getIncomeCategories()
    {
        echo "Get All Income Categories";
    }

    public function getExpenseCategories()
    {
        echo "Get All Expense Categories";
    }

}
