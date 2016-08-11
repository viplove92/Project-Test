@extends('layouts.backend')

@section('title', ' | Edit Expense')
@stop

@section('content')

{!! Breadcrumbs::render('expense.edit', $list) !!}

@include('includes.status')
@include('includes.errors')
@include('includes.deletemodal')

<div class="row">

<div class="col-sm-1"></div>

<div class="col-sm-10">
    <div class="easybox float-e-margins">
    <div class="easybox-content" id="easybox_form">
        <h2 align="center">Edit Expense</h2>
        <br/>

    {!! Form::model($list, ['method' => 'PATCH','route' => ['expense.update', $list->id], 'class' => 'form-signin' , 'data-parsley-validate' ]) !!}
              @include('expense.expenseform')
    {!! Form::close() !!}
    </div>
    </div>
<div class="col-sm-1"></div>

    <br/>
    <div align="center">
    <a href="{{ route('expense.index') }}" class="btn btn-info"> <i class="fa fa-arrow-left"></i> Back</a>
    <br/>
    <br/>
    {{--{!! Form::open(['method'=> 'DELETE', 'route' => ['expense.destroy', $list->id]]) !!}--}}
        {{--<button class="btn btn-danger" type="button" data-toggle="modal" data-target="#confirmDelete" data-title="Delete Expense" data-message="You will not be able to recover this Expense after deleting this ? Balance will be adjusted automatically.">--}}
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