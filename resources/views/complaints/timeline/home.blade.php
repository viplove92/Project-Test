@extends('layouts.backend')

@section('title', ' | Complaints Timeline')@stop

@section('content')

{!! Breadcrumbs::render('complaints.show', $complaint) !!}

<div class="timeline-container">
<section class="timeline">

@include('complaints.timeline.raised')

@if($complaint->isRead == 1)
    @include('complaints.timeline.read')
@endif

@if($complaint->isProcessing == 1)
    @include('complaints.timeline.processing')
@endif

@if($complaint->isClosed == 1)
    @include('complaints.timeline.closed')
@endif


</section>
</div>
@endsection
