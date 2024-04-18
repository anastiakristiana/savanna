@extends('layouts.app')

@section('section')

<style>
    .rev_slider li.tp-revslider-slidesli,
    ul.tp-revslider-mainul {
        overflow: visible !important;
    }
    .video-container-ok {
        position: relative;
        padding-top: 100%; /* 1:1 Aspect Ratio (100% of the container width) */
        overflow: hidden;
    }
    
    .video-content-ok {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }
    .video-container-ok {
        display: none;
    }
    .grecaptcha-badge {
        z-index: 100;   
    }
    .video-background {
        position: relative;
        overflow: hidden;
        width: 100%;
        padding-top: 56.25%; /* 16:9 aspect ratio */
    }
    
    .video-content {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover; /* This ensures the video covers the container while maintaining aspect ratio */
    }

    @media (min-width: 1599px) {
        .section.mcb-section.largest_satelite_city_pc {
            /*padding-top: 48vh !important;*/
        }
    }
    @media (min-width: 768px) {
        .cstm-section {
            height: 100vh !important;
            display: flex;
            justify-content: center;
            align-items: center;
        }
    }
    @media (max-width: 767px) {
        .video-container-ok {
            display: block;
        }
        div.largest_satelite_city_mobile {
            padding-top: 0px !important;
        }
        .video-background {
            padding-top: 100%; /* 1:1 aspect ratio (square) */
        }
    }
</style>

