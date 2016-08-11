          <div class="social-wrapper">
            <div class="social " data-pages="social">

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
                                  <div class="thumbnail-wrapper d48 circular bordered b-white">
                                    <img alt="Avatar" width="55" height="55" data-src-retina="../images/profiles/{{ $profiles->user->profile->avatar }}" data-src="../images/profiles/{{ $profiles->user->profile->avatar }}" src="../images/profiles/{{ $profiles->user->profile->avatar }}">
                                  </div>
                                  <br>
                                </div>
                                <div class="col-xs-height p-l-20">
                                  <h3 class="no-margin">{{ $profiles->user->first_name }} {{ $profiles->user->last_name }} <i class="fa fa-check-circle text-success fs-16 m-t-10"></i></h3>

                                  {{--<p class="no-margin fs-16">{{ $apartment->address_line1 }}</p>--}}
                                  {{--<p class="hint-text m-t-5 small">{{ $apartment->address_line2 }} | {{ $apartment->city }}</p>--}}
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-4">
                            {{--<h6 class="margin fs-16"><strong>Address </strong> - </h6>--}}
                            {{--<h5 class="margin fs-16"><b>Address - </b></h5>--}}
                            {{--<h6 class="no-margin fs-16">{{ $apartment->address_line1 }}, {{ $apartment->address_line2 }}, </h6>--}}
                            {{--<h6 class="no-margin fs-16">{{ $apartment->address_line3 }}, {{ $apartment->city }}</h6>--}}
                            {{--<h6 class="no-margin fs-16">{{ $apartment->pincode }}, {{ $apartment->state }}, {{ $apartment->country }}</h6>--}}
                            {{--<p class="hint-text m-t-5 small">I love reading people's about page especially those who are in the same industry as me.</p>--}}
                          </div>

                          <div class="col-md-4">

                        <a href="{{ route('user.home') }}" class="btn btn-primary">Back</a>
                        @if(Auth::user())
                            <a href="{{ route('profiles.index') }}" class="btn btn-warning">Edit</a>
                        @endif

                          </div>
                        </div>
                      </div>
                      <!-- END CONTAINER FLUID -->
                    </div>
                    <!-- END ITEM -->

                    <!-- START ITEM -->
                    <div class="card status col2" data-social="item">
                      <div class="circle" data-toggle="tooltip" title="Policy" data-container="body">
                      </div>
                      @if(!is_null(Auth::user()->profile->defaultApartment))
                      <a href="{{ route('apartments.show', [Auth::user()->profile->defaultApartment]) }}" title="See Details of this Apartment"><h3>Default Apartment :<i> {{ \App\Models\Apartment::find(Auth::user()->profile->defaultApartment)->name }}</i></h3></a>
                      @else
                      <h3>No Apartment Set, <a href="{{ route('apartments.index') }}">Find one</a> or  <a href="{{ route('apartments.create') }}">Create one</a></h3>

                      @endif

                    </div>
                    <!-- END ITEM -->

                    <!-- START ITEM -->
                    {{--<div class="card status col2" data-social="item">--}}
                      {{--<div class="circle" data-toggle="tooltip" title="Facilities" data-container="body">--}}
                      {{--</div>--}}
                      {{--<h5>List of Facilities which this apartment uses--}}
                            {{--<span class="hint-text">few seconds ago</span></h5>--}}
                      {{--<h2>Facilities</h2>--}}

                      {{--<ul class="list">--}}
                          {{--<li><h5>Facility 1</h5></li>--}}
                          {{--<li><h5>Facility 2</h5></li>--}}
                      {{--</ul>--}}
                    {{--</div>--}}
                    <!-- END ITEM -->
                  </div>
                  <!-- END DAY -->
                </div>
                <!-- END FEED -->
              </div>
              <!-- END CONTAINER FLUID -->
            </div>
            <!-- /container -->
          </div>
