<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>EriggaLive</title>

    <!-- Bootstrap -->
    <link href="{{ asset('frontend/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700,800' rel='stylesheet'
        type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700' rel='stylesheet' type='text/css'>
    <link href="{{ asset('frontend/css/jquery.bxslider.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/owl.theme.default.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/component.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/plusgallery.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/simple.css') }}" rel="stylesheet">
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
<div id="tzwrapper" id="index">


        <!-- Breadcrumb start -->
        <section class="tz-sectionBreadcrumb">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="tz_breadcrumb_single_cat_title">
                            <h4> Event</h4>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="tz-breadcrumb">
                            <h4>
                                <span>
                                    <a class="home" href="{{ route('home') }}">Event / Tickets</a>
                                </span>

                            </h4>
                        </div>
                    </div>



                </div>
            </div>
        </section>
        <!-- Breadcrumb end -->

    <!-- Tickets Event -->
    <section id="recent_post">
        <div class="container">
            <div class="tz_maniva_meetup_title text-center">
                <h3 class="tz_meetup_title_raleway tz_title_meetup_semi_bold" style="color:#242732"> Tickets </h3>
                <div class="tz_image_title_meetup">
                    <img alt="line-black-red" src="{{ asset('frontend/images/line-black-red.png') }}">
                </div>
            </div>
            <div class="vc_empty_space vc_empty_space_custom_3">
                <span class="vc_empty_space_inner"></span>
            </div>
            <div class="tz_recent_blog_meetup">
                <button class="tz_recent_blog_pev_meetup">
                    <i class="fa fa-angle-left"></i>
                </button>
                <button class="tz_recent_blog_next_meetup">
                    <i class="fa fa-angle-right"></i>
                </button>
                <div class="tz_meetup_slider_blog owl-carousel owl-theme">
                    <div class="tz_recent_blog_meetup_content">
                        <div class="tz_image_recent_blog_meetup" >
                            <div class="tz_meetup_post_img">
                                <img src="{{ asset('frontend/images/Meeting-2.jpg') }}" alt="blog">
                                <div class="tz_meetup_view_link">
                                    <div class="ds-table">
                                        <div class="ds-table-cell">
                                            <span class="tz_view_img_blog_type1">
                                                <a data-rel="latestPhoto[worksGallery]" href="{{ asset('frontend/images/images/Meeting-2.jpg') }}">
                                                    <i class="fa fa-search"></i>
                                                </a>
                                            </span>
                                            <span class="tz_meetup_link_blog">
                                                <a href="detail-blog.html">
                                                    <i class="fa fa-external-link"></i>
                                                </a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tz_recent_blog_meetup_date">
                                <span class="tz_month_latest">
                                    Sep
                                </span>
                                <span class="tz_date_latest">
                                    22nd
                                </span>
                            </div>
                        </div>
                        <div class="tz_recent_blog_meetup_detail">


                            <span class="tz_meetup_infomation">
                                <a href="#"> by Mary Doe </a>
                                <small>
                                    <i class="fa fa-calendar"></i>
                                    22 Sep, 2015
                                </small>
                                <small>
                                    <i class="fa fa-comment"></i>
                                    0
                                </small>
                            </span>
                            <a href="#" class="btn btn-lg btn-default"  style="background: #FF5733; color:aliceblue;" type="button">Buy Ticket</a>
                        </div>
                    </div>


                </div>
                <textarea name="" id="events" style="display:none" cols="30" rows="10">{{ json_encode($events) }}</textarea>
            </div>
        </div>
    </section>
    <!-- Ticket Event end -->



    <!-- footer start -->
    @include('Frontend.Includes.footer')
    <!-- footer end -->

</div>

<div id="easy-opener-section"><div class="easy-opener-bg"></div><div class="easy-opener-content"><a class="easy-opener-close" href="javascript: "></a><div class="video-content"></div> </div></div>

@include('Frontend.Includes.script')
<script src="{{ asset('app/index.js') }}"></script>
</body>
</html>
