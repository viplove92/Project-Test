<div class="timeline-block">
<div class="timeline-point info">
<i class="pg-social"></i>
</div>
<!-- timeline-point -->
<div class="timeline-content">
<div class="card share full-width ">
<div class="card-header clearfix">
<h5 class="text-warning-dark pull-left fs-12">By Admin</h5>

<div class="clearfix"></div>
</div>
<div class="card-description">
<h5 class='hint-text no-margin'>Complaint read by Admin on <span class="text-warning-dark"> {{ $complaint->readDate->format('j F Y,'.' h:m' . ' A ')}} </span></h5>
{{--<h5 class="small hint-text no-margin">NASDAQ: AAPL - Nov 13 8:37 AM ET</h5>--}}
{{--<h3>111.25 <span class="text-warning-dark"><i class="fa fa-sort-up small text-warning-dark"></i> 0.15 (0.13%)</span></h3>--}}
</div>

</div>

<div class="event-date">
<h6 class="font-montserrat all-caps hint-text m-t-0">Complaint Read</h6>
<small class="fs-12 hint-text">{{ $complaint->readDate->format('j F Y,'.' h:m' . ' A ') }}</small>
</div>

</div>
<!-- timeline-content -->
</div>