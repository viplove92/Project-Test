@extends('layouts.backend')

@section('title', ' | Pages Calendar Date wise Reports')@stop

@section('content')

{{--    {!! Breadcrumbs::render('reportsbydate') !!}--}}

    @include('includes.status')
    @include('includes.errors')
    <br/>

    <h3 align="center">Datewise Reports</h3>
    <br/>

    <div class="row">
        <div class="col-sm-12">
            <div id="myCalendar" class="full-height"></div>

        </div>
    </div>
    <hr>

@stop

@push('scripts')
<script>

    $(document).ready(function() {
        $('#myCalendar').pagescalendar(
                {!! json_encode($events) !!}
             );
    });

</script>
@endpush