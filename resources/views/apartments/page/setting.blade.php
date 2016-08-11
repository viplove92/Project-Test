@if ( $admin->profile->contains($profile) && Auth::user()->profile->defaultApartment == $apartment->id)

<div class="dropdown pull-right">
    <button class="profile-dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" title="Click for More Features and Setting"><i class="fa fa-cog fa-2x"></i>
    </button>

  <ul class="dropdown-menu profile-dropdown" role="menu">

    <li><a href="{{ route('members.create') }}" title="Add Bulk Users"><i class="fa fa-users"></i> Add Users</a>
    </li>
    <li><a href="{{ route('apartments.edit', $apartment->id) }}" title="Edit Address Details of this Apartment"><i class="fa fa-edit"></i> Edit</a>
    </li>

    <li class="bg-master-lighter">
            {!! Form::open(['method' => 'DELETE', 'route' => ['apartments.destroy', $apartment->id]]) !!}
            {!! Form::submit('Delete this Apartments ?', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
        {{--<a href="{{ route('apartments.destroy', $apartment->id) }}" class="clearfix">--}}
        {{--<span class="pull-left" title="Delete this Apartment">Delete</span>--}}
        {{--<span class="pull-right"><i class="fa fa-trash"></i></span>--}}
        {{--</a>--}}
    </li>
  </ul>

</div>

@endif
