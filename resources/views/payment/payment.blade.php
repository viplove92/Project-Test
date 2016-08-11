@extends('layouts.backend')

@section('title', ' | Test Payment')@stop

@section('content')

{{--    {!! Breadcrumbs::render('payment.create') !!}--}}

    @include('includes.status')
    @include('includes.errors')
    @include('includes.deletemodal')

    <br/>

    <div class="row">

        <div class="col-sm-3">
            <h2 align="center">Test - Input Data</h2>
            <br/>
            <div class="easybox float-e-margins">
            <div class="easybox-content" id="easybox_form">

                <h5> Card Holder Name - <br> Suchay Janbandhu</h5>
                <h5> Card Number - <br> 1234567890</h5>
                <h5> Expiry - <br> July - 2021</h5>
                <h5> CVV - <br> 123</h5>

            </div>
            </div>
        </div>

        <div class="col-sm-6">
            <h2 align="center">Test - Payment Gateway</h2>
            <br/>

            {!! Form::open(['url' => route('payment.store'),'class' => 'form-signin' ,'data-parsley-validate', 'files' => true] ) !!}
                @include('payment.paymentform')
            {!! Form::close() !!}

            <br/>
            <div align="center">
                <a href="{{ route('user.home') }}" class="btn btn-info"><i class="fa fa-arrow-left"></i> Back </a>
            </div>
            <br/>

        </div>
    </div>
    <div class="col-sm-3"></div>

@stop

