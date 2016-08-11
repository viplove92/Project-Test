<?php namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Psy\Util\Str;

class SearchController extends Controller
{
    public function executeSearch()
    {
        $keywords = Input::get('keywords');

        $users = User::all();

        $searchUsers = new Collection();

        foreach ($users as $u)
        {

            if(Str::contains(Str::lower($u->name), Str::lower($keywords)))
                $searchUsers->add($u);

        }

        return view('dump.searchUsers', compact('searchUsers'));

    }
}
