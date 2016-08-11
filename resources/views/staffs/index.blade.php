@extends('layouts.backend')

@section('title', ' | Service Staff')@stop

@section('content')

{!! Breadcrumbs::render('staffs.index') !!}

@include('includes.errors')
@include('includes.status')

<div align="center">
        <a href="{{ route('staffs.create') }}" class="btn btn-info"> <i class="fa fa-plus-square"></i>  Add Staff </a>

</div>
<hr/>

@if($lists->count() > 0)
    @foreach($lists as $list)

<div class="col-sm-3 b-r b-dashed b-grey">

<div class="row padding-20">
<div class="panel">

@if(is_null($list->photo_url) or $list->photo_url == 'blank-complaint.png')
<a href="{{ route('staffs.show', $list->id) }}" title="Click for Details"><img src="../images/complaints/blank-complaint.png" alt="" class="image-responsive-height"></a>
@else
<a href="{{ route('staffs.show', $list->id) }}" title="Click for Details"><img src="../images/staffs/{{ $list->photo_url }}" alt="" class="image-responsive-height"></a>
@endif

<div class="panel-heading">
  <a href="{{ route('staffs.show', $list->id) }}"> <h4> {{ $list->staff_name }} </h4>
  <h6> {{ $list->alias }} </h6> </a>
</div>

</div>
</div>
</div>
    @endforeach
@else

    <div align="center"><h4>No Staff added yet</h4></div>
    <div align="center">
    {{--<a href="{{ route('staffs.create') }}" class="btn btn-primary" title="Add staff details">Add Staff Details</a>--}}
    </div>


@endif

@endsection
