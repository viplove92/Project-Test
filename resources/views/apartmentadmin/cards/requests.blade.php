{{--<div align="center"><h2>Members waiting for Approval</h2></div>--}}

    @if($requestBy->count() > 0)
        @foreach($requestBy as $requestedBy)
        <div class="col-sm-3 b-r b-dashed b-grey" align="center">
        <div class="card status col0" data-social="item">

            {{--<div align="middle" class="thumbnail-wrapper d64  circular inline m-t-5">--}}
              <img align="middle" width="50" height="auto" src="images/profiles/{{ $requestedBy->user->profile->avatar }}" alt="">
            {{--</div>--}}
             <div class="col-xs-height p-l-10">
{{--                <h4>{{ $requestedBy->user->first_name }} {{ $requestedBy->user->last_name }}</h4>--}}
                <a href="{{ route('profiles.show', $requestedBy->id) }}"><h4>{{ $requestedBy->user->first_name }} {{ $requestedBy->user->last_name }}</h4></a>
            </div>


            <a href="{{ route('apartmentadmin.edit', $requestedBy->id) }}" class="btn btn-success">Approve</a>
            <a href="{{ route('apartmentadmin.show', $requestedBy->id) }}" class="btn btn-danger">Reject</a>

        </div>
        </div>
        @endforeach
    @else
        <div align="center"><h4>No New Request</h4></div>
    @endif