<div id="Content" style="background-color:#0A3644">
            <div class="content_wrapper clearfix">
                <div class="sections_group">
                    <div class="entry-content">
                        <!--<div class="section mcb-section main_banner" style="text-align:center;background-color:hsl(0, 0%, 0%, 0); background-image:url({{asset('assets/content/savanna/main_banner_logo.jpeg')}}); background-size: cover; background-repeat:no-repeat; background-position:center top;">-->
                        <!--<div class="video-background">
                            <video autoplay muted loop playsinline class="video-content">
                                <source src="{{ asset('assets/content/savanna/savanna_videobanner_2.mp4') }}" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>-->
                            <!--<div class="section_wrapper mcb-section-inner">
                                <div class="wrap mcb-wrap one valign-top clearfix">
                                    <div class="mcb-wrap-inner">
                                        <div class="column mcb-column one column_placeholder">
                                            <div class="placeholder">
                                                <img class="scale-with-grid" src="{{asset('assets/content/savanna/header_banner_merge.png')}}" width="100%" style="margin-left:-4%;">
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>-->

                        <!-- START REVOLUTION SLIDER 5.0 auto mode -->
                        <div id="rev_slider" class="rev_slider main-banner-slide cstm-section" data-version="5.0">
                                <ul>

                                <li data-transition="fade">

                                    <!-- MAIN IMAGE -->
                                    <!--div class="video-background">
                                        <video id="backgroundVideo" autoplay muted loop playsinline class="video-content gallery_on_pc">
                                            <source src="{{ asset('assets/content/savanna/vidbanner_landscape_savanna.mp4') }}" type="video/mp4">
                                            Your browser does not support the video tag.
                                        </video>
                                        <div class="video-container-ok">
                                            <video id="backgroundVideo" autoplay muted loop playsinline class="video-content-ok gallery_on_mobile">
                                                <source src="{{ asset('assets/content/savanna/vidbanner_portrait_savanna2.mp4') }}" type="video/mp4">
                                                Your browser does not support the video tag.
                                            </video>
                                        </div>
                                    </div-->
                                    
                                    <div class="video-background">
                                            <video id="backgroundVideo" autoplay muted loop playsinline class="video-content">
                                                <source src="{{ asset('assets/content/savanna/vidbanner_landscape_savanna_1920x1080px.mp4') }}" type="video/mp4" media="(min-width: 1920px)">
                                                <source src="{{ asset('assets/content/savanna/vidbanner_landscape_savanna_1600x900px.mp4') }}" type="video/mp4" media="(min-width: 1600px)">
                                                <source src="{{ asset('assets/content/savanna/vidbanner_landscape_savanna_1366x768px.mp4') }}" type="video/mp4" media="(min-width: 1366px)">
                                                <source src="{{ asset('assets/content/savanna/vidbanner_landscape_savanna_1280x720px.mp4') }}" type="video/mp4" media="(min-width: 1280px)">
                                                <source src="{{ asset('assets/content/savanna/vidbanner_portrait_savanna_mobile_video.mp4') }}" type="video/mp4">
                                                Your browser does not support the video tag.
                                            </video>
                                    </div>

                                    <div class="tp-caption tp-resizeme rs-parallaxlevel-0" data-x="left" data-hoffset="80" data-y="top" data-voffset="100" data-whitespace="normal" data-transform_idle="o:1;" data-transform_in="o:0" data-transform_out="o:0" data-start="0" style="font-size:60px;line-height:66px;color:#fff">
                                    <img class=" gallery_on_pc" src="{{ asset('assets/content/savanna/logo_banner_new.png') }}" width="400px" style="margin-top:100px;">
                                    <img class=" gallery_on_mobile" src="{{ asset('assets/content/savanna/logo_banner_new.png') }}" width="500px" style="margin-top:100px;">
                                    </div>

                                    


                                    <!-- LAYER NR. 1 -->
                                    <!-- <div class="tp-caption tp-resizeme rs-parallaxlevel-0" data-x="left" data-hoffset="80" data-y="top" data-voffset="450" data-whitespace="normal" data-transform_idle="o:1;" data-transform_in="o:0" data-transform_out="o:0" data-start="500" style="font-size:60px;line-height:66px;color:#fff">
                                    </div>-->
                                    </li>
                                    <!-- SLIDE -->
                                    <!--<li data-transition="fade">-->

                                        <!-- MAIN IMAGE -->
                                        <!--<img src="{{ asset('assets/content/savanna/new_slide_banner1.png') }}" width="1920" height="980">-->

                                        <!-- LAYER NR. 1 -->
                                        <!--<div class="tp-caption tp-resizeme rs-parallaxlevel-0" data-x="center" data-hoffset="0" data-y="top" data-voffset="120" data-whitespace="normal" data-transform_idle="o:1;" data-transform_in="o:0" data-transform_out="o:0" data-start="500" style="font-size:60px;line-height:66px; color:#fff">
                                        
                                        </div>


                                    </li>-->

                                    <!-- SLIDE -->
                                    <!--<li data-transition="fade">-->

                                        <!-- MAIN IMAGE -->
                                        <!--<img src="{{ asset('assets/content/savanna/new_slide_banner2.png') }}" width="1920" height="980">-->

                                        <!-- LAYER NR. 1 -->
                                       <!-- <div class="tp-caption tp-resizeme rs-parallaxlevel-0" data-x="left" data-hoffset="80" data-y="top" data-voffset="450" data-whitespace="normal" data-transform_idle="o:1;" data-transform_in="o:0" data-transform_out="o:0" data-start="500" style="font-size:60px;line-height:66px;color:#fff">
                                        </div>-->
                                    <!--</li>-->

                                    <!-- SLIDE -->
                                    

                                </ul>
                        </div>
                            <!-- END REVOLUTION SLIDER -->

                        <div class="section mcb-section largest_satelite_city_pc" style="padding-top:15vh; padding-bottom:300px;background-color:hsl(0, 0%, 0%, 0); background-image:url({{asset('assets/content/savanna/largest_satelite_city_background2.png')}}); background-size: cover; background-repeat:no-repeat; background-position:center top;">
                            <div class="section_wrapper mcb-section-inner cstm-section">
                                <div class="wrap mcb-wrap one valign-middle clearfix" style="margin-top:0">
                                    <div class="mcb-wrap-inner">
                                        <div class="column mcb-column one-second column_placeholder">
                                            <div class="placeholder" style="padding-top:0px;padding-left:100px;">
                                            <a href="{{asset('assets/content/savanna/Savanna_Video_1.mp4')}}" class="video-popup"><img class="scale-with-grid" src="{{asset('assets/content/savanna/watch_full_video.png')}}" width="60%"></a>
                                            
                                            <h5 style="color:#ffffff;font-weight:300;">SAVANNA SUMATERA</h5>
                                            <hr style="border:1px solid #fff;" width="70%"/>
                                                <h3 style="color:#ffffff;">{{ __('home.largest') }}
												</h3>
                                            <h4 style="color:#F2B580;">{{ __('home.north') }}</h4>
                                            <p style="color:#ffffff;">{{ __('home.largest_desc2') }}</p>
                                            <a href="{{ route('concept', app()->getLocale()) }}"><button class="home_custom">{{ __('home.home_button1') }} <i class="icon-right-thin"></i></button></a>
                                               
                                        </div>
                                        </div>
                                        <div class="column mcb-column one-second column_image">
                                        
                                            <div class="animate" data-anim-type="fadeInUp">
                                                <div class="image_frame image_item no_link scale-with-grid no_border">
                                                    <div class="image_wrapper">
                                                    	<img class="scale-with-grid" src="{{asset('assets/content/savanna/largest_satelite_city.png')}}" width="75%" style="margin-left:0px;">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- mobile banner on hide temporarily-->
                        <!--<div class="section mcb-section largest_satelite_city_mobile" style="text-align:center;padding-top:300px; padding-bottom:250px; background-color:hsl(0, 0%, 0%, 0); background-image:url({{asset('assets/content/savanna/main_banner_mobile2.jpeg')}}); background-size: cover; background-repeat:no-repeat; background-position:center top;">-->
                        <div class="section mcb-section largest_satelite_city_mobile" style="text-align:center;padding-top:30px; padding-bottom:30px; background-color:hsl(0, 0%, 0%, 0);">
                            <div class="section_wrapper mcb-section-inner">
                                <div class="wrap mcb-wrap one valign-middle clearfix">
                                    <div class="mcb-wrap-inner">
                                        <div class="column mcb-column one column_placeholder">
                                            <div class="placeholder">
                                                <!--<img class="scale-with-grid" src="{{asset('assets/content/savanna/main_banner_mobile_text.png')}}" width="100%" style="margin-top:-280px;">-->
                                                
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            <!--<div class="video-background">
                            <video autoplay muted loop playsinline class="video-content">
                                <source src="{{ asset('assets/content/savanna/savanna_videobanner_2.mp4') }}" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                            
                            </div>-->

                            <div class="section_wrapper mcb-section-inner">
                                <div class="wrap mcb-wrap one valign-middle clearfix" style="margin-top:50px;padding-top:250px;">
                                    <div class="mcb-wrap-inner">
                                        <div class="column mcb-column one-second column_placeholder">
                                            <div class="placeholder" style="padding-top:0px;">
                                            <a href="{{asset('assets/content/savanna/Savanna_Video_1.mp4')}}" class="video-popup"><img class="scale-with-grid" src="{{asset('assets/content/savanna/watch_full_video.png')}}" width="80%"></a>
                                            
                                            <h5 style="color:#ffffff;font-weight:300;">SAVANNA SUMATERA</h5>
                                            <hr style="border:1px solid #fff;" width="70%"/>
                                                <h3 style="color:#ffffff;font-weight:400;">{{ __('home.largest') }}
												</h3>
                                            <h4 style="color:#F2B580;">{{ __('home.north') }}</h4>
                                            <p style="color:#ffffff;">{{ __('home.largest_desc2') }}</p>
                                            <a href="{{ route('concept', app()->getLocale()) }}"><button class="home_custom">{{ __('home.home_button1') }} <i class="icon-right-thin"></i></button></a>
                                               
                                        </div>
                                        </div>
                                        <div class="column mcb-column one-second column_image">
                                        
                                            <div class="animate" data-anim-type="fadeInUp">
                                                <div class="image_frame image_item no_link scale-with-grid no_border">
                                                    <div class="image_wrapper">
                                                    	<img class="scale-with-grid" src="{{asset('assets/content/savanna/largest_satelite_city.png')}}">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="section best_residence_choice_pc" style="text-align:center;background-color:hsl(0, 0%, 0%, 0); background-size: cover; background-repeat:no-repeat; ">
                            <div class="section_wrapper clearfix cstm-section">
                                <div class="items_group clearfix">
                                    <!-- One full width row-->
                                    <div class="column one column_column">
                                        <div class="column_attr">
                                            <img class="scale-with-grid" src="{{asset('assets/content/savanna/best_residence_choice_new.png')}}" width="70%" style="margin-left:0%;">
                                        </div>
                                    </div>
                                    <div class="column one column_column best_residence_choice_pc_title">
                                        <div class="column_attr">
                                            <h5 style="color:#6C919C;">{{ __('home.why_us_1') }}</h5>
                                            <h3 class="title_mobile" style="color:#6C919C;">Savanna Sumatera</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="section best_residence_choice" style="background-color:hsl(0, 0%, 0%, 0); background-size: cover; background-repeat:no-repeat; ">
                            <div class="section_wrapper clearfix">
                                <div class="items_group clearfix">
                                    <!-- One full width row-->
                                    <div class="column one column_column">
                                        <div class="column_attr">
                                            <h3 class="title_mobile" style="text-align:center;color:#6C919C;">Savanna Sumatera</h3>
                                            <p style="text-align:center;color:#6C919C;">{{ __('home.why_us_1') }}</p>
                                        </div>
                                    </div>
                                    <!-- One Fourth (1/4) Column -->
                                    <div class="column one-fifth column_how_it_works">
                                        <div class="how_it_works has_border">
                                            <div class="image"><img src="{{asset('assets/content/savanna/icon-complete.png')}}" class="scale-with-grid"/>
                                            </div>
                                            <h5>{{ __('home.why_us_2') }}</h5>
                                        </div>
                                    </div>
                                    <!-- One Fourth (1/4) Column -->
                                    <div class="column one-fifth column_how_it_works">
                                        <div class="how_it_works has_border">
                                            <div class="image"><img src="{{asset('assets/content/savanna/icon-easy.png')}}" class="scale-with-grid">
                                            </div>
                                            <h5>{{ __('home.why_us_3') }}</h5>
                                        </div>
                                    </div>
                                    <!-- One Fourth (1/4) Column -->
                                    <div class="column one-fifth column_how_it_works">
                                        <div class="how_it_works has_border">
                                            <div class="image"><img src="{{asset('assets/content/savanna/icon-green.png')}}" class="scale-with-grid">
                                            </div>
                                            <h5>{{ __('home.why_us_4') }}</h5>
                                        </div>
                                    </div>
                                    <!-- One Fourth (1/4) Column -->
                                    <div class="column one-fifth column_how_it_works">
                                        <div class="how_it_works has_border">
                                            <div class="image"><img src="{{asset('assets/content/savanna/icon-sound.png')}}" class="scale-with-grid">
                                            </div>
                                            <h5>{{ __('home.why_us_5') }}</h5>
                                        </div>
                                    </div>
                                    <!-- One Fourth (1/4) Column -->
                                    <div class="column one-fifth column_how_it_works">
                                        <div class="how_it_works no_border">
                                            <div class="image"><img src="{{asset('assets/content/savanna/icon-trusted.png')}}" class="scale-with-grid">
                                            </div>
                                            <h5>{{ __('home.why_us_6') }}</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="section best_residence_choice_img" style="background-color:hsl(0, 0%, 0%, 0); background-image:url({{asset('assets/content/savanna/residence_choice_mobile.png')}}); background-repeat:no-repeat; background-position:right top;">
                            <div class="section_wrapper clearfix">
                                <div class="items_group clearfix">
                                    <!-- One full width row-->
                                    <div class="column one column_column">
                                        <div class="column_attr">
                                            &nbsp;
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="section great_names_behind_pc" style="background-color:hsl(0, 0%, 0%, 0); background-image:url({{asset('assets/content/savanna/largest_satelite_city_background2.png')}}); background-size: cover; background-repeat:no-repeat; background-position:center top;">
                            <div class="section_wrapper mcb-section-inner cstm-section">
                                <div class="wrap mcb-wrap one valign-bottom clearfix" style="margin-top:0">
                                    <div class="mcb-wrap-inner">
                                        <div class="column mcb-column one-third column_image">
                                            <div class="placeholder" style="padding-top:20px;padding-bottom:20px;">
                                                <h2 style="color:#ffffff;font-weight:500;text-align:right;padding-right:0px;">{{ __('home.great_name_1') }}</h2>
                                                <h4 style="color:#ffffff;font-weight:300;text-align:right;padding-right:0px;">SAVANNA SUMATERA
												</h4>
                                                <div class="animate" data-anim-type="fadeInUp" style="text-align:right;">
                                                    <img class="scale-with-grid gallery_on_pc" src="{{asset('assets/content/savanna/andaz_bali_thumbnail.png')}}" width="80%" style="padding-bottom:25px;"> 
                                                    <img class="scale-with-grid gallery_on_mobile" src="{{asset('assets/content/savanna/home_andazbali_mobile.png')}}" width="95%" style="padding-bottom:20px;">
                                                    
                                                    <a href="https://puribotanical.com/" target="_blank"><img class="scale-with-grid gallery_on_pc" src="{{asset('assets/content/savanna/setiabudi_skygarden_thumbnail.png')}}" width="80%"></a>
                                                    <img class="scale-with-grid gallery_on_mobile" src="{{asset('assets/content/savanna/home_setiabudiskygarden_mobile.png')}}" width="95%">   
                                                </div>
                                            </div>
                                        </div>
                                        <div class="column mcb-column one-third column_image great_names_img2">
                                        
                                            <div class="animate" data-anim-type="fadeInDown">
                                                <div class="image_frame image_item no_link scale-with-grid no_border">
                                                    <div class="image_wrapper">
                                                    	<img class="scale-with-grid gallery_on_pc" src="{{asset('assets/content/savanna/one_satrio_new_pc2.png')}}" width="87%">
                                                        <img class="scale-with-grid gallery_on_mobile" src="{{asset('assets/content/savanna/one_satrio_new_mobile2.png')}}" width="100%">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="column mcb-column one-third column_placeholder great_names_img3">
                                            <div class="placeholder">
                                                <h5 style="color:#F2B580;font-weight:300;">{{ __('home.great_name_2') }}</h5>
                                                <h3 style="color:#ffffff;">PT Jakarta Setiabudi Internasional Tbk. (JSI)
												</h3>
                                                <p style="color:#ffffff;text-align:left;">{{ __('home.great_name_32') }}</p>
                                                <a href="{{ route('concept', app()->getLocale()) }}"><button class="home_custom">{{ __('home.home_button4') }} <i class="icon-right-thin"></i></button></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="section great_names_behind_mobile" style="text-align:center;margin-top:-300px; padding-top:200px; padding-bottom:30px; background-color:hsl(0, 0%, 0%, 0); background-image:url({{asset('assets/content/savanna/great_names_behind_mobile_bg.png')}}); background-size: cover; background-repeat:no-repeat; background-position:0% 20%;">
                            <div class="section_wrapper mcb-section-inner">
                                <div class="wrap mcb-wrap one valign-bottom clearfix" style="margin-top:0">
                                    <div class="mcb-wrap-inner">
                                        <div class="column mcb-column one-third column_image">
                                            <div class="placeholder" style="padding-top:20px;padding-bottom:20px;">
                                                <h2 style="color:#ffffff;font-weight:400;">{{ __('home.great_name_1') }}</h2>
                                                <h4 style="color:#ffffff;font-weight:300;">SAVANNA SUMATERA
												</h4>
                                                <div class="animate" data-anim-type="fadeInUp">
                                                    <img class="scale-with-grid gallery_on_pc" src="{{asset('assets/content/savanna/andaz_bali_pc.png')}}" width="95%" style="padding-bottom:20px;"> 
                                                    <img class="scale-with-grid gallery_on_mobile" src="{{asset('assets/content/savanna/home_andazbali_mobile.png')}}" width="100%" style="padding-bottom:20px;">
                                                    
                                                    <a href="https://puribotanical.com/" target="_blank"><img class="scale-with-grid gallery_on_pc" src="{{asset('assets/content/savanna/puri_botanical_pc.png')}}" width="95%"></a>
                                                    <img class="scale-with-grid gallery_on_mobile" src="{{asset('assets/content/savanna/home_setiabudiskygarden_mobile.png')}}" width="100%">   
                                                </div>
                                            </div>
                                        </div>
                                        <div class="column mcb-column one-third column_image">
                                        
                                            <div class="animate" data-anim-type="fadeInUp">
                                                <div class="image_frame image_item no_link scale-with-grid no_border">
                                                    <div class="image_wrapper">
                                                    	<img class="scale-with-grid gallery_on_pc" src="{{asset('assets/content/savanna/one_satrio_new_pc2.png')}}" width="100%" style="padding-top:40px;">
                                                        <img class="scale-with-grid gallery_on_mobile" src="{{asset('assets/content/savanna/one_satrio_new_mobile2.png')}}" width="100%">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="column mcb-column one-third column_placeholder">
                                            <div class="placeholder" style="padding-top:30%;">
                                                <h5 style="color:#F2B580;font-weight:300;">{{ __('home.great_name_2') }}</h5>
                                                <h3 style="color:#ffffff;">Jakarta Setiabudi Internasional (JSI)
												</h3>
                                                
                                                <p style="color:#ffffff;">{{ __('home.great_name_32') }}</p>
                                                <a href="{{ route('concept', app()->getLocale()) }}"><button class="home_custom">{{ __('home.home_button4') }} <i class="icon-right-thin"></i></button></a>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="section masterplan_pengembangan_kawasan_pc" style="margin-top:-430px;background-color:hsl(0, 0%, 0%, 0); background-image:url({{asset('assets/content/savanna/map-bg-cloud-home.png')}}); background-size: cover; background-repeat:no-repeat; background-position:center top;">
                            <div class="section_wrapper clearfix cstm-section">
                                <div class="items_group clearfix">
                                    <!-- One full width row-->
                                    <div class="column one column_column">
                                        <div class="column_attr">
                                            <h2 style="text-align:center;color:#6C8B96;">{{ __('home.masterplan_2') }}<br/>
                                            {{ __('home.masterplan_3') }}</h2>
                                        </div>
                                    </div>
                                    <div class="column one column_column" style="padding-top:0; padding-bottom:0px;">
                                        <div class="column_attr">
                                        <img class="scale-with-grid gallery_on_pc" src="{{asset('assets/content/savanna/MAP-PUBLIC-FACILITY-home.png')}}" width="80%" style="margin-left:10%">
                                        </div>
                                    </div>
                                    <div class="column one column_column" style="margin-top:-200px; padding-top:0;padding-bottom:0px;">
                                        <div class="column_attr">
                                            <h4 style="text-align:right;color:#6C8B96;">{{ __('home.masterplan_4') }}</h4>
                                            <h3 style="text-align:right;color:#6C8B96;font-weight:500;">SAVANNA SUMATERA</h3>
                                            <h5 style="text-align:right;color:#6C8B96;font-weight:400;">Masterplan Concept by AEDAS Singapore</h5>
                                            <p style="text-align:right;color:#6C8B96; padding-left:35%;">{{ __('home.masterplan_52') }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="section masterplan_pengembangan_kawasan_mobile" style="margin-top:-50px; padding-top:150px; padding-bottom:100px; background-color:hsl(0, 0%, 0%, 0); background-image:url({{asset('assets/content/savanna/cloud_new_home.png')}}); background-size: cover; background-repeat:no-repeat; background-position:center top;">
                            <div class="section_wrapper clearfix">
                                <div class="items_group clearfix">
                                    <div class="column one column_column">
                                        <div class="column_attr">
                                            <h3 style="text-align:center;color:#6C8B96;">{{ __('home.masterplan_2') }}
                                            {{ __('home.masterplan_3') }}</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="section masterplan_pengembangan_kawasan_tablet" style="margin-top:-160px; padding-top:230px; padding-bottom:250px; background-color:hsl(0, 0%, 0%, 0); background-image:url({{asset('assets/content/savanna/map-bg-cloud-home.png')}}); background-size: cover; background-repeat:no-repeat; background-position:center top;">
                            <div class="section_wrapper clearfix">
                                <div class="items_group clearfix">
                                    <!-- One full width row-->
                                    
                                    <div class="column one column_column">
                                        <div class="column_attr">
                                            
                                            <h3 style="text-align:center;color:#6C8B96;font-size:24px;line-height:26px;font-weight:500;">{{ __('home.masterplan_2') }}<br/>
                                            {{ __('home.masterplan_3') }}</h3>
                                        </div>
                                    </div>
                                    <div class="column one column_column" style="padding-top:0; padding-bottom:0px;">
                                        <div class="column_attr">
                                        <img class="scale-with-grid gallery_on_pc" src="{{asset('assets/content/savanna/MAP-PUBLIC-FACILITY-home.png')}}" width="100%">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="section masterplan_pengembangan_kawasan_mobile2" style="background-color:#ffffff; background-image:url({{asset('assets/content/savanna/MAP-PUBLIC-FACILITY-home.png')}}); background-size: contain; background-repeat:no-repeat; background-position:center center;">
                            <div class="section_wrapper clearfix">
                                <div class="items_group clearfix">
                                    <!-- One full width row-->
                                    <div class="column one column_column">
                                       
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="section masterplan_pengembangan_kawasan_mobile3" style="text-align:center;background-color:#ffffff; background-size: cover; background-repeat:no-repeat; background-position:center center">
                            <div class="section_wrapper clearfix">
                                <div class="items_group clearfix">
                                    <!-- One full width row-->
                                    <div class="column one column_column" style="padding-top:0; padding-bottom:0px;">
                                        <div class="column_attr">
                                            <h3 style="color:#6C8B96;font-weight:500;">SAVANNA SUMATERA</h3>
                                            <h4 style="color:#6C8B96;font-weight:400;">{{ __('home.masterplan_4') }}</h4>
                                            <p style="color:#6C8B96;">{{ __('home.masterplan_52') }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--<div class="section masterplan_list" style="background-color:hsl(0, 0%, 0%, 0); background-image:url({{asset('assets/content/savanna/largest_satelite_city_background2.png')}}); background-size: cover; background-repeat:no-repeat; background-position:center top;">
                            <div class="section_wrapper clearfix">
                                <div class="items_group clearfix">
                                    <div class="mcb-wrap one-third column_placeholder masterplan_list_2">
                                        <div class="placeholder placeholder_masterplan">
                                                <ol class="masterplan" type="1" start="1">
                                                    <li>{{ __('home.masterplan_list_1') }}</li>
                                                    <li>{{ __('home.masterplan_list_2') }}</li>
                                                    <li>{{ __('home.masterplan_list_3') }}</li>
                                                    <li>{{ __('home.masterplan_list_4') }}</li>
                                                    <li>{{ __('home.masterplan_list_5') }}</li>
                                                </ol>    
                                            
                                        </div>
                                    </div>
                                    <div class="mcb-wrap one-third column_placeholder" style="margin:0;padding:3% 5% 3% 5%; background-color:#0a3b47">
                                        <div class="placeholder placeholder_masterplan">
                                            
                                                <ol class="masterplan" type="1" start="6">
                                                    <li>{{ __('home.masterplan_list_6') }}</li>
                                                    <li>{{ __('home.masterplan_list_7') }}</li>
                                                    <li>{{ __('home.masterplan_list_8') }}</li>
                                                    <li>{{ __('home.masterplan_list_9') }}</li>
                                                    <li>{{ __('home.masterplan_list_10') }}</li>
                                                </ol>    
                                            
                                        </div>
                                    </div>
                                    <div class="mcb-wrap one-third column_placeholder masterplan_list_3">
                                            <div class="placeholder placeholder_masterplan">
                                                <ol class="masterplan" type="1" start="11">
                                                    <li>{{ __('home.masterplan_list_11') }}</li>
                                                    <li>{{ __('home.masterplan_list_12') }}</li>
                                                    <li>{{ __('home.masterplan_list_13') }}</li>
                                                    <li>{{ __('home.masterplan_list_14') }}</li>
                                                </ol>    
                                                <br/>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>-->

                        <div class="section ananta_cluster_title_mobile" style="background-color:#ffffff;background-size:cover; background-repeat:no-repeat; background-position:center top;">
                            <div class="section_wrapper clearfix">
                                <div class="items_group clearfix">
                                    <div class="column mcb-column one-second column_placeholder">
                                        <div class="column_attr">
                                            <h5 style="color:#6C919C;font-weight:300;">{{ __('home.ananta_1') }}</h5>
                                            <h3 style="color:#6C919C;font-weight:500;">{{ __('home.ananta_2') }}
										    </h3>
                                            <h5 style="color:#6C919C;font-weight:300;">{{ __('home.ananta_3') }}</h5>
                                            <p style="color:#6C919C;font-weight:300;">{{ __('home.ananta_4') }}</p>
                                        </div>
                                    </div>    
                                </div>
                            </div>
                        </div>
                        

                        <div class="section ananta_cluster_mobile" style="background-color:hsl(0, 0%, 0%, 0); background-image:url({{asset('assets/content/savanna/cluster_gallery_mobile.png')}}); background-repeat:no-repeat; background-position:center top;">
                            <div class="section_wrapper clearfix">
                                <div class="items_group clearfix">
                                    <div class="column mcb-column one column_placeholder">
                                        &nbsp;
                                    </div>    
                                    
                                </div>
                            </div>
                        </div>
                        <div class="section ananta_cluster_title_pc" style="background-color:hsl(0, 0%, 0%, 0); background-image:url({{asset('assets/content/savanna/ananta-cluster.png')}}); background-repeat:no-repeat; background-position:center top;">
                            <div class="section_wrapper clearfix cstm-section">
                                <div class="items_group clearfix">
                                    <div class="column mcb-column two-third column_placeholder">
                                        <div class="column_attr">
                                            <h5 style="color:#6C919C;">{{ __('home.ananta_1') }}</h5>
                                            <h3 style="color:#6C919C;">{{ __('home.ananta_2') }}
										    </h3>
                                            <h5 style="color:#6C919C;">{{ __('home.ananta_3') }}</h5>
                                            <p style="color:#6C919C;">{{ __('home.ananta_4') }}</p>
                                        </div>
                                    </div>    
                                    
                                </div>
                            </div>
                        </div>

                        <div class="section mcb-section ananta_cluster_gallery" style="background-color:hsl(0, 0%, 0%, 0);background-size: cover; background-repeat:no-repeat; background-position:center top;">
                            <div class="section_wrapper mcb-section-inner cstm-section">
                                <div class="wrap mcb-wrap one valign-middle clearfix" style="margin-top:0px">
                                    <div class="mcb-wrap-inner">
                                        <div class="column mcb-column three-fifth column_image">
                                            <div class="animate" data-anim-type="fadeInDown">
                                                <img class="scale-with-grid gallery_on_pc1" src="{{asset('assets/content/savanna/ananta_cluster1.png')}}" width="87%" style="padding-top:0px;padding-left:60px;">
                                                <img class="scale-with-grid gallery_on_tab" src="{{asset('assets/content/savanna/ananta_cluster1.png')}}" width="83%" style="padding-top:0px;padding-left:80px;">
                                                <img class="scale-with-grid gallery_on_mobile" src="{{asset('assets/content/savanna/home_ananta_cluster_gallery_mobile1.png')}}" width="100%">
                                            </div>
                                        </div>
                                        <div class="column mcb-column two-fifth column_image">
                                        
                                            <div class="animate" data-anim-type="fadeInUp">
                                                <div class="image_frame image_item no_link scale-with-grid no_border">
                                                    <div class="image_wrapper ananta_cluster_left" style="padding-top:11%;">
                                                    	<img class="scale-with-grid gallery_on_pc1" src="{{asset('assets/content/savanna/ananta_cluster2.png')}}" width="75%" style="padding-bottom:22px;">
                                                        <img class="scale-with-grid gallery_on_tab" src="{{asset('assets/content/savanna/ananta_cluster2.png')}}" width="75%" style="padding-bottom:25px;">
                                                        <img class="scale-with-grid gallery_on_mobile" src="{{asset('assets/content/savanna/home_ananta_cluster_gallery_mobile3.png')}}" width="100%" style="padding-bottom:30px;">
                                                        <img class="scale-with-grid gallery_on_pc1" src="{{asset('assets/content/savanna/ananta_cluster3.png')}}" width="75%" style="margin-left:0px;">
                                                        <img class="scale-with-grid gallery_on_tab" src="{{asset('assets/content/savanna/ananta_cluster3.png')}}" width="75%">
                                                        <img class="scale-with-grid gallery_on_mobile" src="{{asset('assets/content/savanna/home_ananta_cluster_gallery_mobile2.png')}}" width="100%">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="column one column_column">
                                            <div class="column_attr" style="text-align:center;padding:30px 0 30px 0;">
                                            <a href="{{ route('residence', app()->getLocale()) }}"><button class="home_custom">{{ __('home.home_button2') }} <i class="icon-right-thin"></i></button></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="section mcb-section peta_lokasi" style="background-color:hsl(0, 0%, 0%, 0); background-size: cover; background-repeat:no-repeat; background-position:center top;">
                            <div class="section_wrapper mcb-section-inner cstm-section">
                                <div class="wrap mcb-wrap one valign-middle clearfix">
                                    <div class="mcb-wrap-inner">
                                        <div class="column mcb-column one-second column_placeholder">
                                            <div class="placeholder" style="padding-top:0px;">
                                                <h3 style="color:#ffffff;">{{ __('home.location_1') }}</h3>
                                                <p style="color:#F2B580;">{{ __('home.location_2') }}</p>
                                                    <div class="column mcb-column one-second column_placeholder">
                                                        <div class="placeholder" style="padding-right:30px;">
                                                            <img class="scale-with-grid" src="{{asset('assets/content/savanna/icon_komersial.png')}}" width="20px"><span class="list_lokasi" style="color:#6B919A"> {{ __('home.map_heading1') }} </span>
                                                            <ol class="list_lokasi" style="margin-top:0px;margin-left:10%;">
                                                                <li>{{ __('home.zoo1') }}</li>
                                                                <li>Pasar Induk Lau Cih</li>
                                                                <li>Focal Point Medan</li>
                                                                <li>Mall Ringroad City Walks</li>
                                                                <li>Mall Manhattan</li>
                                                                <li>Transmart Carrefour</li>
                                                            </ol> <br/>
                                                            <img class="scale-with-grid" src="{{asset('assets/content/savanna/icon_hospitality.png')}}" width="20px"><span class="list_lokasi" style="color:#D88F59"> {{ __('home.map_heading2') }}</span>
                                                            <ol class="list_lokasi" style="margin-top:0px;margin-left:10%;" type="1" start="7">
                                                                <li>Central Park Zoo & Resort</li>
                                                                <li>Bukit Barisan Country Club</li>
                                                                <li>Royal Sumatera Golf Course</li>
                                                            </ol><br/>
                                                            <img class="scale-with-grid" src="{{asset('assets/content/savanna/icon_fasilitas_umum.png')}}" width="20px"><span class="list_lokasi" style="color:#B7AF98"> {{ __('home.map_heading3') }}</span>
                                                            <ol class="list_lokasi" style="margin-top:0px;margin-left:10%;" type="1" start="10">
                                                                <li>SPBU Pancur Batu</li>
                                                                <li>Masjid Jami Al-Mu&apos;minun</li>
                                                                <li>GBI Rumah Persembahan</li>
                                                            </ol> <br/>
                                                        </div>
                                                    </div>
                                                    <div class="column mcb-column one-second column_placeholder">
                                                        <div class="placeholder" style="padding-top:0px;">
                                                    
                                                            <img class="scale-with-grid" src="{{asset('assets/content/savanna/icon_edukasi.png')}}" width="20px"><span class="list_lokasi" style="color:#F4E621"> {{ __('home.map_heading4') }}</span>
                                                            <ol class="list_lokasi" style="margin-top:0px;margin-left:10%;" type="1" start="13">
                                                                <li>Universitas Sumatera Utara</li>
                                                            </ol> <br/>
                                                            <img class="scale-with-grid" src="{{asset('assets/content/savanna/icon_kesehatan.png')}}" width="20px"><span class="list_lokasi" style="color:#A5BA7D"> {{ __('home.map_heading5') }}</span>
                                                            <ol class="list_lokasi" style="margin-top:0px;margin-left:10%;" type="1" start="14">
                                                                <li>RSUP H. Adam Malik</li>
                                                            </ol> <br/>
                                                            <img class="scale-with-grid" src="{{asset('assets/content/savanna/icon_tol.png')}}" width="20px"><span class="list_lokasi" style="color:#D88F59"> {{ __('home.map_heading6') }}</span>
                                                            <ol class="list_lokasi" style="margin-top:0px;margin-left:10%;" type="1" start="1">
                                                                <li>Jl. Tol Medan - Binjai</li>
                                                                <li>Jl. Tol Belmera</li>
                                                                <li>Inner Ringroad (Gagak Hitam)</li>
                                                                <li>Inner Ringroad (Lintas Sumatera)</li>
                                                            </ol> <br/>
                                                            <img class="scale-with-grid" src="{{asset('assets/content/savanna/icon_jalan_utama.png')}}" width="40px"><span class="list_lokasi" style="margin-left:20px;">{{ __('home.map_point1') }}</span><br/>
                                                            <img class="scale-with-grid" src="{{asset('assets/content/savanna/icon_jalur_ka.png')}}" width="40px"><span class="list_lokasi" style="margin-left:20px;">{{ __('home.map_point2') }}</span><br/>
                                                            <img class="scale-with-grid" src="{{asset('assets/content/savanna/icon_jalan_tol.png')}}" width="40px"><span class="list_lokasi" style="margin-left:20px;">{{ __('home.map_point3') }}</span><br/>
                                                            <img class="scale-with-grid" src="{{asset('assets/content/savanna/icon_outer_ringroad.png')}}" width="40px"><span class="list_lokasi" style="margin-left:20px;">{{ __('home.map_point4') }}</span>
                                                        </div>
                                                    </div>
                                                    <div class="column mcb-column one column_placeholder button_gmaps_pc">
                                                        <div class="placeholder" style="padding-top:0px;">
                                                        <a class="button_custom" href="https://goo.gl/maps/DwxJ9HAmEQmyi8bJ6" target="_blank">{{ __('home.home_button3') }}</a>
                                                        </div>
                                                    </div>
                                            </div>
                                        </div>
                                        <div class="column mcb-column one-second column_image">
                                        
                                            <div class="animate" data-anim-type="fadeInUp">
                                                <div class="image_frame image_item no_link scale-with-grid no_border">
                                                    <div class="image_wrapper">
                                                    <a href="{{asset('assets/content/savanna/map.png')}}" class="image-popup"><img class="scale-with-grid gallery_on_pc" src="{{asset('assets/content/savanna/map.png')}}" width="80%" style="padding-top:60px;"></a>
                                                    <a href="{{asset('assets/content/savanna/map.png')}}" class="image-popup"><img class="scale-with-grid gallery_on_mobile" src="{{asset('assets/content/savanna/map.png')}}" width="100%" style="padding-top:20px;"></a>
                                                    </div>
                                                    <div class="column mcb-column one column_placeholder button_gmaps_mobile">
                                                        <div class="placeholder" style="padding-top:0px;text-align:center;">
                                                            <a class="button_custom" href="https://goo.gl/maps/DwxJ9HAmEQmyi8bJ6" target="_blank">{{ __('home.home_button3') }}</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- <div class="section mcb-section contact_us_home2" style="background-color:hsl(0, 0%, 0%, 0); background-image:url({{asset('assets/content/savanna/contact_bg_new4.png')}}); background-size: cover; background-repeat:no-repeat; ">
                            <div class="section_wrapper mcb-section-inner">
                                <div class="wrap mcb-wrap one valign-middle clearfix" style="margin-top:0">
                                    <div class="mcb-wrap-inner">
                                        <div class="column mcb-column one column_placeholder" style="text-align:center;">
                                            <div class="column_attr">
                                                <h3 style="color:#ffffff;font-weight:300;">{{ __('home.contact_1') }}<br/>{{ __('home.contact_7') }}</h3>
                                                <h5 style="color:#F2B580;font-weight:300;">{{ __('home.contact_2') }}
                                                </h5>
                                            </div>
                                        </div>
                                        <div class="column mcb-column one column_contact_space_mobile" style="padding-top:300px;">
                                            <div class="column_attr">
                                                &nbsp;
                                            </div>
                                        </div>
                                        <div class="column mcb-column one-third column_placeholder contact_us_home" style="background-color:#0C404C;border:1px;border-color:#0C404C;border-radius:20px;">
                                            <div class="placeholder">
                                                <div id="contactWrapper">-->
                                                        <!--<form id="contactform" method="POST" action="{{ url('/contact') }}">-->
                                                    <!--<form class="contactform" method="POST" action="{{ route('contact.send') }}">
                                                        @csrf-->
                                                        <!-- One Second (1/2) Column -->
                                                       <!-- <div class="column one">
                                                            <label class="kontak">{{ __('home.contact_3') }}</label><input type="text" name="name" id="name" size="40" aria-required="true" aria-invalid="false" />
                                                        </div>-->
                                                        <!-- One Second (1/2) Column -->
                                                        <!--<div class="column one">
                                                        <label class="kontak">Email</label><input type="email" name="email" id="email" size="40" aria-required="true" aria-invalid="false" />
                                                        </div>
                                                        <div class="column one">
                                                        <label class="kontak">{{ __('home.contact_4') }}</label><input type="number" name="phone" id="phone" size="40" aria-invalid="false" />
                                                        </div>
                                                        <div class="column one">
                                                        <label class="kontak">{{ __('home.contact_5') }}</label><textarea name="body" id="body" style="width:100%;" rows="10" aria-invalid="false"></textarea>
                                                        </div>
                                                        <div class="column one">
                                                            <input type="hidden" name="recaptcha_token" class="recaptcha_token">
                                                            <input type="submit" value="Submit" id="submit" onClick="return check_values();">
                                                        </div>
                                                    </form>
                                                    @if (Session::has('success'))
                                                        <div class="alert alert-success">
                                                            {{ Session::get('success') }}
                                                        </div>
                                                        @endif

                                                        @if (Session::has('error'))
                                                        <div class="alert alert-danger">
                                                            {{ Session::get('error') }}
                                                        </div>
                                                        @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="column mcb-column two-third column_image">
                                            &nbsp;
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div> -->
                    
                        <!--<div class="section mcb-section contact_us_mobile2" style="margin-top:50px;padding-bottom:250px;background-color:hsl(0, 0%, 0%, 0); background-image:url({{asset('assets/content/savanna/contact_bg_new_home.jpeg')}}); background-size: cover; background-repeat:no-repeat; background-position:right center;">
                            <div class="section_wrapper mcb-section-inner">
                                <div class="wrap mcb-wrap one valign-middle clearfix" style="margin-top:-50px;">
                                    <div class="mcb-wrap-inner">
                                        <div class="column mcb-column one column_placeholder" style="text-align:center;">
                                            <div class="column_attr">
                                                <h3 class="title_mobile" style="color:#ffffff;font-weight:300;">{{ __('home.contact_1') }}<br/>{{ __('home.contact_7') }}</h3>
                                                <h5 style="color:#F2B580;font-weight:300;font-size:16px;">{{ __('home.contact_2') }}
                                                </h5>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>-->
                        <!--<div class="section mcb-section contact_us_mobile3" style="margin-top:-80px;margin-left:-40px;padding-top:70px;padding-bottom:30px;background-color:hsl(0, 0%, 0%, 0);background-image:url({{asset('assets/content/savanna/contact_bg_mobile1.png')}});background-size: contain; background-repeat:no-repeat;background-position:0 0;">
                            <div class="section_wrapper mcb-section-inner">
                                <div class="wrap mcb-wrap one valign-middle clearfix" style="margin-top:0">
                                    <div class="mcb-wrap-inner">
                                        <div class="column one column_column contact_us_home" style="background-color:#0C404C;border:1px;border-color:#0C404C;border-radius:20px;">
                                            <div class="placeholder">
                                                <div id="contactWrapper">-->
                                                        <!--<form id="contactform" method="POST" action="{{ url('/contact') }}">-->
                                                    <!--<form class="contactform" method="POST" action="{{ route('contact.send') }}">
                                                        @csrf-->
                                                        <!-- One Second (1/2) Column -->
                                                        <!--<div class="column one">
                                                            <label class="kontak">{{ __('home.contact_3') }}</label><input type="text" name="name" id="name" size="40" aria-required="true" aria-invalid="false" />
                                                        </div>-->
                                                        <!-- One Second (1/2) Column -->
                                                        <!--<div class="column one">
                                                        <label class="kontak">Email</label><input type="email" name="email" id="email" size="40" aria-required="true" aria-invalid="false" />
                                                        </div>
                                                        <div class="column one">
                                                        <label class="kontak">{{ __('home.contact_4') }}</label><input type="number" name="phone" id="phone" size="40" aria-invalid="false" />
                                                        </div>
                                                        <div class="column one">
                                                        <label class="kontak">{{ __('home.contact_5') }}</label><textarea name="body" id="body" style="width:100%;" rows="10" aria-invalid="false"></textarea>
                                                        </div>
                                                        <div class="column one">
                                                            <input type="hidden" name="recaptcha_token" class="recaptcha_token">
                                                            <input type="submit" value="Submit" id="submit" onClick="return check_values();">
                                                        </div>
                                                    </form>
                                                    @if (Session::has('success'))
                                                        <div class="alert alert-success">
                                                            {{ Session::get('success') }}
                                                        </div>
                                                        @endif

                                                        @if (Session::has('error'))
                                                        <div class="alert alert-danger">
                                                            {{ Session::get('error') }}
                                                        </div>
                                                        @endif
                                                </div>
                                            </div>
                                        </div>
                                        
                                        
                                    </div>
                                </div>
                            </div>
                        </div>-->

                    </div>
                </div>
            </div>
</div>

@endsection

@section('script')

<!-- JS -->
<script src="{{asset('assets/js/jquery-3.6.0.min.js')}}"></script>
	<script src="{{asset('assets/js/jquery-migrate-3.4.0.min.js')}}"></script>

    <script src="{{asset('assets/js/mfn.menu.js')}}"></script>
    <script src="{{asset('assets/js/jquery.plugins.js')}}"></script>
    <script src="{{asset('assets/js/jquery.jplayer.min.js')}}"></script>
    <script src="{{asset('assets/js/animations/animations.js')}}"></script>
    <script src="{{asset('assets/js/translate3d.js')}}"></script>
    <script src="{{asset('assets/js/scripts.js')}}"></script>
<script type="text/javascript">
  
  $(document).ready(function(){
    $('#languageDropdown').click(function(){
        $('.dropdown-menu').toggle();
    });
});
  
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js" integrity="sha512-IsNh5E3eYy3tr/JiX2Yx4vsCujtkhwl7SLqgnwLNgf04Hrt9BT9SXlLlZlWx+OK4ndzAoALhsMNcCmkggjZB1w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.js" integrity="sha512-C1zvdb9R55RAkl6xCLTPt+Wmcz6s+ccOvcr6G57lbm8M2fbgn2SUjUJbQ13fEyjuLViwe97uJvwa1EUf4F1Akw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
$(document).ready(function() {
  $('.image-popup').magnificPopup({
    type: 'image',
    closeOnContentClick: true,
    closeBtnInside: false,
    fixedContentPos: true,
    mainClass: 'mfp-no-margins mfp-with-zoom',
    image: {
      verticalFit: true
    },
    zoom: {
      enabled: true,
      duration: 300 // duration of the effect, in milliseconds
    }
  });
});
</script>
<script>
    /*$('.contactform').submit(function(event) {
        event.preventDefault();
        var formData = $(this).serialize();
        $.ajax({
            url: $(this).attr('action'),
            type: 'POST',
            data: formData,
            success: function(response) {
                $('.contactform')[0].reset(); // reset the form
                $('.alert').remove(); // remove any existing alert messages
                var alertMessage = '<div class="alert alert-success">'+ response.success +'</div>';
                $('.contactform').append(alertMessage); // display success message
            },
            error: function(xhr, status, error) {
                $('.alert').remove(); // remove any existing alert messages
                var alertMessage = '<div class="alert alert-danger">'+ xhr.responseJSON.errors.body[0] +'</div>';
                $('.contactform').append(alertMessage); // display error message
            }
        });
    });*/
    $('.contactform').submit(function(event) {
  event.preventDefault();
  var formData = $(this).serialize();
  var formElement = $(this); // Store the form element reference

  $.ajax({
    url: formElement.attr('action'),
    type: 'POST',
    data: formData,
    success: function(response) {
      formElement.find('.alert').remove(); // remove any existing alert messages
      var alertMessage = '<div class="alert alert-success">' + response.success + '</div>';
      formElement.append(alertMessage); // display success message
      formElement[0].reset(); // reset the form after success
    },
    error: function(xhr, status, error) {
      formElement.find('.alert').remove(); // remove any existing alert messages
      var errors = xhr.responseJSON.errors;
      $.each(errors, function(field, fieldErrors) {
        var inputElement = formElement.find('input[name="' + field + '"]');
        var textareaElement = formElement.find('textarea[name="' + field + '"]');
        if (inputElement.length > 0) {
          inputElement.addClass('error');
          var fieldContainer = inputElement.closest('.column');
        }
        if (textareaElement.length > 0) {
          textareaElement.addClass('error');
          var fieldContainer = textareaElement.closest('.column');
        }
        $.each(fieldErrors, function(index, message) {
          var errorMessage = '<div class="alert alert-danger">' + message + '</div>';
          fieldContainer.append(errorMessage); // display error message below the field
        });
      });
    }
  });
});

// Remove error class on input change
$('.contactform input, .contactform textarea').on('input change', function() {
  $(this).removeClass('error');
  $(this).closest('.column').find('.alert-danger').remove(); // remove error messages for the field
});

</script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var video = document.getElementById('backgroundVideo');

        // Set the starting time (4 seconds in this case)
        video.currentTime = 4;
    });
