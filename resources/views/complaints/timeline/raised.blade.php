<div class="timeline-block">
<div class="timeline-point warning"></div>

<div class="timeline-content">
<div class="card share full-width">
<div class="card-header clearfix">
<div class="user-pic">
<img alt="Profile Image" width="33" height="33" data-src-retina="../images/profiles/{{ $complaint->profile_id }}" data-src="../images/profiles/{{ $complaint->profile->avatar }}" src="{{ $complaint->profile->avatar }}">
</div>
<h5>{{ $complaint->profile->user->first_name }} {{ $complaint->profile->user->last_name }}</h5>
<h6>
<span class="location semi-bold"><i class="fa fa-map-marker"></i> {{ $complaint->area }}, {{ $complaint->apartment->name }}</span>
</h6>

</div>
<div class="card-description">
<h4><span class="location semi-bold"> {{ $complaint->type }} </span> Problem at <span class="location semi-bold">  {{ $complaint->area }} </span> Area  </h4>
<h5><span class="location semi-bold"> Description </span> - {{ $complaint->desc }}  </h5>
</div>

<div class="card-content">
<ul class="buttons ">

<li>
@include('complaints.timeline.modal')
</li>

</ul>
<img src="../images/complaints/{{ $complaint->photo_url }}"/>

</div>
<div class="card-footer clearfix">
<div class="time">{{ $complaint->created_at->diffForHumans() }}</div>
</div>
</div>

<div class="event-date">
<h6 class="font-montserrat all-caps hint-text m-t-0">Complaint Raised</h6>
<small class="fs-12 hint-text">{{ $complaint->created_at->format('j F Y,'.' h:m' . ' A ') }}</small>
</div>
</div>
</div>