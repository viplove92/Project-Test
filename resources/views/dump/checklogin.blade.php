
                            <li class="dropdown">
                                @if(!Auth::check())
                                    <li><a href="{{ route('auth.login') }}" class="login">Log in</a></li>
                                    <li><a href="{{ route('auth.register') }}" class="btn-white btn-small">Sign up</a></li>
                                @else
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="bold"> {{ Auth::user()->first_name }} </span> <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li>
                                    <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                                    </li>
                                    <li>
                                    <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                                    </li>
                                    <li>
                                    <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                    <a href="{{ route('authenticated.logout') }}"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                                    </li>
                                 </ul>
                            </li>
                               @endif
