<div class="deznav">
            <div class="deznav-scroll">
				<ul class="metismenu" id="menu">
                    @if(Auth::user()->user_type === 'admin' || Auth::user()->user_type === 'support')
                    <li class="{{ $page == 'dashboard' ? 'active' : '' }}">
                        <a href="{{ route('admin.dashboard') }}" aria-expanded="false">
							<i class="fas fa-user-secret"></i>
							<span class="nav-text">Administrator</span>
						</a>
                    </li>
                    @endif

                    <li class="{{ $page == 'account' ? 'active' : '' }}">
                        <a class="" href="{{ route('account.secure') }}" aria-expanded="false">
                            <i class="fas fa-user"></i>
							<span class="nav-text">Account</span>
						</a>
                    </li>
                    <li class="{{ $page == 'transactions' ? 'active' : '' }}">
                        <a class="" href="{{ route('ticket.order') }}" aria-expanded="false">
                            <i class="fas fa-credit-card"></i>
							<span class="nav-text">Order</span>
						</a>
                    </li>

                    @if(Auth::user()->user_type === 'admin' || Auth::user()->user_type === 'support')
                        <li class="{{ $page == 'user-management' ? 'active' : '' }}">
                            <a href="{{ route('usermanagement') }}" aria-expanded="false">
                                <i class="fas fa-users"></i>
                                <span class="nav-text">User Management</span>
                            </a>
                        </li>
                        <li class="{{ $page == 'events' ? 'active' : '' }}">
                            <a href="{{ route('eriggalive.event') }}" aria-expanded="false">

                                <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M30.25 5.75H28.5V2.25C28.5 1.78587 28.3156 1.34075 27.9874 1.01256C27.6593 0.684374 27.2141 0.5 26.75 0.5C26.2859 0.5 25.8407 0.684374 25.5126 1.01256C25.1844 1.34075 25 1.78587 25 2.25V5.75H11V2.25C11 1.78587 10.8156 1.34075 10.4874 1.01256C10.1592 0.684374 9.71413 0.5 9.25 0.5C8.78587 0.5 8.34075 0.684374 8.01256 1.01256C7.68437 1.34075 7.5 1.78587 7.5 2.25V5.75H5.75C4.35761 5.75 3.02226 6.30312 2.03769 7.28769C1.05312 8.27226 0.5 9.60761 0.5 11V12.75H35.5V11C35.5 9.60761 34.9469 8.27226 33.9623 7.28769C32.9777 6.30312 31.6424 5.75 30.25 5.75Z" fill="white"/>
                                    <path d="M0.5 30.25C0.5 31.6424 1.05312 32.9777 2.03769 33.9623C3.02226 34.9469 4.35761 35.5 5.75 35.5H30.25C31.6424 35.5 32.9777 34.9469 33.9623 33.9623C34.9469 32.9777 35.5 31.6424 35.5 30.25V16.25H0.5V30.25Z" fill="white"/>
                                </svg>

                                <span class="nav-text">Events</span>
                            </a>
                        </li>

                            <li class="{{ $page == 'shop' ? 'active' : '' }}">
                                <a href="{{ route('eriggalive.shop') }}" aria-expanded="false">
                                <i class="fas fa-store-alt"></i>
                                <span class="nav-text">Store</span>
                                </a>
                            </li>
                    @endif


                    <li class="{{ $page == 'settings' ? 'active' : '' }}">
                        <a href="{{ route('settings.profile') }}" aria-expanded="false">
                           <i class="flaticon-381-settings-2"></i>
                           <span class="nav-text">Settings</span>
						</a>

                    </li>

                </ul>

				<div class="copyright">
					<p><strong>EriggaLive</strong> ©All Rights Reserved</p>
					<p><?php echo date("Y"); ?></p>
				</div>
			</div>
        </div>
