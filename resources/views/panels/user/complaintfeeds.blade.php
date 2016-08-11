<div class="col-md-12 col-md-offset-2">
<div class="card share share-self col1" data-social="item">

    <div class="circle" data-toggle="tooltip" title="Hide"></div>
    <div class="card-header clearfix">

        <div class="user-pic">

                @if(is_null($complaint->profile->avatar))
                 <img id="blah" src="../images/profiles/blank-profile.png" alt="Profile Pic" width="200" height="auto" title="{{ $complaint->profile->user->first_name }} {{ $complaint->profile->user->last_name }}"/>
                @else
                 <img id="blah" src="../images/profiles/{{ $complaint->profile->avatar }}" width="200" height="auto" alt="logo" title="{{ $complaint->profile->user->first_name }} {{ $complaint->profile->user->last_name }}">
                @endif

        </div>
        <h5>{{ $complaint->type }} @ {{ $complaint->area }}</h5>
        <h6>
           <a href="{{ route('apartments.show', $complaint->apartment->id) }}"><span class="location semi-bold"><i class="fa fa-map-marker"></i> {{ $complaint->apartment->name }}</span></a>
        </h6>
    </div>
    <div class="card-description">

    <p>{{ $complaint->desc }}</p>

    </div>
    <div class="card-content">
        <ul class="buttons ">
            <li>
                <a href="{{ route('complaints.show', $complaint->id) }}"><i class="fa fa-expand"></i></a>
            </li>
        </ul>
                {!! HTML::image('../images/social/social-post-image.png') !!}

    </div>
    <div id="complaint" class="card-footer clearfix">
        <div class="time" title="Reported on {{ $complaint->created_at }}">{{ $complaint->created_at->diffForHumans() }}</div>
        <ul class="reactions">

        <article v-repeat="messages">
                <h3>@{{ up }}</h3>
        </article>
{{--        {{ $complaint->complaintsupport->count() }}--}}

        <form method="POST" v-on="submit: onSubmitForm">

        <input type="hidden" name="name" id="name" value="{{ Auth::user()->profile->id }}" class="form-control" v-model="newMessage.profile_id">
        <input type="hidden" name="name" id="name" value="{{ $complaint->id }}" class="form-control" v-model="newMessage.complaint_id">
        <input type="hidden" name="name" id="name" value="1" class="form-control" v-model="newMessage.name">

        <button type='submit' title="Up Vote"><i class='fa  fa-chevron-up'></i></button>


        </form>








        {{--{!! Form::model($complaint, ['method' => 'PATCH','route' => ['complaintsupport.update', $complaint->id]] ) !!}--}}
        {{--<input type="hidden" name="complaint_id" value="{{ $complaint->id }}">--}}
        {{--<button type='submit' title="Up Vote"><i class='fa  fa-chevron-up'></i></button>--}}
        {{--{!! Form::close() !!}--}}
        {{--@endif--}}






        </ul>
    </div>
</div>
</div>

