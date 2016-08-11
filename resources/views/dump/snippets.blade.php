{{--{!! Form::open(['method'=> 'DELETE', 'route' => ['crm.destroy', $list->id]]) !!}--}}
{{--{!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger'] )  !!}--}}
{{--{!! Form::close() !!}--}}


Route::resource('/api/banks/', 'BankncashController');

//Route::resource('/bankncash', 'BankncashController');

get('/bankncash', function(){
    return view ('bankncash.fetchBank');
});

post('/bankncash', function (BankncashRequest $request){
    return Bankncash::create($request->all());
});

//Show
get('/bankncash/{id}', function($id){
    return Bankncash::findOrFail($id);
});

delete('/bankncash', function ($id){
    return Bankncash::destroy($id);
});

patch('/bankncash/{id}/', function ($id){
    Bankncash::findOrFail($id)->update(Request::all());
    return response()->json(Request::all()); //response()->json()
});