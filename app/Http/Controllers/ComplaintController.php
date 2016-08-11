<?php namespace App\Http\Controllers;

use App\Http\Requests\ComplaintRequest;
use App\Models\Area;
use App\Models\Complaint;
use App\Models\Problem;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Input;
use Intervention\Image\Facades\Image;
use Spatie\Activitylog\Models\Activity;
use Srmklive\FlashAlert\Facades\FlashAlert;
use View;

class ComplaintController extends Controller
{

//    public function __construct()
//    {
//        $this->middleware('auth:user');
//    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $lists = Complaint::DefaultApartment()->latest()->paginate(6);

        return view ('complaints.index', compact('lists'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $types  =   Problem::lists('problem_types', 'problem_types');
        $area   =   Area::lists('area','area');

        $disable        = null;

        return view('complaints.create', compact('types','area', 'disable'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param ComplaintRequest $request
     * @return Response
     */
    public function store(ComplaintRequest $request)
    {
        $filename = 'blank-complaint.png';

        if(Input::file())
        {
            $string = str_random(20);
            $image = Input::file('image');
            $filename  = $string . time(). date('dmY') . '.' . $image->getClientOriginalExtension();

            $path = public_path('/images/complaints/' . $filename);

            Image::make($image->getRealPath())
                ->resize(800, null, function ($constraint)
                { $constraint->aspectRatio(); })
                ->save($path, 60); // compress image quality to medium(60) and save image to specified path.
        }

            $input = $request->all();
            $input['apartment_id'] = Auth::user()->profile->defaultApartment;
            $input['profile_id'] = Auth::user()->profile->id;
            $input['photo_url'] = $filename;

            Complaint::create($input);

            return redirect()->route('complaints.index')
                ->withMessage('Complaint Raised and sent to Apartment\'s Admin')
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
        try {
            $complaint = Complaint::findOrFail($id);
        } catch (Exception $e) {
            return redirect()->back()
                ->withMessage('Error showing Complaint, Possibly it is not available')
                ->withStatus('error');
        }

        return view('complaints.timeline.home', compact('complaint'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $types      =   Problem::lists('problem_types', 'problem_types');
        $area       =   Area::lists('area','area');
        $complaint  =   Complaint::findOrFail($id);

        $disable        = 1;

        return view ('complaints.edit', compact('complaint', 'types', 'area', 'disable'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param ComplaintRequest $request
     * @param  int $id
     * @return Response
     */
    public function update(ComplaintRequest $request, $id)
    {
        $filename = 'blank-complaint.png';

        if(Input::file())
        {
            $string = str_random(20);
            $image = Input::file('image');
            $filename  = $string . time(). date('dmY') . '.' . $image->getClientOriginalExtension();

            $path = public_path('/images/complaints/' . $filename);

            Image::make($image->getRealPath())
                ->resize(800, null, function ($constraint)
                { $constraint->aspectRatio(); })
                ->save($path, 60); // compress image quality to medium(60) and save image to specified path.
        }

        $complaint = Complaint::findOrFail($id);

        $input = $request->all();
        $input['photo_url'] = $filename;

        $complaint->fill($input)->save();

        return redirect()->route('complaints.show', compact('complaint'))
                        ->withMessage('Complaints Updated')
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
        try {

            $complaint = Complaint::find($id);
            $complaint->delete();

        } catch (Exception $e) {
            return redirect()->back()
                ->withMessage('Error deleting Complaint, Possibly it is already Deleted')
                ->withStatus('error');
        }

        return redirect()->route('complaints.index', compact('complaint'))
            ->withMessage('Complaints Updated')
            ->withStatus('success');
    }

}