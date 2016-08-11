<div class="card col2 padding-20" data-social="item">
  <p class="m-b-5 small">{{ $profilelist->count() }} Total</p>
      <ul class="list-unstyled">
      @foreach($profilelist as $pro)
        <li class="m-r-10">
          <div class="thumbnail-wrapper d48 circular b-white m-r-5 b-a b-white">
        @if(is_null($pro->avatar))
              <img src="http://easymanage.dev/../images/profiles/blank-profile.png" title="{{ $pro->user->first_name }} {{ $pro->user->last_name }}" height="auto" width="32" alt="logo" >
        @else
            <img width="55" height="55" title="{{ $pro->user->first_name }} {{ $pro->user->last_name }}" data-src-retina="../images/profiles/{{ $pro->avatar }}" data-src="../images/profiles/{{ $pro->avatar }}" alt="Profile Image" src="../images/profiles/{{ $pro->avatar }}">
        @endif
          </div>
        </li>
      @endforeach
      </ul>
</div>
