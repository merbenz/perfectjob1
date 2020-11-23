
        <header>
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed hidden-xs hidden-sm" data-toggle="collapse" data-target="#navbar-collapse">
                            <i class="material-icons">swap_vert</i>
                        </button>
                        <a href="javascript:void(0);" class="left-toggle-left-sidebar js-left-toggle-left-sidebar">
                            <i class="material-icons">menu</i>
                        </a>
                        <!-- Logo -->
                        <a class="navbar-brand" href="{{ asset(\Request::segment(1)) }}">
                            <span class="logo-minimized">vbvd</span>
							<span class="logo">Viฺbhavadi</span>
                        </a>
                        <!-- #END# Logo -->
                    </div>
                    <div class="collapse navbar-collapse" id="navbar-collapse">
					
                        <ul class="nav navbar-nav">
                            <li>
                                <a href="javascript:void(0);" class="toggle-left-sidebar js-toggle-left-sidebar">
                                    <i class="material-icons">menu</i>
                                </a>
                            </li>
                        </ul>
	
						@if( Auth::user() )
                        <ul class="nav navbar-nav navbar-right">
                            <!-- Fullscreen Request -->
                            <!-- <li>
                                <a href="javascript:void(0);" class="fullscreen js-fullscreen">
                                    <i class="material-icons">fullscreen</i>
                                </a>
                            </li> -->
                            <!-- #END# Fullscreen Request -->
                            <!-- User Menu -->
                            <li class="dropdown user-menu">
                                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                                    <img src="assets/images/avatars/face2.jpg" alt="User Avatar" /><span class="hidden-xs">{!! ucfirst(Auth::user()->username) !!}</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="header">
                                        <img src="assets/images/avatars/face2.jpg" alt="User Avatar" />
                                        <div class="user">
                                            {!! ucfirst(Auth::user()->username) !!}
                                            <div class="title"> {!! ucfirst(Auth::user()->full_name) !!}</div>
                                        </div>
                                    </li>
									
                                    <li class="body">
                                        <ul>
                                            <li>
                                                <a href="javascript:void(0);">
                                                    <i class="material-icons">account_circle</i> Profile
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">
                                                    <i class="material-icons">lock_open</i> Change Password
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
									
                                    <li class="footer">
                                        <div class="row clearfix">
                                            <div class="col-xs-5"></div>
                                            <div class="col-xs-2"></div>
                                            <div class="col-xs-5">
                                                <a href="{{ route('logout') }}" class="btn btn-default btn-sm btn-block" 
                                                    onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                                    {{ __('Logout') }}</a>
                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                    @csrf
                                                    </form>
                                                
                                               
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
						@endif
                    </div>
                </div>
            </nav>
        </header>