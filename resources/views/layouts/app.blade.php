<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie10 lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie10 lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie10 lt-ie9"> <![endif]-->
<!--[if IE 9]><html class="no-js lt-ie10"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>

    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <title>Savanna Sumatera</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Favicons -->
    <link rel="shortcut icon" href="{{asset('assets/content/savanna/favicon.png')}}">

    <!-- FONTS -->
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto:100,300,400,400italic,700'>
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Patua+One:100,300,400,400italic,700'>
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Lato:400,400italic,700,700italic,900'>
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Libre+Baskerville:100,300,400,400italic,500,700,700italic'>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Satisfy&display=swap">

    <!-- CSS -->
    <link rel='stylesheet' href="{{asset('assets/css/global.css')}}">
    <link rel='stylesheet' href="{{asset('assets/content/agency2/css/structure.css')}}">
    <link rel='stylesheet' href="{{asset('assets/content/agency2/css/agency2.css')}}">
    <link rel='stylesheet' href="{{asset('assets/content/agency2/css/custom.css')}}">
    <link rel='stylesheet' href="{{asset('assets/content/agency2/css/customize.css?rand='. mt_rand(0, 10000) )}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css" integrity="sha512-WEQNv9d3+sqyHjrqUZobDhFARZDko2wpWdfcpv44lsypsSuMO0kHGd3MQ8rrsBn/Qa39VojphdU6CMkpJUmDVw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" integrity="sha512-+EoPw+Fiwh6eSeRK7zwIKG2MA8i3rV/DGa3tdttQGgWyatG/SkncT53KHQaS5Jh9MNOT3dmFL0FjTY08And/Cw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://www.google.com/recaptcha/api.js"></script>
    <!-- Revolution Slider -->
    <link rel="stylesheet" type="text/css" href="{{asset('plugins/rs-plugin/css/settings.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('plugins/rs-plugin/css/layers.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('plugins/rs-plugin/css/navigation.css')}}">

