<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> Ticket | Payment </title>

    <!-- Bootstrap -->
    <link href="{{ asset('frontend/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700,800' rel='stylesheet'
        type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Lato:400,400italic' rel='stylesheet' type='text/css'>
    <link href="{{ asset('frontend/css/prettyPhoto.min.css') }}" rel="stylesheet">

    <!-- Style css -->
    <link href="{{ asset('frontend/style.css') }}" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="js/library/html5shiv.min.js"></script>
    <script src="js/library/respond.min.js"></script>
    <![endif]-->
</head>

<body id="bd">
    <div id="ticket">
        <div id="tzwrapper" id="ticket">
            <!-- Breadcrumb start -->
            <section class="tz-sectionBreadcrumb">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="tz_breadcrumb_single_cat_title">
                                <h4>Payment </h4>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="tz-breadcrumb">
                                <h4>
                                    <span>
                                        <a class="home" href="{{ url()->previous() }}">Return Back</a>
                                    </span>

                                </h4>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
            <!-- Breadcrumb end -->

            <!-- Event Start -->
            <section class="tz-blogDefault">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                            <div class="tz-blogContainer">
                                <div class="tz-blogItem">
                                    <div class="tz-blogContent">
                                        @csrf
                                        <div class="tz-blogBox ">
                                            <div class="tz_blog_box_content">
                                                <div class="">
                                                    <table class="table">
                                                        <thead>
                                                          <tr>
                                                            <th scope="col">Ticket</th>
                                                            <th scope="col">Price</th>
                                                            <th scope="col">Category</th>
                                                            <th scope="col">Quantity</th>
                                                          </tr>
                                                        </thead>
                                                        <tbody>
                                                          <tr>
                                                            <th scope="row">@{{ ticket.name }}</th>
                                                            <td>₦ @{{ ticket.price }}</td>
                                                            <td>@{{ ticket.category }}</td>
                                                            <td>
                                                               @{{ ticket.qty }}
                                                            </td>
                                                          </tr>
                                                        </tbody>
                                                      </table>
                                                </div>

                                                <a href="javascript:void(0);" @click="makePayment()" class="btn btn-lg btn-default" style="background: #FF5733; color:aliceblue;" type="button">Make Payment</a>
                                                {{-- <a href="javascript:void(0);" @click="makePayment()" class="btn btn-lg btn-default" style="background: #FF5733; color:aliceblue;" type="button">Make Payment</a> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                    <textarea name="" id="paymentTicket" cols="30" rows="10" style="display: none;">{{ route('payment.initialize')}}</textarea>
                            </div>

                        </div>

                    </div>
                </div>
            </section>
            <!-- Event  end -->

            <!-- footer start -->
            <footer class="tz-footer tz-footer-type1">
                <div class="tz-backtotop">
                    <img src="{{ asset('frontend/images/back_top_meetup.png') }}" alt="back_top">
                </div>


                <div class="tzcopyright">
                    <p>
                        Copyright &copy; <?php echo date('Y'); ?>
                        <a target="_blank" href="#">EriggaLive</a>
                    </p>
                </div>
            </footer>
        </div>



    </div>

    <script src="{{ asset('libraries/axios.js') }}"></script>
    <script src="{{ asset('libraries/vue.js') }}"></script>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="{{ asset('frontend/js/library/jquery.min.js') }}"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{ asset('frontend/js/library/bootstrap.min.js') }}"></script>
    <script>
        jQuery.noConflict();
    </script>
    <!-- Include bxslider -->
    <script src="{{ asset('frontend/js/library/jquery.prettyPhoto.js') }}"></script>

    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>

    <!-- Include custom js -->
    <script src="{{ asset('frontend/js/custom.js') }}"></script>
    <script src="{{ asset('app/ticket.js') }}"></script>
    <script src="https://js.paystack.co/v1/inline.js"></script>

</body>

