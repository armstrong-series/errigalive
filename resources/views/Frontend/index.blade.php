<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>ErrigaLive</title>

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
    <div id="index">
        <div id="tzwrapper">

            <!-- Header start -->
            <header class="tz-headerHome tz-homeType1 tz-homeTypeFixed vc_row" data-option="1">
                <div class="container">
                    <div class="tzHeaderContainer">
                        <h3 class="pull-left tz_logo">
                            <a title="Home" href="#">
                                <img src="{{ asset('erilive.png') }}" alt="Erriga" class="img-responsive" width="75"
                                    height="70">
                            </a>
                        </h3>
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                            data-target="#tz-navbar-collapse">
                            <i class="fa fa-bars"></i>
                        </button>

                        <!-- Menu start -->
                        <nav class="nav-collapse pull-right tz-menu">
                            <ul id="tz-navbar-collapse" class="nav navbar-nav collapse navbar-collapse tz-nav">
                                <li><a href="#home">Home</a></li>
                                <li><a href="#about">Events</a></li>
                                <li><a href="#register">Buy Tickets</a></li>
                                <li><a href="#">Shop</a></li>
                                <li><a href="{{ route('login') }}">Login</a></li>
                            </ul>
                        </nav>
                        <!-- Menu end -->

                    </div>
                </div>
            </header>
            <!-- Header end -->

            <!-- Slider start -->
            <div id="home" class="tz_home_slider_meetup vc_row">
                <div class="tz_home_slider_meetup_setting">
                    <ul class="bxslider">
                        <li>
                            <div class="meetup_bl_slider_home"></div>
                            <img src="{{ asset('lostb.jpg') }}" alt="slider-home" />

                        </li>
                        <li>
                            <div class="meetup_bl_slider_home"></div>
                            <img src="{{ asset('new-genesis.jpg') }}" alt="area-world" />

                        </li>
                        <li>
                            <div class="meetup_bl_slider_home"></div>
                            <img src="{{ asset('club_truth.jpg') }}" alt="slider-home" />
                            <h5> <i class="fa fa-calendar"></i></h5>
                        </li>
                    </ul>
                </div>
                <div class="tz_content_slider_meetup">
                    <div class="ds-table">
                        <div class="ds-table-cell">

                            <div class="tz_meetup_slider_home_text">

                                <h4>
                                    <strong>ERIGGA</strong> LIVE
                                </h4>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- Slider end -->


            <!-- Event Start -->
            <section id="about" class="vc_row">
                <div class="container">
                    <div class="row">
                        <div class="tz_maniva_meetup_title text-center">
                            <h3 class="tz_meetup_title_raleway tz_title_meetup_normal"> EVENT </h3>

                        </div>
                    </div>
                </div>
            </section>
            <!-- Event end -->

            <!-- About meetup start -->
            <section id="about_meetup" class="vc_row">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 custom_col_pading">
                            <div class="tz_maniva_about_meetup">
                                <div class="tz_meetup_thumbnail">
                                    <a href="javascript:void(0);">
                                        <img src="{{ asset('club_truth.jpg') }}" alt=Club-Truth" />
                                    </a>
                                    <div class="tz_meetup_about_content">
                                        <a class="tz_btn_video_meetup tz_meetup_btn_dark" href="#">Buy Ticket</a>
                                    </div>
                                </div>


                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 custom_col_pading">
                            <div class="tz_maniva_about_meetup">
                                <div class="tz_meetup_thumbnail">
                                    <a href="javascript:void(0);">
                                        <img src="{{ asset('new-genesis.jpg') }}" alt="Genesis" />
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 custom_col_pading">
                            <div class="tz_maniva_about_meetup">
                                <div class="tz_meetup_thumbnail">
                                    <a href="index.html">
                                        <img src="{{ asset('lostb.jpg') }}" alt="about" />
                                    </a>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- About meetup end -->


            <!-- Slider Meetup start -->
            <section id="slider_meetup" class="vc_row">
                <div class="tz-full-slider-meetup">
                    <div class="tz_slider_meetup">
                        <div class="tz_meetup_slider owl-carousel owl-theme">
                            <div class="tz_custom_images_slider">
                                <img src="{{ asset('frontend/images/slider-client-1.jpg') }}" alt="slider-client">
                                <div class="tz-bk-slider-meetup"></div>
                            </div>
                            <div class="tz_custom_images_slider">
                                <img src="{{ asset('frontend/images/slider-client-2.jpg') }}" alt="slider-client">
                                <div class="tz-bk-slider-meetup"></div>
                            </div>
                            <div class="tz_custom_images_slider">
                                <img src="{{ asset('frontend/images/slider-client-3.jpg') }}" alt="slider-client">
                                <div class="tz-bk-slider-meetup"></div>
                            </div>
                        </div>
                    </div>
                </div>

            </section>
            <!-- Slider Meetup end -->



            <!-- Twitter start -->
            <section id="tz_twitter" class="parallax parallax-bk2">
                <div class="tzTwitter-slider-box">
                    <div class="tzTwitter-slider owl-carousel owl-theme">
                        <div class="tzTwitter-item">
                            <div class="tzTwitter-icon">
                                <i class="fa fa-twitter"></i>
                            </div>
                            <span class="tweet_text">
                                At the end of 2014 the total paid out to Envato's global community reached $224 million! <a
                                    href="#">http://buff.ly/1AWD4Dx</a>
                            </span>
                            <span class="tz_tweet_meetup_name">&#64;templaza</span>
                            <span class="tweet_time">about 2 hours ago</span>
                        </div>
                        <div class="tzTwitter-item">
                            <div class="tzTwitter-icon">
                                <i class="fa fa-twitter"></i>
                            </div>
                            <span class="tweet_text">
                                At the end of 2014 the total paid out to Envato's global community reached $224 million! <a
                                    href="#">http://buff.ly/1AWD4Dx</a>
                            </span>
                            <span class="tz_tweet_meetup_name">&#64;templaza</span>
                            <span class="tweet_time">about 2 hours ago</span>
                        </div>
                        <div class="tzTwitter-item">
                            <div class="tzTwitter-icon">
                                <i class="fa fa-twitter"></i>
                            </div>
                            <span class="tweet_text">
                                At the end of 2014 the total paid out to Envato's global community reached $224 million! <a
                                    href="#">http://buff.ly/1AWD4Dx</a>
                            </span>
                            <span class="tz_tweet_meetup_name">&#64;templaza</span>
                            <span class="tweet_time">about 2 hours ago</span>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Twitter end -->

            <!-- Gallery  start -->
            <section id="gallery">
                <div class="tz_maniva_meetup_title text-center">
                    <h3 class="tz_meetup_title_raleway tz_title_meetup_medium"> OUR GALLERY </h3>
                    <div class="tz_image_title_meetup">
                        <img src="{{ asset('frontend/images/line-white-red.png') }}" alt="line_red">
                    </div>
                    <div class="tz_meetup_title_content">
                        <p>
                            <span>The Muscular Dystrophy Association and University of Florida Child Health Research
                                Institute invite</span>
                        </p>
                        <p>
                            <span>you to attend the Becker Muscular Dystrophy Conference. Check our</span>
                            <span>
                                <a target="_blank" href="https://www.facebook.com/templaza">Fanpage.</a>
                            </span>
                        </p>
                    </div>
                </div>
                <div id="tz_plusg_gallery">
                    <div id="plusgallery1" class="plusgallery" data-userid="templazaplusgallery"
                        data-album-id="1047364345296376" data-limit="12"
                        data-access-token="150849908413827|uYDHoXrvPZOLkQ-zRz_XoYdEeYM" data-type="facebook">

                    </div>
                </div>
            </section>
            <!-- Gallery  end -->

            <!-- Contact start -->
            <section id="contact" class="vc_row parallax parallax-bk2">
                <div class="row vc_row-flex">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 custom_col_pading_right vc_column_container">
                        <div class="vc_column-inner">
                            <div class="tzContact">
                                <div class="text-center">
                                    <ul class="TzContactInfo">
                                        <li class="tzContactAbout">
                                            Club Truth. Plot 3B/4B
                                            <br>
                                            Godwin Abbey Way Limit Way GRA, Benin City, Edo State
                                        </li>



                                        <li class="tzContactPhone"> +2348066592913, +2349157231147</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </section>
            <!-- Contact end -->

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
            <!-- footer end -->

        </div>

        <div id="easy-opener-section">
            <div class="easy-opener-bg"></div>
            <div class="easy-opener-content"><a class="easy-opener-close" href="javascript: "></a>
                <div class="video-content"></div>
            </div>
        </div>
    </div>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="{{ asset('frontend/js/library/jquery.min.js') }}"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{ asset('frontend/js/library/bootstrap.min.js') }}"></script>
    <script>
        jQuery.noConflict();
    </script>

    <script src="{{ asset('libraries/axios.js') }}"></script>
    <script src="{{ asset('libraries/vue.js') }}"></script>
    <!-- Include bxslider -->
    <script src="{{ asset('frontend/js/library/nav.js') }}"></script>
    <script src="{{ asset('frontend/js/one_page.js') }}"></script>
    <script src="{{ asset('frontend/js/library/jquery.bxslider.min.js') }}"></script>
    <script src="{{ asset('frontend/js/library/resize.js') }}"></script>
    <script src="{{ asset('frontend/js/library/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('frontend/js/library/jquery.fitvids.min.js') }}"></script>
    <script src="{{ asset('frontend/js/library/jquery.easy-opener.min.js') }}"></script>
    <script src="{{ asset('frontend/js/library/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('frontend/js/library/classie.js') }}"></script>
    <script src="{{ asset('frontend/js/library/modalEffects.js') }}"></script>
    <script src="{{ asset('frontend/js/library/parallax.min.js') }}"></script>
    <script src="{{ asset('frontend/js/library/masonry.min.js') }}"></script>
    <script src="{{ asset('frontend/js/library/imagesloaded.pkgd.js') }}"></script>
    <script src="{{ asset('frontend/js/library/plusgallery_simple.js') }}"></script>
    <script src="{{ asset('frontend/js/library/jquery.prettyPhoto.js') }}"></script>
    <script src="{{ asset('frontend/js/gallery.js') }}"></script>

    <!-- Include custom js -->
    <script src="{{ asset('frontend/js/custom.js') }}"></script>
    <script src="{{ asset('app/index.js') }}"></script>
</body>

</html>
