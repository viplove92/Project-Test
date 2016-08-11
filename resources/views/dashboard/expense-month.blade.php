    <div class="col-md-3 m-b-10">
    <div class="widget-9 panel no-border bg-primary no-margin widget-loader-bar">
      <div class="container-xs-height full-height">
        <div class="row-xs-height">
          <div class="col-xs-height col-top">
            <div class="panel-heading  top-left top-right">
              <div class="panel-title text-black">
                <span class="font-montserrat fs-11 all-caps">Monthly Expense <i class="fa fa-chevron-right"></i></span>
              </div>
              <div class="panel-controls">
                <ul>
                  <li>
                    <a href="{{ route('expense.create') }}"><span class="label  font-montserrat m-r-5 all-caps"><i class="fa fa-minus"></i> Expense</span></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="row-xs-height">
          <div class="col-xs-height col-top">
            <div class="p-l-20 p-t-15">
              <h4 class="no-margin p-b-5 text-white"><i class="fa fa-inr"></i> {{ number_format($expense[1], 2) }}</h4>
              <br/>
              {{--<a href="#" class="btn-circle-arrow text-white"><i class="pg-arrow_minimize"></i></a>--}}
              <span class="small hint-text">{{ number_format($expense[2], 2) }} % lower than last month</span>
            </div>
          </div>
        </div>
        <div class="row-xs-height">
          <div class="col-xs-height col-bottom">
            <div class="progress progress-small m-b-20">
              <div class="progress-bar progress-bar-white" data-percentage="{{ $expense[2] }}"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
