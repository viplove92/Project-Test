@extends('layouts.backend')

@section('title', ' | Edit Transfer')@stop

@section('content')

{!! Breadcrumbs::render('transfer.edit', $list) !!}

@include('includes.status')
@include('includes.errors')
@include('includes.deletemodal')

<br/>
<div class="row">

<div class="col-sm-2"></div>

<div class="col-sm-8">
        <h2 align="center">Edit Transfer</h2>
        <br/>

    {!! Form::model($list, ['method' => 'PATCH','route' => ['transfer.update', $list->id], 'class' => 'form-signin' , 'data-parsley-validate' ]) !!}
              @include('transfer.transferform')
    {!! Form::close() !!}

<div class="col-sm-2"></div>

    <br/>
    <div align="center">
    <a href="{{ route('transfer.index') }}" class="btn btn-info"> <i class="fa fa-arrow-left"></i> Back</a>
    <br/>
    <br/>
    {{--{!! Form::open(['method'=> 'DELETE', 'route' => ['deposit.destroy', $list->id]]) !!}--}}
        {{--<button class="btn btn-danger" type="button" data-toggle="modal" data-target="#confirmDelete" data-title="Delete Transfer" data-message="You will not be able to recover this Transfer after deleting this ? Balance will be adjusted automatically.">--}}
            {{--<i class="glyphicon glyphicon-trash"></i> Delete--}}
        {{--</button>--}}
    {{--{!! Form::close() !!}--}}
    </div>
    <br/>

</div>
</div>
<div class="col-sm-2"></div>

@stop