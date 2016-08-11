<div class="col-md-4">
<h4 class="margin fs-16"><b>Address - </b></h4>
<h6 class="no-margin fs-16">
{{ $apartment->address_line1 }},

@if($apartment->address_line2 !== '')
{{ $apartment->address_line2 }}, </h6>
@else
{{-- Show Nothing --}}
@endif

<h6 class="no-margin fs-16">

@if($apartment->address_line3 !== '')
{{ $apartment->address_line3 }},
@else
{{-- Show Nothing --}}
@endif

{{ $apartment->city }},
</h6>

<h6 class="no-margin fs-16">
{{ $apartment->state }},
{{ $apartment->country }}.
</h6>

<h6 class="no-margin fs-16">
 {{ $apartment->pincode }}
</h6>

<p></p>
</div>
