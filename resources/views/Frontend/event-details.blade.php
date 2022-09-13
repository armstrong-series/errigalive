<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>EriggaLive | Event</title>

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
    <div id="details">
        <div id="tzwrapper" id="details">

            <!-- Header start -->
            <header class="tz-headerHome tz-homeType2 tz-homeTypeRelative">
                <div class="tz_meetup_header_option">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                <div class="tz_meetup_header_option_phone">
                                    <span>
                                        <img alt="phone" src="{{ asset('frontend/images/phone.png') }}">
                                        +44 40 8873432
                                    </span>
                                    <span>
                                        <img alt="email" src="{{ asset('frontend/images/email_meetup.png') }}">
                                        <a href="mailto:"> info@eriggalive.com</a>
                                    </span>
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                                <div class="tz-headerRight text-right">
                                    <ul>
                                        <li>
                                            <a href="javascript:void(0);">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-flickr"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-behance"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-instagram"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-digg"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-dribbble"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-dropbox"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-linkedin"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="http://www.youtube.com/channel/UCykS6SX6L2GOI-n3IOPfTVQ">
                                                <i class="fa fa-youtube"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tz-header-content">
                    <div class="container">
                        <div class="tzHeaderContainer">


                            <!-- Menu start -->
                            <nav class="nav-collapse pull-right tz-menu">
                                <ul id="tz-navbar-collapse" class="nav navbar-nav collapse navbar-collapse tz-nav">
                                    <li class="menu-item-has-children">
                                        <a href="{{ route('home') }}">Home</a>

                                    </li>

                                </ul>
                            </nav>
                            <!-- Menu end -->

                            <!-- Form search start -->
                            <div class="tz-form-search">
                                <div class="container">
                                    <form class="searchform">
                                        <input class="field Tzsearchform inputbox search-query Tzsearchform"
                                            type="text" placeholder="Search..." name="s">
                                        <i class="fa fa-search tz-icon-form-search"></i>
                                        <i class="fa fa-times tz-form-close"></i>
                                    </form>
                                </div>
                            </div>
                            <!-- Form search end -->

                        </div>
                    </div>
                </div>
            </header>
            <!-- Header end -->

            <!-- Breadcrumb start -->
            <section class="tz-sectionBreadcrumb">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="tz_breadcrumb_single_cat_title">
                                <h4> Event</h4>
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
                                        <div class="tz-blogBox ">
                                            <div class="tz-BlogImage">

                                                <img :src="'/storage/events/banner/'+details.event_banner" alt=Cevent" />
                                                <div class="tz-ImageOverlay"></div>
                                                <a class="tz-ViewImage" data-rel="prettyPhoto[worksGallery]"
                                                    :href="'/storage/events/banner/'+details.event_banner">
                                                    <i class="fa fa fa-search"></i>
                                                </a>
                                                <a class="tz-ViewDetail" href="#">
                                                    <i class="fa fa-link"></i>
                                                </a>
                                            </div>
                                            <div class="tz_blog_box_content">
                                                <h4 class="title">
                                                    <a href="javascript:void(0);">@{{ details.name }}</a>
                                                </h4>
                                                <span class="tzinfomation">
                                                    <small class="tzinfomation_time"> @{{ details.date }} </small>
                                                    <a href="#">
                                                        <i>|</i>
                                                        @{{ details.venue }}
                                                    </a>


                                                </span>
                                                <p>@{{ details.description }}</p>

                                                <div class="">
                                                    @csrf
                                                    <table class="table">
                                                        <thead>
                                                          <tr>
                                                            <th scope="col">Ticket</th>
                                                            <th scope="col">Price</th>
                                                            <th scope="col">Quantity</th>
                                                          </tr>
                                                        </thead>
                                                        <tbody>
                                                          <tr>
                                                            <th scope="row">@{{ details.name }}</th>
                                                            <td>₦ @{{ details.price }}</td>
                                                            <td>
                                                                <select class="custom-select form-control" v-model="ticket.qty">
                                                                    <option selected value="0">0</option>
                                                                    <option value="1">1</option>
                                                                    <option value="2">2</option>
                                                                    <option value="3">3</option>
                                                                    <option value="3">4</option>
                                                                    <option value="3">5</option>
                                                                    <option value="3">6</option>
                                                                    <option value="3">7</option>
                                                                    <option value="3">8</option>
                                                                    <option value="3">9</option>
                                                                    <option value="3">10</option>
                                                                </select>
                                                            </td>
                                                          </tr>

                                                        </tbody>
                                                      </table>
                                                </div>
                                                <a href="#" class="btn btn-lg btn-default" @click="saveTicket()" style="background: #FF5733; color:aliceblue;" type="button">Buy Ticket</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

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

        <textarea name="" style="display:none;" id="event-details" cols="30" rows="10">{{ json_encode($event) }}</textarea>

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
    <script src="{{ asset('app/details.js') }}"></script>

</body>

</body>

</html>
