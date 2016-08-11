@extends('layouts.backend')

@section('content')

<div class="col-md-6">

    {!! Form::open(['url' => route('mtncstaffs.store'),'class' => 'form-signin', 'files' => true] ) !!}

        @include('mtncstaff.mtncform', ['submitButtonText' => 'Create Staff'])

    {!! Form::close() !!}

<br/>
<a href="{{ route('mtncstaffs.index') }}" class="btn btn-info">List </a>

</div>
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
