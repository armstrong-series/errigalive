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
    <link href='https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700,800' rel='stylesheet' type='text/css'>
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
<div id="tzwrapper">

    <!-- Header start -->
    <header class="tz-headerHome tz-homeType1 tz-homeTypeFixed vc_row" data-option="1">
        <div class="container">
            <div class="tzHeaderContainer">
                <h3 class="pull-left tz_logo">
                    <a title="Home" href="#">
                        <img src="{{ asset('erilive.png') }}" alt="Erriga" class="img-responsive" width="75" height="70">
                    </a>
                </h3>
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#tz-navbar-collapse">
                    <i class="fa fa-bars"></i>
                </button>

                <!-- Menu start -->
                <nav class="nav-collapse pull-right tz-menu">
                    <ul id="tz-navbar-collapse" class="nav navbar-nav collapse navbar-collapse tz-nav">
                        <li><a href="#home">Home</a></li>
                        <li><a href="#recent_post">Events</a></li>
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

    <!-- About start -->
    <section id="eventabout" class="vc_row">
        <div class="container">
            <div class="row">
                <div class="tz_maniva_meetup_title text-center">
                    <h3 class="tz_meetup_title_raleway tz_title_meetup_normal"> WHAT ABOUT EVENT </h3>
                    <div class="tz_meetup_title_content">
                        <p>MDA EarthSat periodically provides business conferences for both Energy and Agricultural clients</p>
                        <p>ranging from day conferences to week-long conferences. Our goal is to make each conference an</p>
                        <p>informative and valuable event for you, your company, and for our industry.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About end -->


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

  

    <!-- Our Team meetup start -->
    <section id="speaker" class="tzSpace_default vc_row">
        <div class="row vc_row-flex">
            <div class="col-lg-6 col-md-6 col-xs-12 col-sm-12 custom_col_pading_right tz_height_text_video vc_column_container wpb_column">
                <div class="tz_width_column tz_bk_box_text_meetup vc_column-inner">
                    <div class="tz_check_width_left_position tz_custom_width">
                        <div class="tz_maniva_meetup_title tz_meetup_video_text text-right">
                            <h3 class="tz_meetup_general_title">
                                Intelligent Content Conference
                            </h3>
                            <div class="tz_image_title_meetup">
                                <img alt="line" src="{{ asset('frontend/images/under-line-white.png') }}" />
                            </div>
                            <div class="tz_meetup_content">
                                <p>The Intelligent Content Conference (ICC) is the 8th annual gathering of the best and brightest content professionals on the planet. Content marketers are still hand-crafting content for each individual channel, device and audience segment. With the volume of content being produced today, we’re doing it wrong, locking content up in silos, hiding it from those who need it most.</p>
                                <p>We need to institute intelligent content production methods that are optimized to be hyper-efficient and extremely fluid. Join us spring 2016 to connect with a diverse mix of peers and learn from a variety of experts.</p>
                            </div>
                            <a class="tz_btn_video_meetup tz_meetup_custom" target="_blank" href="index.html">VIEW ALL SPEAKERS</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-xs-12 col-sm-6 custom_col_pading_left custom_col_pading_right vc_column_container wpb_column">
                <div class="tz_column_inner_meetup vc_column-inner">
                    <div class="speaker_box">
                        <div class="tz_meetup_our_team_thumbnail md-trigger tz_md_effect_16" data-modal="modal-16">
                            <img src="{{ asset('frontend/images/our_team.jpg') }}" alt="our_team">
                            <div class="tz_member_meetup">
                                <div class="ds-table">
                                    <div class="ds-table-cell">
                                        <h4 class="tz_meetup_employment">graphic educator</h4>
                                        <h3 class="tz_meetup_name">Christina Camille</h3>
                                        <span class="tz_text_hover_speaker" data-modal="modal-16">view profile</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tz-md-modal-speakers md-modal md-effect-16 modal-16">
                            <div class="md-content container">
                                <span class="md-close">
                                    <i class="fa fa-close"></i>
                                </span>
                                <div class="tz_modal_title">
                                    <div class="tz_modal_image">
                                        <span class="tz_modal_image_content">
                                            <img src="{{ asset('frontend/images/our_team_squar.jpg') }}" alt="our_team">
                                        </span>
                                    </div>
                                    <h4 class="tz_modal_name">graphic educator</h4>
                                    <span class="tz_modal_employment">Christina Camille</span>
                                    <div class="tz_modal_speakers_social">
                                        <div class="tz_modal_social_speakers">
                                            <a href="#" target="_blank">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                            <a href="#" target="_blank">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                            <a href="#" target="_blank">
                                                <i class="fa fa-camera-retro"></i>
                                            </a>
                                            <a href="#" target="_blank">
                                                <i class="fa fa-google-plus"></i>
                                            </a>
                                            <a href="#" target="_blank">
                                                <i class="fa fa-linkedin"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="tz_modal_speakers_content">
                                    <p>You enjoy the bustle of the city. You feel this is the place you have the possibility to live. You love to socialize, to go out and attend entertainments and programs. You enjoy good food with friends. Your home is the place, where creativity is combined with metal, wood and glass. It is the place of trendy living in a contrasty surrounding.</p>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                            <strong>
                                                <span class="tz_modal_speakers_content_title">TOPICS</span>
                                            </strong>
                                            <ul class="tz-plazart-list">
                                                <li>
                                                    <span class="tz_icon_maniva_list tz_icon_maniva_list_custom">
                                                        <i class="fa fa-check-square-o"></i>
                                                    </span>
                                                    <p class="tz_list_item_content"> Building a Demand Generation Program that Works with Marketing Automation </p>
                                                </li>
                                                <li>
                                                    <span class="tz_icon_maniva_list tz_icon_maniva_list_custom">
                                                        <i class="fa fa-check-square-o"></i>
                                                    </span>
                                                    <p class="tz_list_item_content"> Creating a Process for Visual Storytelling. </p>
                                                </li>
                                                <li>
                                                    <span class="tz_icon_maniva_list tz_icon_maniva_list_custom">
                                                        <i class="fa fa-check-square-o"></i>
                                                    </span>
                                                    <p class="tz_list_item_content"> Leveraging the Best Workflow Technology to Enhance Your Content Marketing </p>
                                                </li>
                                                <li>
                                                    <span class="tz_icon_maniva_list tz_icon_maniva_list_custom">
                                                        <i class="fa fa-check-square-o"></i>
                                                    </span>
                                                    <p class="tz_list_item_content"> Email Marketing: 10 Things You Are Not Doing (and it’s killing you!) </p>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                            <strong>
                                                <span class="tz_modal_speakers_content_title">HISTORY</span>
                                            </strong>
                                            <ul class="tz-plazart-list">
                                                <li>
                                                    <span class="tz_icon_maniva_list tz_icon_maniva_list_custom">
                                                        <i class="fa fa-clock-o"></i>
                                                    </span>
                                                    <p class="tz_list_item_content"> Dec 2013 - Present: CEO at TemPlaza </p>
                                                </li>
                                                <li>
                                                    <span class="tz_icon_maniva_list tz_icon_maniva_list_custom">
                                                        <i class="fa fa-clock-o"></i>
                                                    </span>
                                                    <p class="tz_list_item_content"> Dec 2012 - Dec 2013: CEO at Sunland ,. JSC </p>
                                                </li>
                                                <li>
                                                    <span class="tz_icon_maniva_list tz_icon_maniva_list_custom">
                                                        <i class="fa fa-clock-o"></i>
                                                    </span>
                                                    <p class="tz_list_item_content"> Dec 2011 - Dec 2012: CTO at Elite JSC </p>
                                                </li>
                                                <li>
                                                    <span class="tz_icon_maniva_list tz_icon_maniva_list_custom">
                                                        <i class="fa fa-clock-o"></i>
                                                    </span>
                                                    <p class="tz_list_item_content"> Sep 2008 - Dec 2011: CIO at YOS ,. JSC </p>
                                                </li>
                                                <li>
                                                    <span class="tz_icon_maniva_list tz_icon_maniva_list_custom">
                                                        <i class="fa fa-clock-o"></i>
                                                    </span>
                                                    <p class="tz_list_item_content"> Sep 2006 - Sep 2008: Web Developer at Joomlord </p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <span class="md-close tz-md-close">
                                    <i class="fa fa-close"></i>
                                    <em> Thanks for watching! </em>
                                </span>
                            </div>
                        </div>
                        <div class="md-overlay"></div><!-- the overlay element -->
                    </div>
                    <div class="speaker_box">
                        <div class="tz_meetup_our_team_thumbnail md-trigger tz_md_effect_16" data-modal="modal-16">
                            <img src="{{ asset('frontend/images/our_team3.jpg') }}" alt="our_team">
                            <div class="tz_member_meetup">
                                <div class="ds-table">
                                    <div class="ds-table-cell">
                                        <h4 class="tz_meetup_employment">Web Development</h4>
                                        <h3 class="tz_meetup_name">Jaffrey Haye</h3>
                                        <span class="tz_text_hover_speaker" data-modal="modal-16">view profile</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tz-md-modal-speakers md-modal md-effect-16 modal-16">
                            <div class="md-content container">
                                <span class="md-close">
                                    <i class="fa fa-close"></i>
                                </span>
                                <div class="tz_modal_title">
                                    <div class="tz_modal_image">
                                        <span class="tz_modal_image_content">
                                            <img src="{{ asset('frontend/images/our_team_squar_3.jpg') }}" alt="our_team">
                                        </span>
                                    </div>
                                    <h4 class="tz_modal_name">Jaffrey Haye</h4>
                                    <span class="tz_modal_employment">Web Development</span>
                                    <div class="tz_modal_speakers_social">
                                        <div class="tz_modal_social_speakers">
                                            <a href="https://www.facebook.com/templaza" target="_blank">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                            <a href="https://twitter.com/templazavn" target="_blank">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                            <a href="#" target="_blank">
                                                <i class="fa fa-camera-retro"></i>
                                            </a>
                                            <a href="https://plus.google.com/+Templaza/" target="_blank">
                                                <i class="fa fa-google-plus"></i>
                                            </a>
                                            <a href="#" target="_blank">
                                                <i class="fa fa-linkedin"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="tz_modal_speakers_content">
                                    <p>You enjoy the bustle of the city. You feel this is the place you have the possibility to live. You love to socialize, to go out and attend entertainments and programs. You enjoy good food with friends. Your home is the place, where creativity is combined with metal, wood and glass. It is the place of trendy living in a contrasty surrounding.</p>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                            <strong>
                                                <span class="tz_modal_speakers_content_title">TOPICS</span>
                                            </strong>
                                            <ul class="tz-plazart-list">
                                                <li>
                                                    <span class="tz_icon_maniva_list tz_icon_maniva_list_custom">
                                                        <i class="fa fa-check-square-o"></i>
                                                    </span>
                                                    <p class="tz_list_item_content"> Building a Demand Generation Program that Works with Marketing Automation </p>
                                                </li>
                                                <li>
                                                    <span class="tz_icon_maniva_list tz_icon_maniva_list_custom">
                                                        <i class="fa fa-check-square-o"></i>
                                                    </span>
                                                    <p class="tz_list_item_content"> Creating a Process for Visual Storytelling. </p>
                                                </li>
                                                <li>
                                                    <span class="tz_icon_maniva_list tz_icon_maniva_list_custom">
                                                        <i class="fa fa-check-square-o"></i>
                                                    </span>
                                                    <p class="tz_list_item_content"> Leveraging the Best Workflow Technology to Enhance Your Content Marketing </p>
                                                </li>
                                                <li>
                                                    <span class="tz_icon_maniva_list tz_icon_maniva_list_custom">
                                                        <i class="fa fa-check-square-o"></i>
                                                    </span>
                                                    <p class="tz_list_item_content"> Email Marketing: 10 Things You Are Not Doing (and it’s killing you!) </p>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                            <strong>
                                                <span class="tz_modal_speakers_content_title">HISTORY</span>
                                            </strong>
                                            <ul class="tz-plazart-list">
                                                <li>
                                                    <span class="tz_icon_maniva_list tz_icon_maniva_list_custom">
                                                        <i class="fa fa-clock-o"></i>
                                                    </span>
                                                    <p class="tz_list_item_content"> Dec 2013 - Present: CEO at TemPlaza </p>
                                                </li>
                                                <li>
                                                    <span class="tz_icon_maniva_list tz_icon_maniva_list_custom">
                                                        <i class="fa fa-clock-o"></i>
                                                    </span>
                                                    <p class="tz_list_item_content"> Dec 2012 - Dec 2013: CEO at Sunland ,. JSC </p>
                                                </li>
                                                <li>
                                                    <span class="tz_icon_maniva_list tz_icon_maniva_list_custom">
                                                        <i class="fa fa-clock-o"></i>
                                                    </span>
                                                    <p class="tz_list_item_content"> Dec 2011 - Dec 2012: CTO at Elite JSC </p>
                                                </li>
                                                <li>
                                                    <span class="tz_icon_maniva_list tz_icon_maniva_list_custom">
                                                        <i class="fa fa-clock-o"></i>
                                                    </span>
                                                    <p class="tz_list_item_content"> Sep 2008 - Dec 2011: CIO at YOS ,. JSC </p>
                                                </li>
                                                <li>
                                                    <span class="tz_icon_maniva_list tz_icon_maniva_list_custom">
                                                        <i class="fa fa-clock-o"></i>
                                                    </span>
                                                    <p class="tz_list_item_content"> Sep 2006 - Sep 2008: Web Developer at Joomlord </p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <span class="md-close tz-md-close">
                                    <i class="fa fa-close"></i>
                                    <em> Thanks for watching! </em>
                                </span>
                            </div>
                        </div>
                        <div class="md-overlay"></div><!-- the overlay element -->
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-xs-12 col-sm-6 custom_col_pading_left custom_col_pading_right vc_column_container wpb_column">
                <div class="tz_column_inner_meetup vc_column-inner">
                    <div class="speaker_box">
                        <div class="tz_meetup_our_team_thumbnail md-trigger tz_md_effect_16" data-modal="modal-16">
                            <img src="{{ asset('frontend/images/our_team4.jpg') }}" alt="our_team">
                            <div class="tz_member_meetup">
                                <div class="ds-table">
                                    <div class="ds-table-cell">
                                        <h4 class="tz_meetup_employment">CEO TemPlaza</h4>
                                        <h3 class="tz_meetup_name">Robert Van Doe</h3>
                                        <span class="tz_text_hover_speaker" data-modal="modal-16">view profile</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tz-md-modal-speakers md-modal md-effect-16 modal-16">
                            <div class="md-content container">
                                <span class="md-close">
                                    <i class="fa fa-close"></i>
                                </span>
                                <div class="tz_modal_title">
                                    <div class="tz_modal_image">
                                        <span class="tz_modal_image_content">
                                            <img src="{{ asset('frontend/images/our_team_squar_2.jpg') }}" alt="our_team">
                                        </span>
                                    </div>
                                    <h4 class="tz_modal_name">Robert Van Doe</h4>
                                    <span class="tz_modal_employment">CEO TemPlaza</span>
                                    <div class="tz_modal_speakers_social">
                                        <div class="tz_modal_social_speakers">
                                            <a href="#" target="_blank">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                            <a href="#" target="_blank">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                            <a href="#" target="_blank">
                                                <i class="fa fa-camera-retro"></i>
                                            </a>
                                            <a href="#" target="_blank">
                                                <i class="fa fa-google-plus"></i>
                                            </a>
                                            <a href="#" target="_blank">
                                                <i class="fa fa-linkedin"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="tz_modal_speakers_content">
                                    <p>You enjoy the bustle of the city. You feel this is the place you have the possibility to live. You love to socialize, to go out and attend entertainments and programs. You enjoy good food with friends. Your home is the place, where creativity is combined with metal, wood and glass. It is the place of trendy living in a contrasty surrounding.</p>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                            <strong>
                                                <span class="tz_modal_speakers_content_title">TOPICS</span>
                                            </strong>
                                            <ul class="tz-plazart-list">
                                                <li>
                                                    <span class="tz_icon_maniva_list tz_icon_maniva_list_custom">
                                                        <i class="fa fa-check-square-o"></i>
                                                    </span>
                                                    <p class="tz_list_item_content"> Building a Demand Generation Program that Works with Marketing Automation </p>
                                                </li>
                                                <li>
                                                    <span class="tz_icon_maniva_list tz_icon_maniva_list_custom">
                                                        <i class="fa fa-check-square-o"></i>
                                                    </span>
                                                    <p class="tz_list_item_content"> Creating a Process for Visual Storytelling. </p>
                                                </li>
                                                <li>
                                                    <span class="tz_icon_maniva_list tz_icon_maniva_list_custom">
                                                        <i class="fa fa-check-square-o"></i>
                                                    </span>
                                                    <p class="tz_list_item_content"> Leveraging the Best Workflow Technology to Enhance Your Content Marketing </p>
                                                </li>
                                                <li>
                                                    <span class="tz_icon_maniva_list tz_icon_maniva_list_custom">
                                                        <i class="fa fa-check-square-o"></i>
                                                    </span>
                                                    <p class="tz_list_item_content"> Email Marketing: 10 Things You Are Not Doing (and it’s killing you!) </p>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                            <strong>
                                                <span class="tz_modal_speakers_content_title">HISTORY</span>
                                            </strong>
                                            <ul class="tz-plazart-list">
                                                <li>
                                                    <span class="tz_icon_maniva_list tz_icon_maniva_list_custom">
                                                        <i class="fa fa-clock-o"></i>
                                                    </span>
                                                    <p class="tz_list_item_content"> Dec 2013 - Present: CEO at TemPlaza </p>
                                                </li>
                                                <li>
                                                    <span class="tz_icon_maniva_list tz_icon_maniva_list_custom">
                                                        <i class="fa fa-clock-o"></i>
                                                    </span>
                                                    <p class="tz_list_item_content"> Dec 2012 - Dec 2013: CEO at Sunland ,. JSC </p>
                                                </li>
                                                <li>
                                                    <span class="tz_icon_maniva_list tz_icon_maniva_list_custom">
                                                        <i class="fa fa-clock-o"></i>
                                                    </span>
                                                    <p class="tz_list_item_content"> Dec 2011 - Dec 2012: CTO at Elite JSC </p>
                                                </li>
                                                <li>
                                                    <span class="tz_icon_maniva_list tz_icon_maniva_list_custom">
                                                        <i class="fa fa-clock-o"></i>
                                                    </span>
                                                    <p class="tz_list_item_content"> Sep 2008 - Dec 2011: CIO at YOS ,. JSC </p>
                                                </li>
                                                <li>
                                                    <span class="tz_icon_maniva_list tz_icon_maniva_list_custom">
                                                        <i class="fa fa-clock-o"></i>
                                                    </span>
                                                    <p class="tz_list_item_content"> Sep 2006 - Sep 2008: Web Developer at Joomlord </p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <span class="md-close tz-md-close">
                                    <i class="fa fa-close"></i>
                                    <em> Thanks for watching! </em>
                                </span>
                            </div>
                        </div>
                        <div class="md-overlay"></div><!-- the overlay element -->
                    </div>
                    <div class="speaker_box">
                        <div class="tz_meetup_our_team_thumbnail md-trigger tz_md_effect_16" data-modal="modal-16">
                            <img src="{{ asset('frontend/images/our_team2.jpg')}}" alt="our_team">
                            <div class="tz_member_meetup">
                                <div class="ds-table">
                                    <div class="ds-table-cell">
                                        <h4 class="tz_meetup_employment">Business</h4>
                                        <h3 class="tz_meetup_name">Jessica Palt</h3>
                                        <span class="tz_text_hover_speaker" data-modal="modal-16">view profile</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tz-md-modal-speakers md-modal md-effect-16 modal-16">
                            <div class="md-content container">
                                <span class="md-close">
                                    <i class="fa fa-close"></i>
                                </span>
                                <div class="tz_modal_title">
                                    <div class="tz_modal_image">
                                        <span class="tz_modal_image_content">
                                            <img src="{{ asset('frontend/images/our_team_squar_4.jpg') }}" alt="our_team">
                                        </span>
                                    </div>
                                    <h4 class="tz_modal_name">Jessica Palt</h4>
                                    <span class="tz_modal_employment">Business</span>
                                    <div class="tz_modal_speakers_social">
                                        <div class="tz_modal_social_speakers">
                                            <a href="#" target="_blank">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                            <a href="#" target="_blank">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                            <a href="#" target="_blank">
                                                <i class="fa fa-camera-retro"></i>
                                            </a>
                                            <a href="#" target="_blank">
                                                <i class="fa fa-google-plus"></i>
                                            </a>
                                            <a href="#" target="_blank">
                                                <i class="fa fa-linkedin"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="tz_modal_speakers_content">
                                    <p>You enjoy the bustle of the city. You feel this is the place you have the possibility to live. You love to socialize, to go out and attend entertainments and programs. You enjoy good food with friends. Your home is the place, where creativity is combined with metal, wood and glass. It is the place of trendy living in a contrasty surrounding.</p>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                            <strong>
                                                <span class="tz_modal_speakers_content_title">TOPICS</span>
                                            </strong>
                                            <ul class="tz-plazart-list">
                                                <li>
                                                    <span class="tz_icon_maniva_list tz_icon_maniva_list_custom">
                                                        <i class="fa fa-check-square-o"></i>
                                                    </span>
                                                    <p class="tz_list_item_content"> Building a Demand Generation Program that Works with Marketing Automation </p>
                                                </li>
                                                <li>
                                                    <span class="tz_icon_maniva_list tz_icon_maniva_list_custom">
                                                        <i class="fa fa-check-square-o"></i>
                                                    </span>
                                                    <p class="tz_list_item_content"> Creating a Process for Visual Storytelling. </p>
                                                </li>
                                                <li>
                                                    <span class="tz_icon_maniva_list tz_icon_maniva_list_custom">
                                                        <i class="fa fa-check-square-o"></i>
                                                    </span>
                                                    <p class="tz_list_item_content"> Leveraging the Best Workflow Technology to Enhance Your Content Marketing </p>
                                                </li>
                                                <li>
                                                    <span class="tz_icon_maniva_list tz_icon_maniva_list_custom">
                                                        <i class="fa fa-check-square-o"></i>
                                                    </span>
                                                    <p class="tz_list_item_content"> Email Marketing: 10 Things You Are Not Doing (and it’s killing you!) </p>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                            <strong>
                                                <span class="tz_modal_speakers_content_title">HISTORY</span>
                                            </strong>
                                            <ul class="tz-plazart-list">
                                                <li>
                                                    <span class="tz_icon_maniva_list tz_icon_maniva_list_custom">
                                                        <i class="fa fa-clock-o"></i>
                                                    </span>
                                                    <p class="tz_list_item_content"> Dec 2013 - Present: CEO at TemPlaza </p>
                                                </li>
                                                <li>
                                                    <span class="tz_icon_maniva_list tz_icon_maniva_list_custom">
                                                        <i class="fa fa-clock-o"></i>
                                                    </span>
                                                    <p class="tz_list_item_content"> Dec 2012 - Dec 2013: CEO at Sunland ,. JSC </p>
                                                </li>
                                                <li>
                                                    <span class="tz_icon_maniva_list tz_icon_maniva_list_custom">
                                                        <i class="fa fa-clock-o"></i>
                                                    </span>
                                                    <p class="tz_list_item_content"> Dec 2011 - Dec 2012: CTO at Elite JSC </p>
                                                </li>
                                                <li>
                                                    <span class="tz_icon_maniva_list tz_icon_maniva_list_custom">
                                                        <i class="fa fa-clock-o"></i>
                                                    </span>
                                                    <p class="tz_list_item_content"> Sep 2008 - Dec 2011: CIO at YOS ,. JSC </p>
                                                </li>
                                                <li>
                                                    <span class="tz_icon_maniva_list tz_icon_maniva_list_custom">
                                                        <i class="fa fa-clock-o"></i>
                                                    </span>
                                                    <p class="tz_list_item_content"> Sep 2006 - Sep 2008: Web Developer at Joomlord </p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <span class="md-close tz-md-close">
                                    <i class="fa fa-close"></i>
                                    <em> Thanks for watching! </em>
                                </span>
                            </div>
                        </div>
                        <div class="md-overlay"></div><!-- the overlay element -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Our Team meetup end-->



    <!-- Twitter start -->
    <section id="tz_twitter" class="parallax parallax-bk2">
        <div class="tzTwitter-slider-box">
            <div class="tzTwitter-slider owl-carousel owl-theme">
                <div class="tzTwitter-item">
                    <div class="tzTwitter-icon">
                        <i class="fa fa-twitter"></i>
                    </div>
                    <span class="tweet_text">
                        At the end of 2014 the total paid out to Envato's global community reached $224 million! <a href="#">http://buff.ly/1AWD4Dx</a>
                    </span>
                    <span class="tz_tweet_meetup_name">&#64;templaza</span>
                    <span class="tweet_time">about 2 hours ago</span>
                </div>
                <div class="tzTwitter-item">
                    <div class="tzTwitter-icon">
                        <i class="fa fa-twitter"></i>
                    </div>
                    <span class="tweet_text">
                        At the end of 2014 the total paid out to Envato's global community reached $224 million! <a href="#">http://buff.ly/1AWD4Dx</a>
                    </span>
                    <span class="tz_tweet_meetup_name">&#64;templaza</span>
                    <span class="tweet_time">about 2 hours ago</span>
                </div>
                <div class="tzTwitter-item">
                    <div class="tzTwitter-icon">
                        <i class="fa fa-twitter"></i>
                    </div>
                    <span class="tweet_text">
                        At the end of 2014 the total paid out to Envato's global community reached $224 million! <a href="#">http://buff.ly/1AWD4Dx</a>
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
                    <span>The Muscular Dystrophy Association and University of Florida Child Health Research Institute invite</span>
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
            <div id="plusgallery1" class="plusgallery"
                 data-userid="templazaplusgallery"
                 data-album-id="1047364345296376"
                 data-limit="12"
                 data-access-token="150849908413827|uYDHoXrvPZOLkQ-zRz_XoYdEeYM"
                 data-type="facebook">

            </div>
        </div>
    </section>
    <!-- Gallery  end -->

    <!-- Box text title 2  start -->
    
    <!-- Box text title 2 end -->

    <!-- Speaker client start -->
   
    <!-- Speaker client end -->

    <!-- FAQ client start -->
    
    <!-- FAQ client end -->

    <!-- Register start -->
    <section id="register" class="parallax parallax-bk2 vc_row">
        <div class="row vc_row-flex">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 custom_col_pading_right vc_column_container">
                <div class="tz_padding_register vc_column-inner">
                    <div class="tz_register_meetup">
                        <div class="tz_register_meetup_pricing">
                          
                            <div class="tz_register_meetup_pricing_item" data-price-pricing="645">
                                <div class="tz_register_meetup_pricing_item_container">
                                    <h3> Conference + Workshops </h3>
                                    <p>Through this introductory creative-critical approach to textual study based on the writing and re-writing of texts, students will learn theoretical perspectives on literary study.</p>
                                </div>
                                <div class="tz_register_meetup_pricing_item_price ">
                                    <div class="ds-table">
                                        <div class="ds-table-cell">
                                            <h3> $645 </h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tz_register_meetup_pricing_item" data-price-pricing="465">
                                <div class="tz_register_meetup_pricing_item_container">
                                    <h3> Conference + Buffet </h3>
                                    <p>Joining to meet up to have a chance to raise your ideas directly on Conference. Especially, you can enjoy Asian buffet after conference.</p>
                                </div>
                                <div class="tz_register_meetup_pricing_item_price ">
                                    <div class="ds-table">
                                        <div class="ds-table-cell">
                                            <h3> $465 </h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tz_register_meetup_pricing_item" data-price-pricing="995">
                                <div class="tz_register_meetup_pricing_item_container">
                                    <h3> Full Package (No Hidden Fees) </h3>
                                    <p>Don’t hesitate anymore! Let’s come and try to register with us. You do not worry anything, we give you some demo. You can register after demo</p>
                                </div>
                                <div class="tz_register_meetup_pricing_item_price ">
                                    <div class="ds-table">
                                        <div class="ds-table-cell">
                                            <h3> $995 </h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 custom_col_pading_left vc_column_container">
                <div class="tz_form_register vc_column-inner tz_width_column">
                    <div class="tz_form_register_box tz_custom_width">
                        <div class="tz_maniva_meetup_title text-left">
                            <h3 class="tz_maniva_meetup_title_custom tz_maniva_meetup_title_custom_white">
                                <em>Buy</em>
                                Ticket
                            </h3>
                            <div class="tz_image_title_meetup">
                                <img src="{{ asset('frontend/images/line-text1.jpg') }}" alt="line">
                            </div>
                            <div class="tz_meetup_title_content">
                                <p>
                                    <span>The Conference can help you meet some special person. In addition,</span>
                                </p>
                                <p>
                                    <span>you can open your knowledge and contribute your ideas in this conference.</span>
                                </p>
                                <p>
                                    <span>You will also have a chance to enjoy Buffet. Now, Let’s Register now to get new experience!</span>
                                </p>
                            </div>
                        </div>
                        <div class="tz_meetup_form">
                            <p>
                                <label>Full Name or company name *</label>
                                <span>
                                    <input id="name_paypal" type="text" placeholder="FULL NAME *" aria-invalid="false" aria-required="true" value="" name="text-610">
                                </span>
                            </p>
                            <p>
                                <label>email address *</label>
                                <span class="wpcf7-form-control-wrap email-78">
                                    <input type="email" placeholder="info@templaza.com" aria-invalid="false" aria-required="true" value="" name="email-78">
                                </span>
                            </p>
                            <p>
                                <label>phone number</label>
                                <span class="wpcf7-form-control-wrap tel-633">
                                    <input type="tel" placeholder="+45 8 234 0209" aria-invalid="false" size="40" value="" name="tel-633">
                                </span>
                            </p>
                            <p class="tz_meetup_quantity_paypal">
                                <label>quantity*</label>
                                <sub class="tz_meetup_quantity_paypal_input">
                                    <span class="wpcf7-form-control-wrap number-850">
                                        <input id="number_item" type="number" placeholder="1" aria-invalid="false" max="1000" min="1" value="" name="number-850">
                                    </span>
                                </sub>
                            </p>
                            <p>
                                <label>address street</label>
                                <span class="wpcf7-form-control-wrap text-502">
                                    <input type="text" placeholder="Address Street" aria-invalid="false" value="" name="text-502">
                                </span>
                            </p>
                            <p class="tz_meetup_btn_paypal">
                                <input class="tz_paypal_submit" type="submit" value="pay and register">
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Register end -->

    <!-- Recent posts start -->
    <section id="recent_post">
        <div class="container">
            <div class="tz_maniva_meetup_title text-center">
                <h3 class="tz_meetup_title_raleway tz_title_meetup_semi_bold" style="color:#242732"> Events</h3>
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
                        <div class="tz_image_recent_blog_meetup">
                            <div class="tz_meetup_post_img">
                                <!-- <img src="{{ asset('frontend/images/Meeting-2.jpg') }}" alt="blog"> -->
                                <img src="{{ asset('club_truth.jpg') }}" alt="blog" >
                                <div class="tz_meetup_view_link">
                                    <div class="ds-table">
                                        <div class="ds-table-cell">
                                            <span class="tz_view_img_blog_type1">
                                                <a data-rel="latestPhoto[worksGallery]" href="{{ asset('club_truth.jpg') }}">
                                                    <i class="fa fa-search"></i>
                                                </a>
                                            </span>
                                            <span class="tz_meetup_link_blog">
                                                <a href="#">
                                                    <i class="fa fa-external-link"></i>
                                                </a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tz_recent_blog_meetup_date">
                                <span class="tz_month_latest">
                                    Nov
                                </span>
                                <span class="tz_date_latest">
                                    6th
                                </span>
                            </div>
                        </div>
                        
                    </div>
                    <div class="tz_recent_blog_meetup_content">
                        <div class="tz_image_recent_blog_meetup">
                            <div class="tz_meetup_post_img">
                               
                                <img src="{{ asset('new-genesis.jpg') }}" alt="blog" >
                                <div class="tz_meetup_view_link">
                                    <div class="ds-table">
                                        <div class="ds-table-cell">
                                            <span class="tz_view_img_blog_type1">
                                                <a data-rel="latestPhoto[worksGallery]" href="{{ asset('new-genesis.jpg') }}">
                                                    <i class="fa fa-search"></i>
                                                </a>
                                            </span>
                                            <span class="tz_meetup_link_blog">
                                                <a href="#">
                                                    <i class="fa fa-external-link"></i>
                                                </a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tz_recent_blog_meetup_date">
                                <span class="tz_month_latest">
                                   Dec
                                </span>
                                <span class="tz_date_latest">
                                    26th
                                </span>
                            </div>
                        </div>
                        
                    </div>
                    
                    <div class="tz_recent_blog_meetup_content">
                        <div class="tz_image_recent_blog_meetup">
                            <div class="tz_meetup_post_img">
                                <img src="images/post-full-1jpg.jpg" alt="blog">
                                <div class="tz_meetup_view_link">
                                    <div class="ds-table">
                                        <div class="ds-table-cell">
                                            <span class="tz_view_img_blog_type1">
                                                <a data-rel="latestPhoto[worksGallery]" href="images/post-full-1jpg.jpg">
                                                    <i class="fa fa-search"></i>
                                                </a>
                                            </span>
                                            <span class="tz_meetup_link_blog">
                                                <a href="audio-blog.html">
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
                            <h4>
                                <a href="audio-blog.html">
                                    Devices more secure
                                </a>
                            </h4>
                            <div class="tz_meetup_description_latest">
                                <p>Fusce dapibus venenatis enim, sit amet euismod enim viverra sed. Aliquam accumsan consectetur quam eu porta. Pellentesque habitant morbi tristique senectus et.</p>
                            </div>
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
                        </div>
                    </div>
                </div>
              
            </div>
        </div>
    </section>
    <!-- Recent posts end -->

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
        <!-- <aside class="MultiColorSubscribeWidget widget">
            
            <div class="multicolor-subscribe">
                <div class="max-email-box">
                    <form class="multicolor-subscribe-form">
                        <input class="email commons mcolor-subbox" type="email" placeholder="Your Email Address..." name="email">
                        <input class="mcolor-button subscribe commons" type="submit" value="SUBSCRIBE" name="commit">
                    </form>
                </div>
            </div>
        </aside> -->
        
        <div class="tzcopyright">
            <p>
                Copyright &copy; <?php echo date("Y"); ?>
                <a target="_blank" href="#">ErrigaLive</a>
                
            </p>
        </div>
    </footer>
    <!-- footer end -->

</div>

<div id="easy-opener-section">
    <div class="easy-opener-bg"></div><div class="easy-opener-content"><a class="easy-opener-close" href="javascript: "></a><div class="video-content"></div> </div></div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="{{ asset('frontend/js/library/jquery.min.js') }}"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="{{ asset('frontend/js/library/bootstrap.min.js') }}"></script>
<script>
    jQuery.noConflict();
</script>
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
</body>
</html>