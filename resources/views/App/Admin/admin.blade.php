@extends('Layout.master')
@section('title')<title>EriggaLive Dashboard </title>@endsection


@section('content')

	<div class="content-body">
		<!-- row -->
		<div class="container-fluid">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-header border-0 pb-0">

                        </div>
                        <div class="card-body">
                            <h5 class="card-title" style="font-family: "Trirong", serif;">{{ Common::dailyHourlyWelcome() }}, {{ Common::trimFirstName(Auth::user()->name) }}</h5>
                        </div>
                        <hr>
                        <div class="card-footer border-0 pt-0">
                            <a href="{{ route('account.secure')}}" type="button" class="btn btn-rounded btn-info"><span
                                class="btn-icon-left text-info"><i class="fas fa-user"></i>
                            </span>Account</a>

                        </div>
                    </div>
                </div>
            </div>
			<div class="row">
				<div class="col-xl-4 col-xxl-6 col-sm-6">
					<div class="card bg-primary">
						<div class="card-body">
							<div class="media align-items-center">
								<span class="p-3 mr-3 border border-white rounded">
									<svg width="36" height="36" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M38.4998 10.4995H35.0002V38.4999H38.4998C40.4245 38.4999 42 36.9238 42 34.9992V13.9992C42 12.075 40.4245 10.4995 38.4998 10.4995Z" fill="white"/>
										<path d="M27.9998 10.4995V6.9998C27.9998 5.07515 26.4243 3.49963 24.5001 3.49963H17.4998C15.5756 3.49963 14.0001 5.07515 14.0001 6.9998V10.4995H10.5V38.4998H31.5V10.4995H27.9998ZM24.5001 10.4995H17.4998V6.99929H24.5001V10.4995Z" fill="white"/>
										<path d="M3.50017 10.4995C1.57551 10.4995 0 12.075 0 13.9997V34.9997C0 36.9243 1.57551 38.5004 3.50017 38.5004H6.99983V10.4995H3.50017Z" fill="white"/>
									</svg>
								</span>
								<div class="media-body text-right">
									<p class="fs-18 text-white mb-2">Tickets Sold</p>
									<span class="fs-48 text-white font-w600">{{ $tickets }}</span>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-4 col-xxl-6 col-sm-6">
					<div class="card bg-info">
						<div class="card-body">
							<div class="media align-items-center">
								<span class="p-3 mr-3 border border-white rounded">
                                    <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M30.25 5.75H28.5V2.25C28.5 1.78587 28.3156 1.34075 27.9874 1.01256C27.6593 0.684374 27.2141 0.5 26.75 0.5C26.2859 0.5 25.8407 0.684374 25.5126 1.01256C25.1844 1.34075 25 1.78587 25 2.25V5.75H11V2.25C11 1.78587 10.8156 1.34075 10.4874 1.01256C10.1592 0.684374 9.71413 0.5 9.25 0.5C8.78587 0.5 8.34075 0.684374 8.01256 1.01256C7.68437 1.34075 7.5 1.78587 7.5 2.25V5.75H5.75C4.35761 5.75 3.02226 6.30312 2.03769 7.28769C1.05312 8.27226 0.5 9.60761 0.5 11V12.75H35.5V11C35.5 9.60761 34.9469 8.27226 33.9623 7.28769C32.9777 6.30312 31.6424 5.75 30.25 5.75Z" fill="white"/>
										<path d="M0.5 30.25C0.5 31.6424 1.05312 32.9777 2.03769 33.9623C3.02226 34.9469 4.35761 35.5 5.75 35.5H30.25C31.6424 35.5 32.9777 34.9469 33.9623 33.9623C34.9469 32.9777 35.5 31.6424 35.5 30.25V16.25H0.5V30.25Z" fill="white"/>
									</svg>
								</span>
								<div class="media-body text-right">
									<p class="fs-18 text-white mb-2">Events</p>
									<span class="fs-48 text-white font-w600">{{ $events }}</span>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-4 col-xxl-6 col-sm-6">
					<div class="card bg-success">
						<div class="card-body">
							<div class="media align-items-center">
								<span class="p-3 mr-3 border border-white rounded">
									<i class="fa fa-users" style="color:white; width:45px; height:45px;"></i>

								</span>
								<div class="media-body text-right">
									<p class="fs-18 text-white mb-2"><a style="color:white;" href="{{ route('usermanagement') }}">Users</a></p>
									<span class="fs-48 text-white font-w600">{{ $users }}</span>
								</div>
							</div>
						</div>
					</div>
				</div>



			</div>


		</div>
	</div>
@endsection
