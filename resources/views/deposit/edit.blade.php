@extends('layouts.backend')

@section('title', ' | Edit Deposit')
@stop

@section('content')

{!! Breadcrumbs::render('deposit.edit', $list) !!}

@include('includes.status')
@include('includes.errors')
@include('includes.deletemodal')

<br/>
<div class="row">

<div class="col-sm-1"></div>

<div class="col-sm-10">
        <h2 align="center">Edit Deposit</h2>
        <br/>

    {!! Form::model($list, ['method' => 'PATCH','route' => ['deposit.update', $list->id], 'class' => 'form-signin' , 'data-parsley-validate' ]) !!}
              @include('deposit.depositform')
    {!! Form::close() !!}

<div class="col-sm-1"></div>

    <br/>
    <div align="center">
    <a href="{{ route('deposit.index') }}" class="btn btn-info"> <i class="fa fa-arrow-left"></i> Back</a>
    <br/>
    <br/>
    {{--{!! Form::open(['method'=> 'DELETE', 'route' => ['deposit.destroy', $list->id]]) !!}--}}
        {{--<button class="btn btn-danger" type="button" data-toggle="modal" data-target="#confirmDelete" data-title="Delete Deposit" data-message="You will not be able to recover this Deposit after deleting this ? Balance will be adjusted automatically.">--}}
            {{--<i class="glyphicon glyphicon-trash"></i> Delete--}}
        {{--</button>--}}
    {{--{!! Form::close() !!}--}}
    </div>
    <br/>

</div>
</div>
<div class="col-sm-2"></div>

@stop

@push('scripts')
    @include('includes.js.deleteconfirm')
@endpush

@push('scripts')
    @include('includes.js.datepicker')
@endpush