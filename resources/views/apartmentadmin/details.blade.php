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
                            @if(is_null($users->profile->avatar))
                            <img src="http://easymanage.dev/../images/profiles/blank-profile.png" width="32" height="auto" alt="logo">
                            @else
                            <img alt="Avatar" width="55" height="55" data-src-retina="../images/profiles/{{ $users->profile->avatar }}" data-src="../images/profiles/{{ $users->profile->avatar }}" src="../images/profiles/{{ $users->profile->avatar }}">
                            @endif
                          </div>
                          <br>
                        </div>
                        <div class="col-xs-height p-l-20">
                          <h3 class="no-margin">{{ $users->first_name }} {{ $users->last_name }} <i class="fa fa-check-circle text-success fs-16 m-t-10"></i></h3>

                          {{--<p class="no-margin fs-16">{{ $apartment->address_line1 }}</p>--}}
                          {{--<p class="hint-text m-t-5 small">{{ $apartment->address_line2 }} | {{ $apartment->city }}</p>--}}
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    {{--<h6 class="margin fs-16"><strong>Address </strong> - </h6>--}}
                    {{--<h5 class="margin fs-16"><b>Address - </b></h5>--}}
                    <h6 class="no-margin fs-16"><strong>Mobile</strong> : {{ $users->profile->mobile_no }}</h6>


                    @if($users->profile->gender_id == 1)
                        <h6 class="no-margin fs-16"><b>Gender</b> : Male</h6>
                    @elseif($users->profile->gender_id == 2)
                        <h6 class="no-margin fs-16"><b>Gender</b> : Female</h6>
                    @elseif($users->profile->gender_id == 3)
                        <h6 class="no-margin fs-16"><b>Gender</b> : Other</h6>
                    @endif

                  </div>

                  <div class="col-md-4">
                    <a href="{{ route('members.index') }}" class="btn btn-primary">Back</a>

{{--                            @if($prof->pivot->lock == 1 && is_null($prof->pivot->lock))--}}
                    @if($prof->pivot->lock == 1)
                        @include('apartmentadmin.setting')
                    @endif

                  </div>
                </div>
              </div>
              <!-- END CONTAINER FLUID -->
            </div>
            <!-- END ITEM -->

            <!-- START ITEM -->
            <div class="card status col2" data-social="item">
              <div class="circle" data-toggle="tooltip" title="Info" data-container="body">
              </div>
              <h5>Details of User last updated
                    <span class="hint-text"> {{ $users->profile->updated_at->diffForHumans() }}</span></h5>
              <h4><i>Mobile No </i>: {{ $users->profile->mobile_no }} </h4>
              <h4><i>Block / Flat No </i>: {{ $prof->pivot->block_no }}  </h4>
              <h4><i> Floor </i>: {{ $prof->pivot->floor_no }} </h4>

              <ul class="list">
                  {{--<li><h5>Policy 1</h5></li>--}}
                  {{--<li><h5>Policy 2</h5></li>--}}
              </ul>
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
</div>
<!-- END PAGE CONTENT -->
