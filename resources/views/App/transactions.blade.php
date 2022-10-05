@extends('Layout.master')
@section('title')<title>Order Transactions</title>@endsection


@section('content')

	<div class="content-body">
		<!-- row -->
		<div class="container-fluid" id="orders">
			<div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Ticket Order</h4>
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
                                        <tr v-for="(ticketOrder, index) in orders">

                                            <td><span class="badge badge-info light">Lost Boy</span></td>
                                            <td v-cloak>₦@{{ ticketOrder.price }}</td>
                                            <td>@{{ ticketOrder.created_date }}</td>
                                            <td><a :href="`/ticket/invoice-order/${ticketOrder.id}`"><span class="badge badge-success light">Completed</span></a></td>
                                        </tr>


                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
			</div>
		</div>

        <textarea name="" id="ticketorders" cols="30" style="display: none;" rows="10">{{ json_encode($transactionOrders)}}</textarea>
	</div>
@endsection
@section('script')
 <script src="{{ asset('app/orders.js')}}" type="text/javascript"></script>
@endsection
