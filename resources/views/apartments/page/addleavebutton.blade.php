{{-- Add-Request/ Requested / Leave Button --}}
@if (is_null($prof))
   <a href="{{ route('associate', $apartment->id) }}" class="btn btn-success" title="Send Add Request">Add Request</a>
@elseif ($prof->pivot->approved == 1 && ! ($admin->profile->contains($profile)))
  <a href="{{ route('associate', $apartment->id) }}" class="btn btn-danger" title="Leave this Apartment">Leave</a>
@elseif ($prof->pivot->approved == 0)
    <a class="btn btn-warning" title="Waiting for Admin Approval">Requested</a>
{{--                        @elseif($prof->pivot->approved == 1 && $admin->profile->contains($profile))--}}
@elseif($prof->pivot->approved == 1 && $admin->profile->contains($profile) && Auth::user()->profile->defaultApartment == $apartment->id)
    <a href="{{ route('members.index') }}" class="btn btn-success" title="You are Admin">Admin</a>
@endif
{{-- End Add-Request / Requested / Leave Button --}}