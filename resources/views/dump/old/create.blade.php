@extends('......layouts.backend')

@section('content')
    @include('......includes.errors')

    <div class="col-md-6">

        {!! Form::open(['url' => route('staffs.store'),'class' => 'form-signin', 'files' => true] ) !!}

        @include('.staffsform', ['submitButtonText' => 'Create Staff'])

        {!! Form::close() !!}

        <br/>
        <a href="{{ route('staffs.index') }}" class="btn btn-info">List </a>



    </div>

    {{--@include('staffs.check')--}}


@stop

@section('footer')

    <script type="text/javascript">
        window.ParsleyConfig = {
            errorsWrapper: '<div></div>',
            errorTemplate: '<div class="alert alert-danger parsley" role="alert"></div>'
        };
    </script>

    {!! HTML::script('../assets/easy/parsley.min.js') !!}



@stop
