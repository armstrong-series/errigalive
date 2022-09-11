<!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                            <div class="dashboard_bar">
                                EriggaLive
                            </div>
                        </div>

                        <ul class="navbar-nav header-right">

                            <li class="nav-item dropdown header-profile">
                                <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                                    <img src="{{ asset('dashboard/images/profile/17.jpg') }}" width="20" alt=""/>
									<div class="header-info">
										<span class="text-black">{{ Auth::user()->name }}</span>
										<p class="fs-12 mb-0">{{ Auth::user()->user_type }}</p>
									</div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">

                                    <a href="{{ route('settings.profile')}}" class="dropdown-item ai-icon">
                                        <svg class="mr-3 min-w46" width="30" height="30" viewBox="0 0 46 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <rect width="46" height="46" rx="23" fill="#40189D"/>
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M20.7833 23.3841C20.7391 23.3453 20.6369 23.255 20.6006 23.2209C19.7145 22.3882 19.134 21.0843 19.134 19.6148C19.134 17.0488 20.8998 15.0156 23.0004 15.0156C25.101 15.0156 26.8668 17.0488 26.8668 19.6148C26.8668 21.083 26.2873 22.386 25.4036 23.2201C25.3664 23.2552 25.2623 23.3473 25.2186 23.3857L25.2148 23.4495C25.2396 23.8322 25.4968 24.1639 25.866 24.281C28.6105 25.149 30.6003 27.223 30.9344 29.6811C30.9803 30.0091 30.882 30.3408 30.6647 30.5906C30.4474 30.8405 30.1326 30.984 29.8016 30.984C27.3793 30.9844 18.6216 30.9844 16.1993 30.9844C15.8681 30.9844 15.5531 30.8409 15.3357 30.591C15.1184 30.341 15.02 30.0091 15.0657 29.6833C15.4006 27.2229 17.3903 25.149 20.1344 24.2811C20.5049 24.1636 20.7624 23.8306 20.7861 23.4465L20.7833 23.3841Z" fill="white"/>
                                        </svg>
                                        <span class="ml-2">Profile</span>
                                    </a>

                                    <a href="{{ route('auth.logout')}}" class="dropdown-item ai-icon">
                                        <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
                                        <span class="ml-2">Logout </span>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->
