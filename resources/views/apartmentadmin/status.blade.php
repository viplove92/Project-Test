<div class="card status col2" data-social="item">
<h2> Your Details </h2>
<h3>Block / Flat No : {{ $prof->pivot->block_no }}</h3>
<h3>Floor No : {{ $prof->pivot->floor_no }}</h3>
<br/>

@if($prof->pivot->isOwner == "on" or $prof->pivot->isOwner == 1)
<h4>You are Owner</h4>
@else
<h4>You are Tenant</h4>
@endif

@if($prof->pivot->lock == "on" or $prof->pivot->isOwner == 1)
<h4>Profile is Locked, Admin cannot change your user details</h4>
@else
<h4>Admin Can change your user details</h4>
@endif

<span class="hint-text">need to update above details, <a href="#">Contact admin of this apartment</a></span>
</div>