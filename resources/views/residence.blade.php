@extends('layouts.app')

@section('section')

<div id="Content" style="background-color:#ffffff">
            <div class="content_wrapper clearfix">
                <div class="sections_group">
                    <div class="entry-content">
                        <div class="section mcb-section category_main_banner" style="background-color:hsl(0, 0%, 0%, 0); background-image:url({{asset('assets/content/savanna/category_main_banner.jpeg')}}); background-size: cover; background-repeat:no-repeat;">
                            <div class="section_wrapper mcb-section-inner">
                                <div class="wrap mcb-wrap one valign-top clearfix">
                                    <div class="mcb-wrap-inner">
                                        <div class="column mcb-column one column_placeholder category_main_banner2">
                                            <div class="placeholder">
                                                <h5 class="category_title">{{ __('category.title1') }}</h5>
                                                <h3>{{ __('category.title2') }}</h3>
                                                <h5 class="category_title">{{ __('category.title3') }}</h5>
                                            </div>
                                        </div>
                                        <div class="column mcb-column one column_placeholder category_main_banner3">
                                            <div class="placeholder">
                                                <h5>{{ __('category.title4') }}</h5>
                                                <!--<div class="category_title2"><h5>PT. Jakarta Setiabudi<br/> Internasional Tbk. (JSI)</h5></div>-->
                                                <img class="scale-with-grid" src="{{asset('assets/content/savanna/jsi_logo.PNG')}}" style="width:250px;">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="section mcb-section category_create_memories" style="background-color:hsl(0, 0%, 0%, 0); background-image:url({{asset('assets/content/savanna/about_largest_satellite_city.png')}}); background-size: contain; background-repeat:no-repeat;">
                            <div class="section_wrapper mcb-section-inner">
                                <div class="wrap mcb-wrap one clearfix" style="margin-top:0">
                                    <div class="mcb-wrap-inner">
                                        <div class="column mcb-column one column_placeholder category_main_banner4">
                                            <div class="animate" data-anim-type="fadeInDown">
                                                <h5>{{ __('category.title4') }}</h5>
                                                <!--<div class="category_title2"><h5>PT. Jakarta Setiabudi<br/> Internasional Tbk. (JSI)</h5></div>-->
                                                <img class="scale-with-grid" src="{{asset('assets/content/savanna/jsi_logo.PNG')}}" style="width:300px;">
                                            </div>
                                        </div>
                                        <div class="column mcb-column two-fifth column_placeholder">
                                            <div class="animate" data-anim-type="fadeInDown" style="padding-top:20px;">
                                            <h3>{{ __('category.memories1') }}</h3>
                                                <h5>{{ __('category.memories2') }}
												</h5>
                                            <p>{{ __('category.memories3') }}</p>
                                            <img class="scale-with-grid gallery_on_pc" src="{{asset('assets/content/savanna/category_creatememories.png')}}" width="100%">
                                            <img class="scale-with-grid gallery_on_mobile" src="{{asset('assets/content/savanna/category_creatememories1_mobile.png')}}" style="padding-bottom:20px;">
                                        </div>
                                        </div>
                                        <div class="column mcb-column three-fifth column_image">
                                        
                                            <div class="animate" data-anim-type="fadeInUp">
                                                <div class="image_frame image_item no_link scale-with-grid no_border">
                                                    <div class="image_wrapper">
                                                    	<img class="scale-with-grid gallery_on_pc" src="{{asset('assets/content/savanna/category_creatememories2.png')}}" style="padding-bottom:30px;" width="85%">
                                                        <img class="scale-with-grid gallery_on_pc" src="{{asset('assets/content/savanna/category_creatememories3.png')}}" width="79%">
                                                        <img class="scale-with-grid gallery_on_mobile" src="{{asset('assets/content/savanna/category_creatememories2_mobile.png')}}" style="padding-bottom:20px;">
                                                        <img class="scale-with-grid gallery_on_mobile" src="{{asset('assets/content/savanna/category_creatememories3_mobile.png')}}">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="section category_ananta_img" style="background-color:hsl(0, 0%, 0%, 0);background-image:url({{asset('assets/content/savanna/category_ananta_img2.png')}}); background-size: cover; background-repeat:no-repeat;">
                            <div class="section_wrapper mcb-section-inner">
                                <div class="wrap mcb-wrap one valign-bottom clearfix" style="margin-top:0">
                                    <div class="mcb-wrap-inner">
                                        <div class="column mcb-column one column_image">
                                            <div class="placeholder" style="padding-top:20px;padding-bottom:20px;">
                                                <div class="animate" data-anim-type="fadeInUp">
                                                <h3>{{ __('category.moment1') }}
												</h3>
                                                <h5>{{ __('category.moment2') }}</h5>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="section category_unittype" style="text-align:center;background-color:hsl(0, 0%, 0%, 0);background-image:url({{asset('assets/content/savanna/category_unittype_bg.png')}}); background-size: cover; background-repeat:no-repeat;background-position:center top"">
                            <div class="section_wrapper mcb-section-inner">
                                <div class="wrap mcb-wrap one valign-bottom clearfix" style="margin-top:0">
                                    <div class="mcb-wrap-inner">
                                        <div class="column mcb-column one column_image">
                                            <div class="placeholder">
                                                <h3>
                                                    {{ __('category.type') }}
                                                </h3>
                                            </div>
                                        </div>
                                        <div class="column mcb-column one column_image">
                                            <div class="placeholder">
                                                <div class="placeholder">
                                                    <img class="scale-with-grid" src="{{asset('assets/content/savanna/category_unittype.png')}}" width="80%" style="padding-bottom:30px;">
                                                    <p>&nbsp;</p>
                                                    <a class="button_custom" href="https://api.whatsapp.com/send?phone=628116260588&text=Halo%20saya%20ingin%20bertanya%20mengenai%20Cluster%20Ananta%20di%20Savanna%20Sumatera." target="_blank">{{ __('category.type_button') }} <img class="scale-with-grid" src="{{asset('assets/content/savanna/wa_icon.png')}}" width="20px"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="section category_unittype_mobile" style="text-align:center;background-color:hsl(0, 0%, 0%, 0);background-image:url({{asset('assets/content/savanna/category_unittype_bg.png')}}); background-size: cover; background-repeat:repeat-y;background-position:center top">
                            <div class="section_wrapper mcb-section-inner">
                                <div class="wrap mcb-wrap one valign-bottom clearfix" style="margin-top:0">
                                    <div class="mcb-wrap-inner">
                                        <div class="column mcb-column one column_image">
                                            <div class="placeholder">
                                                <h3 class="unit_title">{{ __('category.type') }}
                                                </h3>
                                            </div>
                                        </div>
                                        <div class="column mcb-column one column_image" style="background-color:#09313A;box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.1);padding:0 10px 0 10px;margin:3% 0 3% -4%;">
                                            <div class="placeholder">
                                                    <h5>{{ __('category.type2') }}
                                                    </h5>
                                                    <h3>AGATHA</h3>
                                                    <img class="scale-with-grid" src="{{asset('assets/content/savanna/agatha1.png')}}" width="100%" style="padding-bottom:10px;">
                                                    <img class="scale-with-grid" src="{{asset('assets/content/savanna/agatha2.png')}}" width="100%" style="padding-bottom:10px;">
                                                    <img class="scale-with-grid" src="{{asset('assets/content/savanna/agatha3.png')}}" width="100%" style="padding-bottom:10px;">
                                            </div>
                                        </div>
                                        <div class="column mcb-column one column_image" style="background-color:#09313A;box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.1);padding:0 10px 0 10px;margin:3% 0 3% -4%;">
                                            <div class="placeholder">
                                                    <h5>{{ __('category.type2') }}
                                                    </h5>
                                                    <h3>DAMARA</h3>
                                                    <img class="scale-with-grid" src="{{asset('assets/content/savanna/damara1.png')}}" width="100%" style="padding-bottom:10px;">
                                                    <img class="scale-with-grid" src="{{asset('assets/content/savanna/damara2.png')}}" width="100%" style="padding-bottom:10px;">
                                                    <img class="scale-with-grid" src="{{asset('assets/content/savanna/damara3.png')}}" width="100%" style="padding-bottom:10px;">
                                            </div>
                                        </div>
                                        <div class="column mcb-column one column_image" style="background-color:#09313A;box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.1);padding:0 10px 0 10px;margin:3% 0 3% -4%;">
                                            <div class="placeholder">
                                                    <h5>{{ __('category.type2') }}
                                                    </h5>
                                                    <h3>CASSIA</h3>
                                                    <img class="scale-with-grid" src="{{asset('assets/content/savanna/cassia1.png')}}" width="100%" style="padding-bottom:10px;">
                                                    <img class="scale-with-grid" src="{{asset('assets/content/savanna/cassia2.png')}}" width="100%" style="padding-bottom:10px;">
                                                    <img class="scale-with-grid" src="{{asset('assets/content/savanna/cassia3.png')}}" width="100%" style="padding-bottom:10px;">
                                            </div>
                                        </div>
                                        <p>&nbsp;</p>
                                        <a class="button_custom" href="https://api.whatsapp.com/send?phone=628116260588&text=Halo%20saya%20ingin%20bertanya%20mengenai%20Cluster%20Ananta%20di%20Savanna%20Sumatera." target="_blank">{{ __('category.type_button') }} <img src="{{asset('assets/content/savanna/wa_icon.png')}}" width="20px"></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--<div class="section category_facilities" style="background-color:hsl(0, 0%, 0%, 0); background-image:url({{asset('assets/content/savanna/category_facilities.png')}}); background-repeat:no-repeat;background-size: cover;">
                            <div class="section_wrapper clearfix">
                                <div class="items_group clearfix">-->
                                    <!-- One full width row-->
                                    <!--<div class="column one column_column">
                                        <div class="column_attr">
                                            <h3 style="text-align:center;">{{ __('category.facilities1') }}</h3>
                                            <h5 style="text-align:center;">{{ __('category.facilities2') }}</h5>
                                        </div>
                                    </div>
                                    <div class="column one column_tabs">
                                        <div class="jq-tabs tabs_wrapper tabs_horizontal">
                                            <div class="tab-titles">
                                                <button class="tab-title title-tab1 active" data-tab="#tab1">{{ __('category.facilities_tab_title1') }}</button>
                                                <button class="tab-title title-tab2" data-tab="#tab2">{{ __('category.facilities_tab_title2') }}</button>
                                                <button class="tab-title title-tab3" data-tab="#tab3">{{ __('category.facilities_tab_title3') }}</button>
                                                <button class="tab-title title-tab4" data-tab="#tab4">{{ __('category.facilities_tab_title4') }}</button>
                                                <button class="tab-title title-tab5" data-tab="#tab5">{{ __('category.facilities_tab_title5') }}</button>
                                            </div>
                                            <div id="tab1" class="tab-content active">
                                                <div class="content-container">
                                                    <div class="column two">
                                                        <div class="column-inner">
                                                            <div class="content-left">
                                                                <img class="scale-with-grid" src="{{asset('assets/content/savanna/category_tab_commercial.png')}}">
                                                            </div>
                                                            <div class="content-right">
                                                                <h3>
                                                                {{ __('category.facilities_tab_title1') }}
                                                                </h3>
                                                                <p style="padding-bottom:30px;">{{ __('category.facilities_tab_content1') }}</p>
                                                                <button class="home_custom next-button">NEXT FACILITIES <i class="icon-right-thin"></i></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="tab2" class="tab-content">
                                                <div class="content-container">
                                                    <div class="column two">
                                                        <div class="column-inner">
                                                            <div class="content-left">
                                                                <img class="scale-with-grid" src="{{asset('assets/content/savanna/category_facilities_tab.png')}}">
                                                            </div>
                                                            <div class="content-right">
                                                                <h3>
                                                                {{ __('category.facilities_tab_title2') }}
                                                                </h3>
                                                                <p style="padding-bottom:30px;">{{ __('category.facilities_tab_content2') }}</p>
                                                                <button class="home_custom next-button">NEXT FACILITIES <i class="icon-right-thin"></i></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="tab3" class="tab-content">
                                                <div class="content-container">
                                                    <div class="column two">
                                                        <div class="column-inner">
                                                            <div class="content-left">
                                                                <img class="scale-with-grid" src="{{asset('assets/content/savanna/category_tab_healthcare.png')}}">
                                                            </div>
                                                            <div class="content-right">
                                                                <h3>
                                                                {{ __('category.facilities_tab_title3') }}
                                                                </h3>
                                                                <p style="padding-bottom:30px;">{{ __('category.facilities_tab_content3') }}</p>
                                                                <button class="home_custom next-button">NEXT FACILITIES <i class="icon-right-thin"></i></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="tab4" class="tab-content">
                                                <div class="content-container">
                                                    <div class="column two">
                                                        <div class="column-inner">
                                                            <div class="content-left">
                                                                <img class="scale-with-grid" src="{{asset('assets/content/savanna/category_tab_entertainment.png')}}">
                                                            </div>
                                                            <div class="content-right">
                                                                <h3>
                                                                {{ __('category.facilities_tab_title4') }}
                                                                </h3>
                                                                <p style="padding-bottom:30px;">{{ __('category.facilities_tab_content4') }}</p>
                                                                <button class="home_custom next-button">NEXT FACILITIES <i class="icon-right-thin"></i></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="tab5" class="tab-content">
                                                <div class="content-container">
                                                    <div class="column two">
                                                        <div class="column-inner">
                                                            <div class="content-left">
                                                                <img class="scale-with-grid" src="{{asset('assets/content/savanna/category_tab_nature.png')}}">
                                                            </div>
                                                            <div class="content-right">
                                                                <h3>
                                                                {{ __('category.facilities_tab_title5') }}
                                                                </h3>
                                                                <p>{{ __('category.facilities_tab_content5') }}</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>-->


                        <!-- <div class="section mcb-section about_contact_us" style="background-color:hsl(0, 0%, 0%, 0); background-image:url({{asset('assets/content/savanna/about_contact.png')}}); background-size: cover; background-repeat:no-repeat; ">
                            <div class="section_wrapper mcb-section-inner">
                                <div class="wrap mcb-wrap one valign-middle clearfix" style="margin-top:30px;">
                                    <div class="mcb-wrap-inner">
                                        <div class="column mcb-column one column_placeholder">
                                            <div class="column_attr">
                                                <h3 style="color:#6C8E99;font-weight:300;">{{ __('home.contact_1') }} <br/> {{ __('home.contact_7') }}</h3>
                                                <h5 style="color:#6C8E99;font-weight:300;">{{ __('home.contact_2') }}
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
                                        <div class="column mcb-column two-third column_image">
                                            &nbsp;
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div> -->
                    
                        <!-- <div class="section mcb-section about_contact_us_mobile2" style="margin-top:-150px;padding-bottom:350px;background-color:hsl(0, 0%, 0%, 0); background-image:url({{asset('assets/content/savanna/about_contact.png')}}); background-size: cover; background-repeat:no-repeat; background-position:left center;">
                            <div class="section_wrapper mcb-section-inner">
                                <div class="wrap mcb-wrap one valign-middle clearfix" style="margin-top:0">
                                    <div class="mcb-wrap-inner">
                                        <div class="column mcb-column one column_placeholder" style="text-align:center;">
                                            <div class="column_attr">
                                                <h3 class="title_mobile" style="color:#6C8E99;font-weight:300;">{{ __('home.contact_1') }}<br/>{{ __('home.contact_7') }}</h3>
                                                <h5 style="color:#6C8E99;font-weight:300;font-size:16px;">{{ __('home.contact_2') }}
                                                </h5>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <!-- <div class="section mcb-section about_contact_us_mobile3" style="margin-top:-50px;margin-left:-40px;padding-top:30px;padding-bottom:30px;background-color:hsl(0, 0%, 0%, 0); background-image:url({{asset('assets/content/savanna/about_largest_satellite_city.png')}});background-size: contain; background-repeat:no-repeat;background-position:center top;">
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
                        </div> -->

                    </div>
                </div>
            </div>
