<!-- BEGIN SIDEBAR -->
    <div class="page-sidebar" data-pages="sidebar">
      <div id="appMenu" class="sidebar-overlay-slide from-top">
      </div>
      <!-- BEGIN SIDEBAR HEADER -->
      <div class="sidebar-header">
        {!! HTML::image('../images/logo/easymanagelogo-arrow.png', 'logo', array( 'width' => 32, 'height' => 42, 'class' => 'brand' )) !!}

        <div class="sidebar-header-controls">
          <button data-pages-toggle="#appMenu" class="btn btn-xs sidebar-slide-toggle btn-link m-l-20" type="button"><i class="fa fa-angle-down fs-16"></i>
          </button>
          <button data-toggle-pin="sidebar" class="btn btn-link visible-lg-inline" type="button"><i class="fa fs-12"></i>
          </button>
        </div>
      </div>
      <!-- END SIDEBAR HEADER -->

      <!-- BEGIN SIDEBAR MENU -->
      <div class="sidebar-menu">
        <ul class="menu-items">

            <li class="m-t-30">
            <a href="{{route('user.home')}}" class="detailed">
              <span class="title">Dashboard</span>
              {{--<span class="details">234 notifications</span>--}}
            </a>
            <span class="icon-thumbnail "><i class="fa fa-th-large"></i></span>
          </li>

            <li class="">
            <a href="javascript:;">
                <span class="title">Apartment</span>
                <span class="arrow"></span>
            </a>
            <span class="icon-thumbnail"><i class="fa fa-home"></i></span>
            <ul class="sub-menu">

                <li class="">
                    <a href="{{ route('apartments.show', Auth::user()->profile->defaultApartment) }}">Page</a>
                    <span class="icon-thumbnail">pa</span>
                </li>

                <li class="">
                    <a href="{{route('complaints.index')}}">Complaints</a>
                    <span class="icon-thumbnail">co</span>
                </li>

                <li class="">
                    <a href="{{ route('polls.index') }}">Polls</a>
                    <span class="icon-thumbnail">po</span>
                </li>

                <li class="">
                    <a href="{{route('classifieds.index')}}"><span class="title">Classifieds</span></a>
                    <span class="icon-thumbnail ">cl</span>
                </li>

                 <li class="">
                    <a href="{{route('visitors.create')}}"><span class="title">Visitors</span></a>
                    <span class="icon-thumbnail "><i class="fa fa-male"></i></span>
                 </li>

                  <li class="">
                     <a href="{{ route('my-apartments') }}">Manage</a>
                     <span class="icon-thumbnail">mn</span>
                  </li>

            </ul>
        </li>

            <li class="">
            <a href="javascript:;">
                <span class="title">CRM</span>
                <span class=" arrow"></span>
            </a>
            <span class="icon-thumbnail"><i class="fa fa-building"></i></span>
            <ul class="sub-menu">
                <li class="">
                    <a href="{{ route('crm.index') }}">List</a>
                    <span class="icon-thumbnail">ls</span>
                </li>

                <li class="">
                    <a href="{{ route('crm.create') }}">Add New</a>
                    <span class="icon-thumbnail">an</span>
                </li>
            </ul>
        </li>

            <li class="">
                <a href="javascript:;">
                <span class="title">Transaction</span>
                <span class=" arrow"></span>
                </a>
                <span class="icon-thumbnail"><i class="fa fa-database"></i></span>
            <ul class="sub-menu">
                {{--<li class="">--}}
                {{--<a href="{{ route('deposit.index') }}">New Deposit</a>--}}
                {{--<span class="icon-thumbnail">nd</span>--}}
                {{--</li>--}}

                <li>
                    <a href="javascript:;"><span class="title">Deposit</span>
                        <span class="arrow"></span></a>
                    <span class="icon-thumbnail">Dp</span>
                    <ul class="sub-menu">
                        <li>
                            <a href="{{ route('deposit.index') }}">List Deposit</a>
                            <span class="icon-thumbnail">Ld</span>
                        </li>
                        <li>
                            <a href="{{ route('deposit.create') }}">New Deposit</a>
                            <span class="icon-thumbnail">Nd</span>
                        </li>
                    </ul>
                </li>

                {{--<li class="">--}}
                {{--<a href="{{ route('expense.index') }}">New Expense</a>--}}
                {{--<span class="icon-thumbnail">ne</span>--}}
                {{--</li>--}}

                <li>
                    <a href="javascript:;"><span class="title">Expense</span>
                        <span class="arrow"></span></a>
                    <span class="icon-thumbnail">Ex</span>
                    <ul class="sub-menu">
                        <li>
                            <a href="{{ route('expense.index') }}">List Expense</a>
                            <span class="icon-thumbnail">Le</span>
                        </li>
                        <li>
                            <a href="{{ route('expense.create') }}">New Expense</a>
                            <span class="icon-thumbnail">Ne</span>
                        </li>
                    </ul>
                </li>


                {{--<li class="">--}}
                {{--<a href="{{ route('transfer.index') }}">Transfer</a>--}}
                {{--<span class="icon-thumbnail">tr</span>--}}
                {{--</li>--}}

                <li>
                    <a href="javascript:;"><span class="title">Transfer</span>
                        <span class="arrow"></span></a>
                    <span class="icon-thumbnail">Tr</span>
                    <ul class="sub-menu">
                        <li>
                            <a href="{{ route('transfer.index') }}">List Transfer</a>
                            <span class="icon-thumbnail">Lt</span>
                        </li>
                        <li>
                            <a href="{{ route('transfer.create') }}">New Transfer</a>
                            <span class="icon-thumbnail">Nt</span>
                        </li>
                    </ul>
                </li>



                <li class="">
                <a href="{{ route('viewtransaction') }}">View Transaction</a>
                <span class="icon-thumbnail">vt</span>
                </li>
                <li class="">
                <a href="{{ route('balance') }}">Balance Sheet</a>
                <span class="icon-thumbnail">bs</span>
                </li>

            </ul>
            </li>

            <li class="">
            <a href="javascript:;">
              <span class="title">Sales</span>
              <span class=" arrow"></span>
            </a>
            <span class="icon-thumbnail"><i class="fa fa-shopping-cart"></i></span>
            <ul class="sub-menu">
              <li class="">
                <a href="{{ route('invoice.index') }}">Invoice</a>
                <span class="icon-thumbnail">i</span>
              </li>

              <li class="">
                <a href="{{ route('invoice.create') }}">New Invoice</a>
                <span class="icon-thumbnail">ni</span>
              </li>

              <li class="">
                <a href="{{ route('rinvoice.index') }}">Recurring Invoices</a>
                <span class="icon-thumbnail">ri</span>
              </li>

              <li class="">
                <a href="{{ route('rinvoice.create') }}">New Recurring Invoices</a>
                <span class="icon-thumbnail">nr</span>
              </li>

              <li class="">
                <a href="{{ route('quote.index') }}">Quotes</a>
                <span class="icon-thumbnail">q</span>
              </li>

              <li class="">
                <a href="{{ route('quote.create') }}">New Quote</a>
                <span class="icon-thumbnail">nq</span>
              </li>

            </ul>
          </li>

            <li class="">
            <a href="javascript:;">
            <span class="title">Bank & Cash</span>
            <span class=" arrow"></span>
            </a>
            <span class="icon-thumbnail"><i class="fa fa-building"></i></span>

            <ul class="sub-menu">
                <li class="">
                <a href="{{ route('bankncash.create') }}">New Account</a>
                <span class="icon-thumbnail">na</span>
                </li>
                <li class="">
                <a href="{{ route('bankncash.index') }}">List Account</a>
                <span class="icon-thumbnail">la</span>
                </li>
                <li class="">
                <a href="{{ route('accbal') }}">Account Balances</a>
                <span class="icon-thumbnail">ab</span>
                </li>
            </ul>
        </li>

            <li class="">
            <a href="javascript:;">
            <span class="title">Staff</span>
            <span class=" arrow"></span>
            </a>
            <span class="icon-thumbnail"><i class="fa fa-users"></i></span>

            <ul class="sub-menu">
                <li class="">
                <a href="{{ route('staffs.create') }}">Create New Staff</a>
                <span class="icon-thumbnail">ns</span>
                </li>
                <li class="">
                <a href="{{ route('staffs.index') }}">List Staff</a>
                <span class="icon-thumbnail">ls</span>
                </li>
            </ul>
        </li>

            <li class="">
            <a href="javascript:;">
            <span class="title">Inventory & Assets</span>
            <span class=" arrow"></span>
            </a>
            <span class="icon-thumbnail"><i class="fa fa-users"></i></span>
            <ul class="sub-menu">
                <li class="">
                <a href="{{ route('inventory.create') }}">New Inventory</a>
                <span class="icon-thumbnail">ni</span>
                </li>
                <li class="">
                <a href="{{ route('inventory.index') }}">List Inventory</a>
                <span class="icon-thumbnail">li</span>
                </li>
                <li class="">
                <a href="{{ route('asset.create') }}">New Asset</a>
                <span class="icon-thumbnail">na</span>
                </li>
                <li class="">
                <a href="{{ route('asset.index') }}">List Asset</a>
                <span class="icon-thumbnail">la</span>
                </li>
            </ul>
        </li>

            <li class="">
            <a href="javascript:;">
            <span class="title">Product & Services</span>
            <span class=" arrow"></span>
            </a>
            <span class="icon-thumbnail"><i class="fa fa-cube"></i></span>

            <ul class="sub-menu">
                <li class="">
                <a href="{{ route('product.index') }}">Products</a>
                <span class="icon-thumbnail">p</span>
                </li>
                <li class="">
                <a href="{{ route('product.create') }}">New Product</a>
                <span class="icon-thumbnail">np</span>
                </li>
                <li class="">
                <a href="{{ route('service.index') }}">Services</a>
                <span class="icon-thumbnail">s</span>
                </li>
                <li class="">
                <a href="{{ route('service.create') }}">New Service</a>
                <span class="icon-thumbnail">ns</span>
                </li>
            </ul>
        </li>

            <li class="">
            <a href="javascript:;">
              <span class="title">Report</span>
              <span class=" arrow"></span>
            </a>
            <span class="icon-thumbnail"><i class="fa fa-bar-chart"></i></span>
            <ul class="sub-menu">
                <li class="">
                <a href="{{ route('accstatement')}}">Account Statement</a>
                <span class="icon-thumbnail">as</span>
                </li>
                <li class="">
                <a href="{{ route('incomereport')}}">Income Reports</a>
                <span class="icon-thumbnail">ir</span>
                </li>
                <li class="">
                <a href="{{ route('expensereport')}}">Expense Reports</a>
                <span class="icon-thumbnail">er</span>
                </li>
                <li class="">
                <a href="{{ route('incomeexpense')}}">Income vs Expense</a>
                <span class="icon-thumbnail">ie</span>
                </li>
                <li class="">
                <a href="{{ route('reportsbydate')}}">Report by Date</a>
                <span class="icon-thumbnail">rd</span>
                </li>
                <li class="">
                <a href="{{ route('allincome')}}">All Income</a>
                <span class="icon-thumbnail">ai</span>
                </li>
                <li class="">
                <a href="{{ route('allexpense')}}">All Expense</a>
                <span class="icon-thumbnail">ae</span>
                </li>
                <li class="">
                <a href="{{ route('alltransaction')}}">All Transactions</a>
                <span class="icon-thumbnail">at</span>
                </li>

            </ul>
          </li>

            <li class="">
            <a href="javascript:;">
              <span class="title">Utilities</span>
              <span class=" arrow"></span>
            </a>
            <span class="icon-thumbnail"><i class="fa fa-bars"></i></span>
            <ul class="sub-menu">
              <li class="">
                <a href="{{ route('activity') }}">Activity Log</a>
                <span class="icon-thumbnail">al</span>
              </li>
              <li class="">
                <a href="{{ route('emaillog') }}">Email Message Log</a>
                <span class="icon-thumbnail">em</span>
              </li>

            </ul>
          </li>

            <li class="">
            <a href="javascript:;">
              <span class="title">Setting</span>
              <span class="arrow"></span>
            </a>
            <span class="icon-thumbnail"><i class="fa fa-gears"></i></span>
            <ul class="sub-menu">
              <li class="">
                <a href="#">Users</a>
                <span class="icon-thumbnail">u</span>
              </li>
              <li class="">
                  <a href="{{ route('category.index') }}">Categories</a>
                  <span class="icon-thumbnail">ic</span>
              </li>
              <li class="">
                <a href="{{ route('tax.index') }}">Taxes</a>
                <span class="icon-thumbnail">t</span>
              </li>
            </ul>
          </li>

            <li class="">
            <a href="javascript:;">
              <span class="title">Tutorials</span>
              <span class=" arrow"></span>
            </a>
            <span class="icon-thumbnail"><i class="fa fa-info-circle"></i></span>
            <ul class="sub-menu">
              <li class="">
                <a href="#">Apartment</a>
                <span class="icon-thumbnail">sp</span>
              </li>
              <li class="">
                <a href="#">Accounting</a>
                <span class="icon-thumbnail">sp</span>
              </li>
            </ul>
          </li>

        </ul>
        <div class="clearfix"></div>
      </div>
      <!-- END SIDEBAR MENU -->
    </div>
    <!-- END SIDEBAR -->