</head>
<!-- nice-scroll-on -->
<!--<body class="home button-flat layout-full-width if-zoom if-border-hide no-content-padding no-shadows header-transparent header-fw minimalist-header-no sticky-header sticky-tb-color ab-hide subheader-both-center menu-link-color menuo-no-borders menuo-right footer-copy-center mobile-tb-center mobile-side-slide mobile-mini-mr-ll be-1787">-->
<body class="style-simple layout-full-width one-page mobile-tb-left button-flat no-content-padding header-transparent minimalist-header-no sticky-header sticky-tb-color ab-hide subheader-title-left menuo-no-borders menuo-right logo-valign-top logo-no-margin logo-overflow logo-no-sticky-padding footer-copy-center">
    <div id="Wrapper">
        <div id="Header_wrapper" data-id="#Header_wrapper">
            <header id="Header">
                <div class="header_placeholder" style="height: 0px;"></div>
                <div id="Top_bar" style="top: 0px;vertical-align:top;">
                    <div class="container">
                        <div class="column one">
                            <div class="top_bar_left clearfix" style="width: 990px;">
                                <div class="logo">
                                    <a id="logo" href="{{ route('home', app()->getLocale()) }}" title="Savanna Sumatera"><img class="logo-main scale-with-grid" src="{{asset('assets/content/savanna/new_logo.png')}}" style="max-height:150px;"/><img class="logo-sticky scale-with-grid" src="{{asset('assets/content/savanna/new_logo.png')}}" style="width:50px;"/><img class="logo-mobile scale-with-grid" src="{{asset('assets/content/savanna/mobile_logo.png')}}" style="max-height:80px;" />
                                    </a>
                                </div>
                                <div class="menu_wrapper">
                                    <nav id="menu" class="menu-main-menu-container">
                                        <ul id="menu-main-menu" class="menu">
                                            <li class="current-menu-item">
                                            <a href="{{ route('home', app()->getLocale()) }}"><span>HOME</span></a>
                                            </li>
                                            <li>
                                            <a href="{{ route('concept', app()->getLocale()) }}"><span>CONCEPT</span></a>
                                            </li>
                                            <li>
                                                <a href="{{ route('residence', app()->getLocale()) }}"><span>RESIDENCE</span></a>
                                            </li>
                                            <!--<li>
                                                <a href="http://savannasumatera360.refineri.id" target="_blank"><span>360&deg;</span></a>
                                            </li>-->
                                            <li>
                                                <a href="{{ route('developer', app()->getLocale()) }}"><span>DEVELOPER</span></a>
                                            </li>
                                            <!--<li>
                                                <a href="{{ route('calculator', app()->getLocale()) }}"><span>KPR SIMULATOR</span></a>
                                            </li>-->
                                            <li>
                                            <a href="{{ route('news', app()->getLocale()) }}"><span>NEWS</span></a>
                                            </li>
                                            
                                        
                                            <!--<li><select class="form-control changeLang">
                                                <option value="en" {{ session()->get('locale') == 'en' ? 'selected' : '' }}><img class="scale-with-grid" src="{{asset('assets/content/savanna/united-states.png')}}" width="20px">English</option>
                                                <option value="id" {{ session()->get('locale') == 'id' ? 'selected' : '' }}><img class="scale-with-grid" src="{{asset('assets/content/savanna/indonesia.png')}}" width="20px">Indonesia</option>
                                            </select>
                                            </li>-->
                                            
                                        </ul>
                                        <div class="dropdown_mobile" style="margin-left:5%;">
                                            <a href="{{ route('contact-us', app()->getLocale()) }}"><button class="menu_header">VISIT  US</button></a><br/>
                                            <a href="https://api.whatsapp.com/send?phone=628116260588&text=Halo%20saya%20ingin%20bertanya%20mengenai%20Cluster%20Ananta%20di%20Savanna%20Sumatera." target="_blank">
                                            <button class="menu_header">ENQUIRY NOW <img class="scale-with-grid" src="{{asset('assets/content/savanna/wa_icon.png')}}" width="15px"></button>
                                            </a><br/>
                                            <button class="btn btn-secondary dropdown-toggle btnlanguage" type="button" id="languageDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="margin-left:-5%;">
                                                <!--<img src="{{ asset('assets/content/savanna/'.app()->getLocale().'.png') }}" alt="{{ config('app.locales')[app()->getLocale()] }} flag" width="20" height="20">-->
                                                <span style="vertical-align: middle;">{{ config('app.locales')[app()->getLocale()] }}</span>
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="languageDropdown" style="margin-left: 3%;margin-top:-5%;">
                                                @foreach(config('app.locales') as $localeCode => $localeName)
                                                    <a class="dropdown-item {{ app()->getLocale() === $localeCode ? 'active' : '' }}" href="{{ route('changeLocale', $localeCode) }}">
                                                        <!--<img src="{{ asset('assets/content/savanna/'.$localeCode.'.png') }}" alt="{{ $localeName }} flag" width="20" height="20">-->
                                                        <span style="vertical-align: middle;">{{ $localeName }}</span>
                                                    </a><br/>
                                                @endforeach
                                        </div>
                                        
                                    </div>
                                        <!--<div class="wpml-languages enabled">
                                                    <a class="active tooltip" href="{{ session()->get('locale') == 'en' ? 'selected' : '' }}" data-tooltip="No translations available for this page"><img src="{{asset('assets/content/savanna/united-states.png')}}" width="20px"/><i class="icon-down-open-mini"></i>
                                                    </a>
                                                    <ul class="wpml-lang-dropdown">
                                                        <li>
                                                            <a href="{{ session()->get('locale') == 'id' ? 'selected' : '' }}"><img src="{{asset('assets/content/savanna/indonesia.png')}}" width="25px" />
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>-->
                                    </nav>
                                    
                                    <a class="responsive-menu-toggle" href="#"><i class="icon-menu-fine"></i></a>
                                </div>
                            </div>
                            <div class="top_bar_right top_bar_pc">
                                <div class="top_bar_right_wrapper">
                                        <!--<div class="dropdown">
                                            <button class="menu_header">CONTACT  US</button>
                                            <button class="btn btn-secondary dropdown-toggle btnlanguage" type="button" id="languageDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                {{ config('app.locales')[app()->getLocale()] }}
                                                <img src="{{ asset('assets/content/savanna/'.app()->getLocale().'.png') }}" alt="{{ config('app.locales')[app()->getLocale()] }} flag" width="20" height="20">
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="languageDropdown" style="margin-left:55%">
                                                @foreach(config('app.locales') as $localeCode => $localeName)
                                                    <a class="dropdown-item {{ app()->getLocale() === $localeCode ? 'active' : '' }}" href="{{ route('changeLocale', $localeCode) }}">
                                                        <img src="{{ asset('assets/content/savanna/'.$localeCode.'.png') }}" alt="{{ $localeName }} flag" width="20" height="20">
                                                        {{ $localeName }}
                                                    </a><br/>
                                                @endforeach
                                            </div>
                                        </div>-->
                                        <div class="dropdown">
                                            <a href="{{ route('contact-us', app()->getLocale()) }}"><button class="menu_header">VISIT US</button></a>
                                            <a href="https://api.whatsapp.com/send?phone=628116260588&text=Halo%20saya%20ingin%20bertanya%20mengenai%20Cluster%20Ananta%20di%20Savanna%20Sumatera." target="_blank">
                                                <button class="menu_header">ENQUIRY NOW <img class="scale-with-grid" src="{{asset('assets/content/savanna/wa_icon.png')}}" width="15px"></button>
                                            </a>
                                            <button class="btn btn-secondary dropdown-toggle btnlanguage" type="button" id="languageDropdown" data-toggle="dropdown-menu" aria-haspopup="true" aria-expanded="false">
                                                <span style="vertical-align: middle;">{{ config('app.locales')[app()->getLocale()] }}</span>
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="languageDropdown" style="margin-left: 78%;">
                                                @foreach(config('app.locales') as $localeCode => $localeName)
                                                    @php
                                                        $currentRouteName = request()->route()->getName();
                                                        $route = ($currentRouteName === 'residence' || $currentRouteName === 'news' || $currentRouteName === 'concept' || $currentRouteName === 'developer' || $currentRouteName === 'calculator' || $currentRouteName === 'contact-us') ? $currentRouteName : 'changeLocale';
                                                        $routeParams = ($currentRouteName === 'residence' || $currentRouteName === 'news'|| $currentRouteName === 'concept' || $currentRouteName === 'developer' || $currentRouteName === 'calculator' || $currentRouteName === 'contact-us') ? [$localeCode] : [$localeCode, $currentRouteName];
                                                    @endphp
                                                    <a class="dropdown-item {{ app()->getLocale() === $localeCode ? 'active' : '' }}" href="{{ route($route, $routeParams) }}">
                                                        <span style="vertical-align: middle;">{{ $localeName }}</span>
                                                    </a><br/>
                                                @endforeach
                                            </div>
                                        </div>



                            </div>
                        </div>
                    </div>
                </div>
            </header>
        </div>

        @yield('section')
        <!--<a href="https://api.whatsapp.com/send?phone=628116260588&text=Halo%20saya%20ingin%20bertanya%20mengenai%20Cluster%20Ananta%20di%20Savanna%20Sumatera." class="wa_float_pc" target="_blank">
            <img class="scale-with-grid" src="{{asset('assets/content/savanna/wa_button_new.png')}}">
        </a>
        <a href="https://api.whatsapp.com/send?phone=628116260588&text=Halo%20saya%20ingin%20bertanya%20mengenai%20Cluster%20Ananta%20di%20Savanna%20Sumatera." class="wa_float_mobile" target="_blank">
            <img class="scale-with-grid" src="{{asset('assets/content/savanna/wa_button_new.png')}}">
        </a>-->
        
        <footer id="Footer" class="clearfix">
            <div class="widgets_wrapper footer_address">
                <div class="container">
                    <div class="column one-sixth">
                        <aside class="widget widget_text">
                            <div class="textwidget">
                                <h4 class="title_footer">Marketing Gallery</h4>
                            </div>
                        </aside>
                    </div>
                    <div class="column one-third">
                        <aside class="widget widget_text">
                            <div class="textwidget">
                                <p class="address_footer">
                                    Jl. Jamin Ginting KM 8,4 Komp. Royal Sumatera<br/>
                                    Ruko Citywalk Blok I No. 7 LK.V Mangga<br/>
                                    Medan Tuntungan, Medan, Sumatera Utara<br/>
                                    
                                </p>
                                
                            </div>
                        </aside>
                    </div>
                    <div class="column one-third">
                        <aside class="widget widget_text">
                            <div class="textwidget">
                                <p class="gallery_on_mobile"><img class="scale-with-grid" src="{{asset('assets/content/savanna/icon_wa_footer.png')}}" width="15px"><span class="list_footer gallery_on_mobile"> 081 1626 0588</span></p>
                                <p class="address_footer2"><img class="scale-with-grid" src="{{asset('assets/content/savanna/icon_tlp_footer.png')}}" width="15px"><span class="list_footer"> 061 8047 1888</span><br/>
                                <img class="scale-with-grid gallery_on_pc" src="{{asset('assets/content/savanna/icon_wa_footer.png')}}" width="15px"><span class="list_footer gallery_on_pc"> 081 1626 0588</span></p>
                                <p class="title_footer" style="margin-top:-20px;">Follow us on<br/>
                                    <img class="scale-with-grid" src="{{asset('assets/content/savanna/youtube.png')}}" width="20px">&nbsp;&nbsp;<a href="https://www.instagram.com/savannasumatera_official/?hl=en" target="_blank"><img class="scale-with-grid" src="{{asset('assets/content/savanna/instagram.png')}}" width="20px"></a>&nbsp;&nbsp;<a href="https://www.facebook.com/profile.php?id=100071066047565" target="_blank"><img class="scale-with-grid" src="{{asset('assets/content/savanna/facebook.png')}}" width="20px"></a><br/>
                                </p>
                                <!--<img class="scale-with-grid" src="{{asset('assets/content/savanna/icon_tlp_footer.png')}}" width="15px"><span class="list_footer"> 061 8047 1888</span><br/>
                                <img class="scale-with-grid" src="{{asset('assets/content/savanna/icon_email_footer.png')}}" width="15px"><span class="list_footer"> savannasumatera@jsi.co.id</span><br/>
                                <img class="scale-with-grid" src="{{asset('assets/content/savanna/icon_ig_footer.png')}}" width="15px"><span class="list_footer"> savannasumatera_official</span>-->
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
            <div class="widgets_wrapper footer_menu_pc" style="padding-right:0px;background-color:#6C919C;">
                <div class="container">
                    <div class="column one">
                        <aside class="widget widget_text">
                            <div class="textwidget">
                                <p class="title_footer">
                                    <a href="{{ route('concept', app()->getLocale()) }}">CONCEPT</a><a style="margin-left: 20px" href="{{ route('residence', app()->getLocale()) }}">RESIDENCE</a><!--<a style="margin-left: 20px" href="http://savannasumatera360.refineri.id/" target="_blank">360&deg;</a>--><a style="margin-left: 20px" href="{{ route('developer', app()->getLocale()) }}">DEVELOPER</a><!--<a style="margin-left: 20px" href="{{ route('calculator', app()->getLocale()) }}">KPR SIMULATOR</a>--><a style="margin-left: 20px" href="{{ route('news', app()->getLocale()) }}">NEWS</a><a style="margin-left: 20px" href="{{ route('contact-us', app()->getLocale()) }}">VISIT US</a><a style="margin-left: 20px" href="https://crm-savanna.refineri.id/" target="_blank">CRM</a>
                                </p>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
            <div class="widgets_wrapper footer_menu_mobile" style="padding-right:0px;background-color:#6C919C;text-align:center;">
                <div class="container">
                    <div class="column one">
                        <aside class="widget widget_text">
                            <div class="textwidget">
                                    <ul class="title_footer_mobile">
                                        <li><a href="{{ route('concept', app()->getLocale()) }}">Concept</a></li>
                                        <li><a href="{{ route('residence', app()->getLocale()) }}">Residence</a></li>
                                        <!--<li><a href="http://savannasumatera360.refineri.id/" target="_blank">360&deg;</a></li>-->
                                        <li><a href="{{ route('developer', app()->getLocale()) }}">Developer</a></li>
                                        <!--<li><a href="{{ route('calculator', app()->getLocale()) }}">KPR Simulator</a></li>-->
                                        <li><a href="{{ route('news', app()->getLocale()) }}">News</a></li>
                                        <li><a href="{{ route('contact-us', app()->getLocale()) }}">Visit Us</a></li>
                                        <li><a href="https://crm-savanna.refineri.id/" target="_blank">CRM</a></li>
                                    </ul>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
            <div class="widgets_wrapper footer_logo" style="margin-top:0px;margin-left:40%;padding:0px;background-color:hsl(0, 0%, 0%, 0);">
                <div class="container">
                    <div class="column one">
                        <aside class="widget widget_text">
                            <div class="textwidget">
                            <img class="scale-with-grid" src="{{asset('assets/content/savanna/footer_logo2.png')}}" width="16%" style="margin-top:-355px;margin-left:47%;padding:0px;z-index:1;">
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
            <div class="widgets_wrapper footer_disclaimer" style="background-color:#ffffff;">
                <div class="container">
                    <div class="column one">
                        <aside class="widget widget_text">
                            <div class="textwidget">
                                <p style="font-size:12px;line-height:14px;text-align:justify;">{{ __('layout.disclaimer') }}</p>
                            </div>
                        </aside>
                    </div>
                    <div class="column one disclaimer_mobile" style="text-align:center">
                        <aside class="widget widget_text">
                            <div class="textwidget">
                            <img class="scale-with-grid" src="{{asset('assets/content/savanna/footer_logo_mobile.png')}}" width="50%">
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
            <!--<div class="widgets_wrapper" style="padding:140px 0 100px;background-color:#062A33;">
                <div class="container">
                    <div class="column one-fifth">
                        <aside class="widget widget_text">
                            <h4>Useful links</h4>
                            <div class="textwidget">
                                <ul>
                                    <li style="margin-bottom:20px">
                                        <i class="icon-right-dir themecolor" style="margin-right:10px"></i><a href="#">Lorem ipsum</a>
                                    </li>
                                    <li style="margin-bottom:20px">
                                        <i class="icon-right-dir themecolor" style="margin-right:10px"></i><a href="#">Praesent pretium</a>
                                    </li>
                                    <li style="margin-bottom:20px">
                                        <i class="icon-right-dir themecolor" style="margin-right:10px"></i><a href="#">Pellentesque</a>
                                    </li>
                                    <li style="margin-bottom:20px">
                                        <i class="icon-right-dir themecolor" style="margin-right:10px"></i><a href="#">Aliquam</a>
                                    </li>
                                    <li style="margin-bottom:20px">
                                        <i class="icon-right-dir themecolor" style="margin-right:10px"></i><a href="#">Etiam dapibus</a>
                                    </li>
                                    <li style="margin-bottom:20px">
                                        <i class="icon-right-dir themecolor" style="margin-right:10px"></i><a href="#">Nunc sit</a>
                                    </li>
                                </ul>
                            </div>
                        </aside>
                    </div>
                    <div class="column two-fifth">
                        <aside class="widget widget_mfn_recent_posts">
                            <h4>Recent posts</h4>
                            <div class="Recent_posts">
                                <ul>
                                    <li class="post">
                                        <a href="content/fareast/post.html">
                                            <div class="photo">
                                            	<img src="{{asset('assets/content/fareast/images/home_foreast_blog1-80x80.jpg')}}" class="scale-with-grid wp-post-image"><span class="c">0</span>
                                            </div>
                                            <div class="desc">
                                                <h6>Lorem ipsum dolor sit amet</h6><span class="date"><i class="icon-clock"></i>June 14, 2017</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="post">
                                        <a href="content/fareast/post.html">
                                            <div class="photo">
                                            	<img src="{{asset('assets/content/fareast/images/home_foreast_blog2-80x80.jpg')}}" class="scale-with-grid wp-post-image"><span class="c">0</span>
                                            </div>
                                            <div class="desc">
                                                <h6>Aliquam erat ac ipsum</h6><span class="date"><i class="icon-clock"></i>June 14, 2017</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="post">
                                        <a href="content/fareast/post.html">
                                            <div class="photo">
                                            	<img src="{{asset('assets/content/fareast/images/home_foreast_blog3-80x80.jpg')}}" class="scale-with-grid wp-post-image"><span class="c">0</span>
                                            </div>
                                            <div class="desc">
                                                <h6>Phasellus fermentum in dolor</h6><span class="date"><i class="icon-clock"></i>June 14, 2017</span>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </aside>
                    </div>
                    <div class="column two-fifth">
                        <aside class="widget widget_text">
                            <h4>Contact with us</h4>
                            <div class="textwidget">
                                <p>
                                    <b>Lorem ipsum dolor sit</b> amet pede. Mauris mattis varius. Morbi et malesuada tincidunt, nonummy sed, ullamcorper fringilla, nibh. Cras ut turpis.
                                </p>
                                <p>
                                    <a style="text-decoration: underline;" href="#">Contact us</a><a style="text-decoration:underline;margin-left: 20px" href="#">Write us a message</a><a style="text-decoration:underline;margin-left: 20px" href="#">FAQ</a>
                                </p>
                                <hr class="no_line" style="margin: 0 auto 20px">
                                <p style="color: #9f9f9f;">
                                    Aenean nonummy ligula. Etiam ac hendrerit wisi. Morbi egestas, nunc semper id libero.
                                </p>
                                <p style="font-size: 24px; line-height: 24px; margin: 0;">
                                    <a href="#"><i class="icon-facebook-circled"></i></a><a href="#"><i class="icon-gplus-circled"></i></a><a href="#"><i class="icon-twitter-circled"></i></a><a href="#"><i class="icon-pinterest-circled"></i></a><a href="#"><i class="icon-linkedin-circled"></i></a>
                                </p>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>-->
            <div class="footer_copy" style="background-color:#DEDEDE;">
                <div class="container">
                    <div class="column one">
                        <div class="copyright">
                            &copy; 2023 SAVANNA SUMATERA by <a href="https://refineri.id" target="_blank">Refineri</a> | All Rights Reserved
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    
    <!-- Side Menu -->
    <div id="Side_slide" class="right dark">
        <div class="close-wrapper">
            <a href="#" class="close"><i class="icon-cancel-fine"></i></a>
        </div>
        <div class="menu_wrapper"></div>
    </div>
    <div id="body_overlay"></div>

    @yield('script')


</body>

</html>