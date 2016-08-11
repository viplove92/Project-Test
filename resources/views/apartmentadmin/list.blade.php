<h1 align="center">Apartment Users</h1>
<hr/>
<h4 align="center"><a href="{{ route('members.create') }}" class="btn btn-success">Add New user</a></h4>

@if ($profiles->count())
<div class="panel-body">
<table class="table table-hover" id="myDataTable" cellspacing="0" width="100%">
    <thead>
    <tr>
    <th>Name</th>
    <th>Email</th>
    <th>Action</th>

    </tr>
    </thead>
    <tbody>
    @foreach ($profiles as $profile)
    <tr>
    <td class="v-align-middle">{{ $profile->user->first_name }} {{ $profile->user->last_name }}</td>
    <td class="v-align-middle">{{ $profile->user->email }}</td>

    <td><a href="{{ route('members.show', [$profile->user->id]) }}" class="btn btn-info">Show</a></td>
    </tr>
    @endforeach
    </tbody>
</table>
</div>
@else
    <h4 align="center">There are no users</h4>
@endif



@if ($requestBy->count())
<h1 align="center">New Requests</h1>

<div class="panel-body">
<table class="table table-hover" id="myDataTable" cellspacing="0" width="100%">
    <thead>
    <tr>
    <th>Profile Pic</th>
    <th>Name</th>
    <th>Email</th>
    <th>Action</th>
    </tr>
    </thead>

    <tbody>
    @foreach ($requestBy as $requestedBy)
    <tr>
    <td>
        @if(is_null($requestedBy->avatar))
            <img src="http://easymanage.dev/../images/profiles/blank-profile.png" width="32" height="auto" alt="logo">
        @else
            <img src="http://easymanage.dev/../images/profiles/{{ $requestedBy->avatar}}" width="32" height="auto" alt="logo">
        @endif
    </td>

    <td class="v-align-middle">{{ $requestedBy->user->first_name }} {{ $requestedBy->user->last_name }}</td>
    <td class="v-align-middle">{{ $requestedBy->user->email }}</td>

    <td>
    <a href="{{ route('accept', $requestedBy->id) }}" class="btn btn-success">Approve</a>
    <a href="{{ route('reject', $requestedBy->id) }}" class="btn btn-danger">Reject</a>
    </td>
    </tr>
    @endforeach
    </tbody>
</table>
</div>

@else

<h4 align="center">There are no new requests</h4>

@endif
