@extends('.........layouts.backend')

@section('title', ' | Edit')
@stop

@section('content')

<div class="col-md-6">

{!! Form::model($staff, ['method' => 'PATCH', 'route' => ['staffs.update', $staff->id] ] ) !!}

    <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group form-group-default">
                           {!! Form::label('first_name', 'First Name:', ['class' => 'control-label']) !!}
                           {!! Form::text('first_name', null, ['class' => 'form-control']) !!}
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group form-group-default">
                           {!! Form::label('last_name', 'Last Name:', ['class' => 'control-label']) !!}
                           {!! Form::text('last_name', null, ['class' => 'form-control']) !!}
                        </div>
                    </div>
                </div>

    <div class="form-group form-group-default">
                        {!! Form::label('designation', 'Designation:', ['class' => 'control-label']) !!}
                        {!! Form::text('designation', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group form-group-default">
                        {!! Form::label('photos', 'Photo:', ['class' => 'control-label']) !!}
                        {!! Form::text('photos', null, ['class' => 'form-control']) !!}
    </div>


    {!! Form::submit('Update Staff Details', ['class' => 'btn btn-primary']) !!}

{!! Form::close() !!}

</div>

@stop
