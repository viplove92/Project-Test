@extends('layouts.backend')

@section('content')

<div class="col-md-6">

    {!! Form::model($mtncstaff, ['method' => 'PATCH','route' => ['mtncstaffs.update', $mtncstaff->id]] ) !!}

        @include('mtncstaff.mtncform', ['submitButtonText' => 'Edit Staff Details'])

    {!! Form::close() !!}

<br/>
 <a href="{{ route('mtncstaffs.index') }}" class="btn btn-info">List </a>

</div>

@push('scripts')

 <script type="text/javascript">
        window.ParsleyConfig = {
            errorsWrapper: '<div></div>',
            errorTemplate: '<div class="alert alert-danger parsley" role="alert"></div>'
        };
    </script>

    {!! HTML::script('../assets/easy/parsley.min.js') !!}


@endpush

@stop

