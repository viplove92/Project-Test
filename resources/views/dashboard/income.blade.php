  <div class="col-md-3 m-b-10">
    <div class="widget-8 panel no-border bg-success no-margin widget-loader-bar">
      <div class="container-xs-height full-height">
        <div class="row-xs-height">
          <div class="col-xs-height col-top">
            <div class="panel-heading top-left top-right">
              <div class="panel-title text-black hint-text">
                <span class="font-montserrat fs-11 all-caps">Weekly Income <i class="fa fa-chevron-right"></i></span>
              </div>
              <div class="panel-controls">
                <ul>
                  <li>
                    <a data-toggle="refresh" class="portlet-refresh text-black" href="#"><i class="portlet-icon portlet-icon-refresh"></i></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="row-xs-height ">
          <div class="col-xs-height col-top relative">
            <div class="row">
              <div class="col-sm-12">
                <div class="p-l-20">
                  <h4 class="no-margin p-b-5 text-white"><i class="fa fa-inr"></i> {{ number_format($income[0], 2) }}</h4>
                  <br/>
                  <p class="small hint-text m-t-5">
                    <a href="{{ route('deposit.create') }}"><span class="label  font-montserrat m-r-5 all-caps">Add Income</span></a>
                  </p>
                </div>
              </div>
              <div class="col-sm-6">
              </div>
            </div>
            <div class='widget-8-chart line-chart' data-line-color="black" data-points="true" data-point-color="success" data-stroke-width="2">
              <svg></svg>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