</script>
<script src="https://www.google.com/recaptcha/api.js?render=6LdcnjAmAAAAAD82Wz25liM3xvfPXnczs9oWhkdY"></script>
<script>
    grecaptcha.ready(function() {
        grecaptcha.execute('6LdcnjAmAAAAAD82Wz25liM3xvfPXnczs9oWhkdY', { action: 'contact' }).then(function(token) {
            /*document.getElementById('recaptcha_token').value = token;*/
            document
      .querySelectorAll(".recaptcha_token")
      .forEach(elem => (elem.value = token))
    ;
        });
    });
</script>
<script>
$(document).ready(function() {
  $('.video-popup').magnificPopup({
    type: 'iframe',
    iframe: {
      patterns: {
        localVideo: {
          index: 'assets/content/savanna/Savanna_Video_1.mp4',
          src: 'assets/content/savanna/Savanna_Video_1.mp4'
        }
      }
    },
    callbacks: {
      elementParse: function(item) {
        if (item.el.hasClass('video-popup')) {
          item.type = 'iframe';
          item.iframe = {
            markup: '<div class="mfp-iframe-scaler">' +
              '<div class="mfp-close"></div>' +
              '<iframe class="mfp-iframe" frameborder="0" allowfullscreen></iframe>' +
              '</div>',
            srcAction: 'iframe_src',
          };
        }
      }
    }
  });
});
</script>
    <script src="{{asset('plugins/rs-plugin/js/jquery.themepunch.tools.min.js')}}"></script>
    <script src="{{asset('plugins/rs-plugin/js/jquery.themepunch.revolution.min.js')}}"></script>
    <script src="{{asset('plugins/rs-plugin/js/extensions/revolution.extension.video.min.js')}}"></script>
    <script src="{{asset('plugins/rs-plugin/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
    <script src="{{asset('plugins/rs-plugin/js/extensions/revolution.extension.actions.min.js')}}"></script>
    <script src="{{asset('plugins/rs-plugin/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
    <script src="{{asset('plugins/rs-plugin/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
    <script src="{{asset('plugins/rs-plugin/js/extensions/revolution.extension.navigation.min.js')}}"></script>
    <script src="{{asset('plugins/rs-plugin/js/extensions/revolution.extension.migration.min.js')}}"></script>
    <script src="{{asset('plugins/rs-plugin/js/extensions/revolution.extension.parallax.min.js')}}"></script>
    <script src="{{asset('plugins/rs-plugin/js/extensions/revolution.extension.carousel.min.js')}}"></script>

    <script>
         var revapi;
        jQuery(document).ready(function() {
            revapi = jQuery("#rev_slider").revolution({
                sliderType:"standard",
                sliderLayout:"auto",
                delay: 22000,
                navigation: {
                    arrows: {
                        enable: true
                    }
                },
                gridwidth: 1230,
                gridheight: 720
            });
            
            var ulElement = document.querySelector("ul.tp-revslider-mainul");
            var liElements = ulElement.querySelectorAll("li.tp-revslider-slidesli");
            var numberOfSlides = liElements.length;
            
            if (numberOfSlides > 1) {
                console.log("There are more than one slide:", numberOfSlides);
                jQuery('.tparrows').show();
            } else {
                console.log("There is only one slide:", numberOfSlides);
                jQuery('.tparrows').hide();
            }
        });
    </script>
    
    <script>
        $(document).ready(function() {
            // Function to check if the browser supports the media attribute
            function supportsMediaAttribute() {
                var video = document.createElement('video');
                return typeof video.media != 'undefined';
            }
        
            function setVideoSource() {
                var screenWidth = $(window).width();
                var video = $('#backgroundVideo');
        
                if (screenWidth >= 1920) {
                    video.attr('src', '{{ asset("assets/content/savanna/vidbanner_landscape_savanna_1920x1080px.mp4") }}');
                } else if (screenWidth >= 1600) {
                    video.attr('src', '{{ asset("assets/content/savanna/vidbanner_landscape_savanna_1600x900px.mp4") }}');
                } else if (screenWidth >= 1366) {
                    video.attr('src', '{{ asset("assets/content/savanna/vidbanner_landscape_savanna_1366x768px.mp4") }}');
                } else if (screenWidth >= 1280) {
                    video.attr('src', '{{ asset("assets/content/savanna/vidbanner_landscape_savanna_1280x720px.mp4") }}');
                } else {
                    video.attr('src', '{{ asset("assets/content/savanna/vidbanner_portrait_savanna_mobile_video.mp4") }}');
                }
                
                video.get(0).load();
            }
        
            if (!supportsMediaAttribute()) {
                // If the browser doesn't support the media attribute, use jQuery to set the video source based on screen size
                setVideoSource();
        
                // Detect screen changes on resize and orientation change
                $(window).on('resize orientationchange', function() {
                    setVideoSource();
                });
            }
        });
    </script>
    
    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.min.js"></script>
    
    <script>
    $(document).ready(function () {
        // Function to check if the current device is a mobile device
        function isMobileDevice() {
            return (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent));
        }

        // Check if the device is not a mobile device before running the script
        if (!isMobileDevice()) {
            var sections = $('.cstm-section');
            var currentIndex = 0;
            var scrollAllowed = true;

            // Function to scroll to the next section
            function scrollToNextSection() {
                if (scrollAllowed && currentIndex < sections.length - 1) {
                    scrollAllowed = false;
                    currentIndex++;
                    console.log('Scrolling to section ' + (currentIndex + 1));
                    $('html, body').animate({
                        scrollTop: sections.eq(currentIndex).offset().top
                    }, 1000, function () {
                        scrollAllowed = true;
                        console.log('Scroll animation completed');
                    });
                }
            }

            // Function to scroll to the previous section
            function scrollToPrevSection() {
                if (scrollAllowed && currentIndex > 0) {
                    scrollAllowed = false;
                    currentIndex--;
                    console.log('Scrolling to section ' + (currentIndex + 1));
                    $('html, body').animate({
                        scrollTop: sections.eq(currentIndex).offset().top
                    }, 1000, function () {
                        scrollAllowed = true;
                        console.log('Scroll animation completed');
                    });
                }
            }

            // Listen for scroll events on desktop
            $(document).on('mousewheel DOMMouseScroll', function (event) {
                if (scrollAllowed) {
                    if (event.originalEvent.wheelDelta > 0 || event.originalEvent.detail < 0) {
                        // Scrolling up
                        scrollToPrevSection();
                    } else {
                        // Scrolling down
                        scrollToNextSection();
                    }
                }
            });

            // Listen for touch events on mobile
            var startY = 0;
            $(document).on('touchstart', function (e) {
                startY = e.originalEvent.touches[0].pageY;
            });

            $(document).on('touchmove', function (e) {
                if (scrollAllowed) {
                    var endY = e.originalEvent.touches[0].pageY;
                    if (startY - endY > 50) {
                        // Scrolling up (increase 50 as needed for sensitivity)
                        scrollToNextSection();
                        console.log('Scrolling up on touch');
                    } else if (endY - startY > 50) {
                        // Scrolling down (increase 50 as needed for sensitivity)
                        scrollToPrevSection();
                        console.log('Scrolling down on touch');
                    }
                }
            });
        }
    });
</script>
    
@endsection