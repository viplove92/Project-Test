<?php

namespace App\Http\Controllers;

use App\Http\Requests\ApartmentRequest;
use App\Models\Apartment;
use App\Models\Floor;
use App\Models\Profile;

use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Response;
use Mmanos\Search\Query;

class ApartmentController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:user');
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $lists = Apartment::searchByQuery([
            "bool" => [
                'must' => [
                    'multi_match' => [
                        'query' => Input::get('query', ''),
                        'fields' => [ "name^6","pincode^5", "address_line1^4", "address_line2^3", "address_line3^2", "city", "state", "country"]
                    ],
                ],
                "should" => [
                    'match' => [
                        'city' => [
                            "query" => Input::get('query', ''),
                            "type" => "phrase"
                        ]
                    ]
                ]
            ]
        ]);

        return view('apartments.search', compact('lists'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $disable        = null;

        return view('apartments.create', compact('disable'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param ApartmentRequest $request
     * @return Response
     */
    public function store(ApartmentRequest $request)
    {
        $floor      =   $request->floor;
        $block      =   $request->block;

        dd($floor);

        $user = Auth::user();
        $profile = $user->profile->id;

        $new = Apartment::create($request->all());
        $new->addToIndex();                                                 // add to elasticsearch index

        $new->profiles()->attach($profile, ['approved' => '1']);            // associate apartment with profile
        $new->profile()->attach($profile);                                  // make this user admin

        return redirect()->route('my-apartments')
            ->withMessage('Apartment has been Added and you are the Admin')
            ->withStatus('success');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $apartment = Apartment::findOrFail($id);
//        $apartment = Apartment::findBySlugOrId($id);

        $user = Auth::user();
        $profile = Profile::find($user->profile->id);

        $profilelist    = Apartment::find($id)->profiles()->approved()->get();

        $prof = $apartment->profiles()->where('profile_id','=', Auth::user()->profile->id)->first(); // fetches profile_id from pivot table

        $admin = Apartment::findOrFail($id);

//        $floorno = Floor::lists('floor_no', 'floor_no');

//        $floorno = [];
//        for ($floor=1; $floor <= $admin->floor; $floor++) $floorno[$floor] = $floor;
//
//        $wingno = [];
//        for ($wing=1; $wing <= $admin->wing; $wing++) $wingno[$wing] = $wing;
//
//        $alphas = range('A', 'Z');

//        dd($alphas);

        return view('apartments.show', compact('apartment', 'profile', 'profilelist', 'admin', 'prof', 'floorno', 'wingno', 'alphas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $disable        =       1;
        $user           =       Auth::user();
        $profile_id     =       $user->profile->id;
        $apartment      =       Apartment::findOrFail($id);

        $admin          =       Apartment::findOrFail($id);

        if ($admin->profile->contains($profile_id))
        {
            return view('apartments.edit', compact('apartment', 'disable'));
        }
        else
        {
            return redirect()->back()
                ->with('warning','You are not Admin to edit');
        }

    }

    /**
     * Update the specified resource in storage.
     *
     * @param ApartmentRequest $request
     * @param  int $id
     * @return Response
     */
    public function update(ApartmentRequest $request, $id)
    {
        $apartment = Apartment::findOrFail($id);

        $input = $request->all();

        $apartment->fill($input)->save();
        $apartment->updateIndex();                         // update to elasticsearch index

//        return redirect()->route('apartments.show', compact('apartment'))
        return redirect()->route('my-apartments')
            ->withMessage('Apartment Details has been Updated')
            ->withStatus('success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $apartment = Apartment::findOrFail($id);

        $apartment->delete();
        $apartment->removeFromIndex();

        return redirect()->route('apartments.index', compact('apartment'))
            ->withMessage('Apartment has been Deleted')
            ->withStatus('success');
    }


    /**
     * @return \Illuminate\View\View
     */
    public function getApprovedApartments()
    {
        $user = Auth::user();
        $apartments = Profile::find($user->profile->id)->apartments()->approved()->get();

        return view('apartments.home', compact('apartments', 'user'));
    }

    /**
     * @param $id
     * @return mixed
     */
    public function associateApartment($id)
    {
        $apartment = Apartment::find($id);
        $user = Auth::user();
        $profile = Profile::find($user->profile->id);

        if ($apartment->profiles->contains($profile))
        {
            $apartment->profiles()->detach($profile);
            return redirect()->route('apartments.show', [$apartment->id])
                ->withMessage('Apartment Removed from your List.')
                ->withStatus('danger');
        }
        else
        {
            //            $apartment->profiles()->attach($profile, ['approved' => '0', 'block_no' => '312', 'floor_no' => 'Second']);
            $apartment->profiles()->attach($profile);
            return redirect()->route('apartments.show', [$apartment->id])
                ->withMessage('Add Request sent to Admin of the Apartment !')
                ->withStatus('success');
        }
    }

    /**
     * @param Request $request
     * @param $id
     * @return mixed
     */
    public function setDefaultApartment(Request $request, $id)
    {
        $user = Auth::user();
        $apartment = Apartment::findorfail($id);

        $user->profile->defaultApartment = $apartment->id;

        $user->profile->save();

        return redirect()->back()
            ->withMessage('Default Apartment has been changed')
            ->withStatus('success');
    }


    /**
     * @param Request $request
     * @return mixed
     */
    public function storeApartmentUserInfo(Request $request)
    {
        $apartment = Apartment::find(32);
        $profile = Auth::user()->profile;

        $block_no       =   $request->input('blockno'); // get block_no from profileform
        $floor_no       =   $request->input('floorno'); // get floor_no from profileform

        $profile->apartments()->detach($apartment);
        $profile->apartments()->attach($apartment , ['approved' => '1', 'block_no' => $block_no, 'floor_no' => $floor_no]);

        return redirect()->back()
            ->withMessage('Block / Flat Number Updated')
            ->withStatus('success');
    }

}
