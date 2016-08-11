<?php namespace App\Http\Controllers;

use App\Http\Requests;

use Spatie\Activitylog\Models\Activity;


class UtilityController extends Controller
{
    public function getActivityLog()
    {
//        $lists      =   SysLog::orderBy('created_at','DESC')->paginate(10);
        $lists      =   Activity::with('user')->latest()->limit(100)->paginate(20);

        return view('utilities.activitylog', compact('lists'));

    }

    public function getEmailMessageLog()
    {
        echo "Email Log";
    }
}
