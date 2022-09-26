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
    <div id="index">
        <div id="tzwrapper">

            <!-- Header start -->
            <header class="tz-headerHome tz-homeType1 tz-homeTypeFixed vc_row" data-option="1">
                <div class="container">
                    <div class="tzHeaderContainer">
                        <h3 class="pull-left tz_logo">
                            <a title="Home" href="javascript:void(0);">
                                <img src="{{ asset('erigga/LOGO.png') }}" alt="Erriga" class="img-responsive">
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
                                <li class="menu-item-has-children">
                                    <a href="#event">Events</a>
                                    <ul class="sub-menu non_mega_menu">
                                        <li class="menu-item">
                                            <a href="{{ route('event.tickets') }}">Buy Ticket</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#event">Events</a>

                                </li>
                                <li><a href="{{ route('account.secure') }}">Login</a></li>
                            </ul>
                        </nav>
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

                            <img src="{{ asset('erigga/slider1.jpg') }}" alt="slider-home" />

                        </li>
                        <li>
                            <div class="meetup_bl_slider_home"></div>
                            <img src="{{ asset('erigga/slider2.jpg') }}" alt="slider-home" />
                        </li>
                        <li>
                            <div class="meetup_bl_slider_home"></div>
                            <img src="{{ asset('erigga/slider3.png') }}" alt="slider-home" />
                        </li>
                    </ul>
                </div>

            </div>
            <!-- Slider end -->
            <!-- Event Start -->
            <section id="event" class="vc_row">
                <div class="tz_maniva_meetup_title text-center">
                    <h3 class="tz_maniva_meetup_title_custom">
                        <em>Event</em>

                    </h3>
                    <div class="tz_image_title_meetup">
                      <img src="{{ asset('frontend/images/line-black-red.png') }}" alt="line-black">
                   </div>
                </div>
            </section>
            <!-- Event end -->

            <!-- About meetup start -->
            <section id="about_meetup" class="vc_row">
                <div class="container">
                    <div v-if="events < 1">
                        <div class="tz_maniva_meetup_title text-center">
                            <h3 class="text-secondary"> No Available  Event</h3>
                        </div>
                    </div>
                     <div>
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 custom_col_pading" v-for="(event, index) in events">
                                <div class="tz_maniva_about_meetup">
                                    <div class="tz_meetup_thumbnail">
                                        <a href="javascript:void(0);">
                                            <img :src="'/storage/events/banner/'+event.event_banner" alt=Club-Truth" />
                                        </a>
                                        <div class="tz_meetup_about_content" style="padding: 20px;">
                                            <a class="tz_btn_video_meetup tz_meetup_btn_dark" :href="`/events/ticket/view/${event.id}`">View Event</a>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </section>
            <!-- About meetup end -->

            <textarea name="" id="events" style="display:none" cols="30" rows="10">{{ json_encode($events) }}</textarea>


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


            <!-- Gallery  start -->
            <section id="gallery">
                <div class="tz_maniva_meetup_title text-center p-2">
                    <h3 class="tz_meetup_title_raleway tz_title_meetup_medium"> About &nbsp; EriggaLive</h3>
                    <div class="tz_image_title_meetup">
                        <img src="{{ asset('frontend/images/line-white-red.png') }}" alt="line_red">
                    </div>
                    <div class="tz_meetup_title_content" style="padding:15px;">
                        <p style="text-align:center">
                                <span>
                                    Riding on the phenomenally successful and record breaking Erigga Live Concerts held In 2018, 2019 & 2021 in Warri, Erigga is set to re-write history yet again, this time with the 4th Edition slated to hold on the 26th of December 2022 at shop rite delta mall warri
                                    The concert will feature
                                    Live performances by top rated artistes & A List Comedians. Also, A Skill Acquisition Workshop is also planned for Friday, 23rd & Saturday 24th December 2022. This will give an opportunity to Thousands of Unemployed Youths & Women, to avail themselves of the free courses to aquire skills that will be beneficial to them in fending for themselves & their families.
                                 </span>
                                <br>
                                <span>Also, on the evening of the 24th of December, We plan to organize a free medical outreach which will hold simultaneously in three different neighbourhoods in Warri & Ughelli. At least 10 doctors & over 30 Nurses drawn from institutions will cater for at least 1,000 people. Drugs will also be given out free of charge</span>

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



            <!-- footer start -->
            @include('Frontend.Includes.footer');
            <!-- footer end -->

        </div>

        <div id="easy-opener-section">
            <div class="easy-opener-bg"></div>
            <div class="easy-opener-content"><a class="easy-opener-close" href="javascript: "></a>
                <div class="video-content"></div>
            </div>
        </div>
    </div>


    @include('Frontend.Includes.script');
    <script src="{{ asset('app/index.js') }}"></script>
</body>

</html>
