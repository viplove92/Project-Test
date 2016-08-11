@extends('layouts.backend')

@section('title', ' | Edit Poll')@stop

@section('content')

    {!! Breadcrumbs::render('polls.edit', $list) !!}

    @include('includes.status')
    @include('includes.errors')
    @include('includes.deletemodal')
    <br/>

    <div class="row">
        <div class="col-sm-3"></div>

        <div class="col-sm-6" >
            <h2 align="center">Edit Poll </h2>
            <br/>

            {!! Form::model($list, ['method' => 'PATCH','route' => ['polls.update', $list->id], 'class' => 'form-signin' , 'data-parsley-validate' ]) !!}

            @include('polls.pollform')

            {!! Form::close() !!}

            <div class="col-sm-3"></div>

        </div>
    </div>
@stop