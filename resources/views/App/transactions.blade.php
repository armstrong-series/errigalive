@extends('Layout.master')
@section('title')<title>Order Transactions</title>@endsection


@section('content')

	<div class="content-body">
		<!-- row -->
		<div class="container-fluid">
			<div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Event Transactions</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-responsive-sm">
                                    <thead>
                                        <tr>

                                            <th>Event</th>
                                            <th>Amount</th>
                                            <th>Date</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>

                                            <td><span class="badge badge-info light">Lost Boy</span></td>
                                            <td>5000 </td>
                                            <td>January 22</td>
                                            <td><span class="badge badge-success light">Completed</span>
                                        </tr>


                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
			</div>
		</div>
	</div>
@endsection
