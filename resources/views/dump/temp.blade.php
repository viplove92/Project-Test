@extends('layouts.backend')

@section('title', ' | Chart Demo')@stop

@section('content')

@include('includes.status')
@include('includes.errors')
@include('includes.deletemodal')


<div id="container" style="width:100%; height:400px;"></div>

@stop

@push('scripts')

<script>
    $(function () {
        $('#container').highcharts(
                    {!! json_encode($yourFirstChart) !!}
            );
    });
</script>

@endpush

{{--@push('scripts')--}}
    {{--@include('includes.js.chartbarjs')--}}
{{--@endpush--}}