<div class="col-sm-3">
</div>


<div class="col-sm-6">
<div class="panel panel-default">

<div class="panel-body">
<h5 align="center">Identity Card</h5>

<hr/>

<div align="center">
@if(is_null($staffs->photo_url) or $staffs->photo_url == 'blank-complaint.png')
<img src="../images/complaints/blank-complaint.png" width="250" height="auto">
@else
<img src="../images/staffs/{{ $staffs->photo_url }}" width="250" height="auto">
@endif
</div>

<hr/>

<div class="row">
    <div class="col-sm-5">
        <h5>Name </h5>
        <h5>Gender </h5>
        <h5>Mobile </h5>
        <h5>Date of Birth </h5>
        <h5>Nationality </h5>
        <h5>Role </h5>
    </div>

    <div class="col-sm-1">
        <h5>:</h5>
        <h5>:</h5>
        <h5>:</h5>
        <h5>:</h5>
        <h5>:</h5>
        <h5>:</h5>
    </div>

    <div class="col-sm-5">
        <h5>{{ $staffs->staff_name }} ({{ $staffs->alias }})</h5>
        <h5>{{ $staffs->gender->gender }}</h5>
        <h5>{{ $staffs->mobile_no }}</h5>
        <h5>{{ $staffs->dob->format('d-m-Y') }}</h5>
        <h5>{{ $staffs->nationality->nationality }}</h5>
        <h5>{{ $staffs->staff_role->role_name }}</h5>

    </div>

</div>
<hr/>
<div class="row">
<div class="col-sm-12">
    <h5>Address :         {{ $staffs->address }}</h5>
</div>
</div>

<div class="row">
<div class="col-sm-12">
    <h5>Languages Known :  </h5>
    <h5>
    @foreach($staffs->language as $lang)
          <li>{{ $lang->language_name }}</li>
    @endforeach
    </h5>
</div>
</div>


<hr/>

<div class="pull-left">
<a href="{{ route('staffs.index') }}" title="Bank to Staff List" class="btn btn-success"><i class="fa fa-arrow-left"></i> Back</a>
</div>


<div class="pull-right">
    {!! Form::open(['method' => 'DELETE', 'route' => ['staffs.destroy', $staffs->id]]) !!}
        {!! Form::submit('Delete', ['class' => 'btn btn-danger','title' => 'Delete this Staff Details']) !!}
    {!! Form::close() !!}
</div>

<div align="center">
    <a href="{{ route('staffs.edit', $staffs->id) }}" title="Edit Staff Details" class="btn btn-primary"><i class="fa fa-edit"></i> Edit</a>
</div>

</div>
</div>
</div>

<div class="col-sm-3">
</div>