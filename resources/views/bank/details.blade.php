<div class="col-sm-3">
</div>


<div class="col-sm-6">
<div class="panel panel-default">

<div class="panel-body">
<h5 align="center">Bank Details</h5>

<hr/>

<div align="center">
    @include('bank.bank-logo')
</div>

<hr/>

<div class="row">
    <div class="col-sm-5">
        <h5>Bank Name </h5>
        <h5>IFSC </h5>
        <h5>MICR </h5>
        <h5>Branch </h5>
        <h5>District </h5>
        <h5>State </h5>
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
        <h5>{{ $banks->bank }}</h5>
        <h5>{{ $banks->ifsc }}</h5>
        <h5>{{ $banks->micrcode }}</h5>
        <h5>{{ $banks->branch }}</h5>
        <h5>{{ $banks->district }}</h5>
        <h5>{{ $banks->state }}</h5>
{{--        <h5>{{ $staffs->nationality->nationality }}</h5>--}}
{{--        <h5>{{ $staffs->staff_role->role_name }}</h5>--}}

    </div>

</div>
<hr/>
<div class="row">
<div class="col-sm-12">
    <h5>Address :         {{ $banks->address }}</h5>
</div>
</div>

<div class="row">
<div class="col-sm-12">
    {{--<h5>Languages Known :  </h5>--}}
    {{--<h5>--}}
    {{--@foreach($staffs->language as $lang)--}}
          {{--<li>{{ $lang->language_name }}</li>--}}
    {{--@endforeach--}}
    {{--</h5>--}}
</div>
</div>


<hr/>

<div class="pull-left">
<a href="{{ route('bank.index') }}" title="Bank to Staff List" class="btn btn-success"><i class="fa fa-arrow-left"></i> Back</a>
</div>


<div class="pull-right">
    {{--{!! Form::open(['method' => 'DELETE', 'route' => ['bank.destroy', $banks->id]]) !!}--}}
        {{--{!! Form::submit('Delete', ['class' => 'btn btn-danger','title' => 'Delete this Staff Details']) !!}--}}
    {{--{!! Form::close() !!}--}}
</div>

<div align="center">
    <a href="{{ route('linkBank', $banks->id) }}" title="Link this Bank" class="btn btn-primary"><i class="fa fa-link"></i> Link</a>
</div>

</div>
</div>
</div>

<div class="col-sm-3">
</div>