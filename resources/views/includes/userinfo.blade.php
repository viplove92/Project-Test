@if (Auth::user())

          <div class="visible-lg visible-md m-t-10">
            <div class="pull-left p-r-10 p-t-10 fs-16 font-heading">
              <a href="{{ route('profiles.show', Auth::user()->profile->id) }}"><span class="semi-bold">{{ Auth::user()->first_name }} {{ Auth::user()->last_name }} </span></a>
            </div>

            <div class="dropdown pull-right">
              <button class="profile-dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="thumbnail-wrapper d32 circular inline m-t-5">

@if(is_null(Auth::user()->profile->avatar))
               {{--{!! HTML::image('../images/profiles/blank-profile.png', 'logo', [ 'width' => 32, 'height' => auto , alt => 'Preview Profile Pic' ]) !!}--}}
               <img src="/images/profiles/blank-profile.png" width="32" height="auto" alt="logo">

@else
                <img src="/images/profiles/{{$var = Auth::user()->profile->avatar}}" width="32" height="auto" alt="logo">
@endif

{{-- Get avatar from facebook--}}
{{--https://graph.facebook.com/{fb-id}/picture--}}

                </span>
              </button>

              <ul class="dropdown-menu profile-dropdown" role="menu">

                <li><a href="{{ route('profiles.index') }}"><i class="fa fa-user"></i> Profile</a>
                </li>
                {{--<li><a href="{{route('apartments.index')}}"><i class="fa fa-search"></i> Search</a>--}}
                {{--</li>--}}
                {{--<li><a href="{{ route('my-apartments') }}"><i class="fa fa-home"></i> Apartment</a>--}}
                {{--</li>--}}


                <li class="bg-master-lighter">
                  <a href="{{ route('authenticated.logout') }}" class="clearfix">
                    <span class="pull-left">Logout</span>
                    <span class="pull-right"><i class="fa fa-sign-out"></i></span>
                  </a>
                </li>
              </ul>

            </div>
          </div>
  <!-- END User Info-->

   @else

<div class="visible-lg visible-md m-t-10">

   <div class="pull-left p-r-10 p-t-10 fs-16 font-heading">
                 <span class="semi-bold">Hey, Tourist</span>
   </div>

   <div class="dropdown pull-right">
       <button class="profile-dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" title="Click for More Features and Setting"><i class="fa fa-cog fa-2x"></i>
       </button>

     <ul class="dropdown-menu profile-dropdown" role="menu">

       <li><a href="{{ route('auth.login') }}" title="Login"><i class="fa fa-sign-in"></i> Sign in</a>
       </li>
       <li><a href="{{ route('auth.register') }}" title="Register"><i class="fa fa-sign-out"></i> Sign Up</a>
       </li>

     </ul>

   </div>
   </div>
   @endif