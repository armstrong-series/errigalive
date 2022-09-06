<div class="deznav">
            <div class="deznav-scroll">
				<ul class="metismenu" id="menu">
                    <li class="{{ $page == 'dashboard' ? 'active' : '' }}">
                        <a class="has-arrow ai-icon" href="{{ route('admin.dashboard') }}" aria-expanded="false">
							<i class="flaticon-381-networking"></i>
							<span class="nav-text">Dashboard</span>
						</a>
                       
                    </li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<i class="flaticon-381-television"></i>
							<span class="nav-text">Apps</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="app-profile.html">Profile</a></li>
                            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Email</a>
                                <ul aria-expanded="false">
                                    <li><a href="email-compose.html">Compose</a></li>
                                    <li><a href="email-inbox.html">Inbox</a></li>
                                    <li><a href="email-read.html">Read</a></li>
                                </ul>
                            </li>
                            <li><a href="app-calender.html">Calendar</a></li>
							<li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Shop</a>
                            
                            </li>
                        </ul>
                    </li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<i class="flaticon-381-controls-3"></i>
							<span class="nav-text">Events</span>
						</a>
                        <ul aria-expanded="false">
                            <li class="{{ $page == 'events' ? 'active' : '' }}">
                                <a href="{{ route('eriggalive.event') }}">Events</a>
                            </li>                       
                        </ul>
                    </li>
                   
                  

                    <li>
                        <a href="#" aria-expanded="false">
                           <i class="flaticon-381-settings-2"></i>
                           <span class="nav-text">Settings</span>
						</a>
                        
                    </li>
                   
                </ul>
				
				<div class="copyright">
					<p><strong>ErrigaLive</strong> ©All Rights Reserved</p>
					<p><?php echo date("Y"); ?></p>
				</div>
			</div>
        </div>