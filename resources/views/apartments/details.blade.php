  <div class="social-wrapper">
    <div class="social " data-pages="social">
      <!-- START JUMBOTRON -->
      @include('apartments.page.jumbotron')
      <!-- END JUMBOTRON -->
      <div class="container-fluid container-fixed-lg sm-p-l-20 sm-p-r-20" data-social="item">
        <div class="feed">
          <!-- START DAY -->
          <div class="day" data-social="day">
            <!-- START ITEM -->
            <div class="card no-border bg-transparent full-width" data-social="item">
              <!-- START CONTAINER FLUID -->
              <div class="container-fluid p-t-30 p-b-30 ">
                <div class="row">
                  <div class="col-md-4">
                    <div class="container-xs-height">
                      <div class="row-xs-height">
                        <div class="social-user-profile col-xs-height text-center col-top">
                          {{--<div class="thumbnail-wrapper d48 circular bordered b-white">--}}
                            {{--<img alt="Avatar" width="55" height="55" data-src-retina="../images/profiles/avatar_small2x.jpg" data-src="../images/profiles/avatar.jpg" src="../images/profiles/avatar.jpg">--}}
                          {{--</div>--}}
                          <br>
                        </div>

                        <div class="col-xs-height p-l-20">
                          <h3 class="no-margin">{{ $apartment->name }} <i class="fa fa-check-circle text-success fs-16 m-t-10"></i></h3>
                        </div>

                      </div>
                    </div>
                  </div>

                @include('apartments.page.address')

                <div class="col-md-4">

                <a href="{{ route('my-apartments') }}" class="btn btn-primary">Back</a>

                {{-- Make-Default Button --}}
                @include('apartments.page.makedefault')
                {{-- End Make-Default Button --}}

                {{-- Add/Leave Button --}}
                @include('apartments.page.addleavebutton')
                {{-- End Apartment Add/Leave Button --}}

                {{-- Apartment Admin Setting --}}
                @include('apartments.page.setting')
                {{-- End Apartment Admin Setting --}}

                  </div>
                </div>
              </div>
            </div>

            @include('apartments.page.profilelist')

            @if (!is_null($prof) && $prof->pivot->approved == 1 && is_null($prof->pivot->block_no))

{{--                @include('apartmentadmin.setflatfloor')--}}

            @elseif(!is_null($prof) && !is_null($prof->pivot->block_no))

                @include('apartmentadmin.status')

            @endif


           @include('apartments.page.facilities')

          </div>
        </div>
      </div>
    </div>
  </div>
