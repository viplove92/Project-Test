@extends('layouts.backend')

@section('title', ' | Polls')@stop

@section('content')

    {!! Breadcrumbs::render('polls.index') !!}

    @include('includes.status')
    @include('includes.errors')
    @include('includes.deletemodal')

    <br/>

    <div class="row">

        <div class="col-sm-1"></div>

        <div class="col-sm-10">
            <div class="easybox float-e-margins">
                <div class="easybox-content" id="easybox_form">
                    <h2 align="center">Polls</h2>
                    <div align="center">
                        <a href="{{ route('polls.create') }}" class="btn btn-info"> <i class="fa fa-plus-square"></i>  Create Poll</a>
                    </div>
                    <br/>
                    @if(count($lists))
                        @include('polls._list')
                    @else
                        <hr/>
                        <h4 align="center">No Polls Created Yet</h4>
                        <hr/>
                    @endif

                </div>
            </div>
            @include('includes.partials._paginate')

        </div>
    </div>
    <div class="col-sm-1"></div>

@stop