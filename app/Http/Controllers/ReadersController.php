<?php namespace App\Http\Controllers;

use App\Models\AdminProfile;
use App\Models\Profile;

class ReadersController extends Controller {

    public function getTNC()
    {
        return view('readers.tnc');
    }

    public function getPrivacyPolicy()
    {
        return view('readers.privacypolicy');
    }

    public function getHelp()
    {
        return view('readers.help');
    }
}