</div>

@endsection

@section('script')

<!-- JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script src="{{asset('assets/js/jquery-migrate-3.4.0.min.js')}}"></script>

    <script src="{{asset('assets/js/mfn.menu.js')}}"></script>
    <script src="{{asset('assets/js/jquery.plugins.js')}}"></script>
    <script src="{{asset('assets/js/jquery.jplayer.min.js')}}"></script>
    <script src="{{asset('assets/js/animations/animations.js')}}"></script>
    <script src="{{asset('assets/js/translate3d.js')}}"></script>
    <script src="{{asset('assets/js/scripts.js')}}"></script>

    <script type="text/javascript">
  
  $(document).ready(function(){
  $('.dropdown-toggle').click(function(){
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
    $('.contactform').submit(function(event) {
  event.preventDefault();
  var formData = $(this).serialize();
  var formElement = $(this); // Store the form element reference

  $.ajax({
    url: formElement.attr('action'),
    type: 'POST',
    data: formData,
    success: function(response) {
      formElement[0].reset(); // reset the form
      $('.alert').remove(); // remove any existing alert messages
      var alertMessage = '<div class="alert alert-success">' + response.success + '</div>';
      formElement.append(alertMessage); // display success message
    },
    error: function(xhr, status, error) {
      $('.alert').remove(); // remove any existing alert messages
      var errors = xhr.responseJSON.errors;
      var errorMessage = '<div class="alert alert-danger">';
      $.each(errors, function(field, fieldErrors) {
        $.each(fieldErrors, function(index, message) {
          errorMessage += message + '<br>';
        });
      });
      errorMessage += '</div>';
      formElement.append(errorMessage); // display error message
    }
  });
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


@endsection