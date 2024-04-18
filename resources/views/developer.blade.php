@extends('layouts.app')

@section('section')

<div id="Content" style="background-color:#ffffff">
            <div class="content_wrapper clearfix">
                <div class="sections_group">
                    <div class="entry-content">
                        <div class="section mcb-section about_main_banner" style="background-color:hsl(0, 0%, 0%, 0); background-size: cover; background-repeat:no-repeat; background-position:center center;">
                            <div class="section_wrapper mcb-section-inner">
                                <div class="wrap mcb-wrap one valign-top clearfix">
                                    <div class="mcb-wrap-inner">
                                        <div class="column mcb-column one column_placeholder">
                                            <div class="placeholder">
                                                <!--<h5 class="about_title">SAVANNA SUMATERA</h5>
                                                <h3>{{ __('about.title') }} <br/>{{ __('about.title2') }}</h3>-->
                                                <img class="scale-with-grid gallery_on_mobile" src="{{asset('assets/content/savanna/LOGO_BANNER_DEVELOPER.png')}}" width="150%" style="transform:scale(2);margin-left:-25px;"> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="section about_solution" style="background-color:hsl(0, 0%, 0%, 0);background-image:url({{asset('assets/content/savanna/about_largest_satellite_city.png')}}); background-size: contain; background-repeat:no-repeat;background-position:top center;">
                            <div class="section_wrapper mcb-section-inner">
                                <div class="wrap mcb-wrap one valign-bottom clearfix" style="margin-top:0">
                                    <div class="mcb-wrap-inner">
                                        <div class="column mcb-column one-third">
                                            <div class="placeholder about_mvb">
                                                <div class="placeholder">
                                                <img class="scale-with-grid gallery_on_pc" src="{{asset('assets/content/savanna/DEVELOPER_ICON.png')}}" width="40%">
                                                <img class="scale-with-grid gallery_on_mobile" src="{{asset('assets/content/savanna/DEVELOPER_ICON.png')}}" width="50%">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="column mcb-column two-third column_placeholder" style="border-bottom:1px solid #6C8B96;">
                                            <div class="placeholder about_solution3">
                                                <h3 class="gallery_on_pc" style="padding-top:80px;margin-left:-20px;">The World's<br/>
                                                    <strong>Most Valued Business<br/>
                                                    Indonesia</strong></h3>
                                                <h3 class="gallery_on_mobile" style="margin-bottom:-10px;margin-left:-20px;">The World's<br/>
                                                <strong>Most Valued Business<br/>
                                                Indonesia</strong></h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wrap mcb-wrap one valign-bottom clearfix developer_jsi">
                                    <div class="mcb-wrap-inner">
                                        <div class="column mcb-column one-third column_image">
                                            <div class="placeholder about_solution2">
                                                <div class="placeholder" style="padding-right:20px;">
                                                    <h5>{{ __('about.solution4') }}
                                                    </h5>
                                                    <h3><strong>PT Jakarta Setiabudi Internasional Tbk. (JSI)</strong></h3>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="column mcb-column two-third column_placeholder">
                                            <div class="placeholder about_solution3" style="margin-left:-20px;">
                                                
                                                <p>{{ __('about.developer1') }}</p>
                                                <p>{{ __('about.developer2') }}</p>
                                                <p>{{ __('about.developer3') }}</p>
                                                <a href="http://www.jsi.co.id" target="_blank"><button class="about_custom gallery_on_mobile" style="margin-left:25px;">{{ __('about.solution6') }} <i class="icon-right-thin"></i></button></a>
                                                <a href="http://www.jsi.co.id" target="_blank"><button class="about_custom gallery_on_pc">{{ __('about.solution6') }} <i class="icon-right-thin"></i></button></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="section about_solution4" style="background-color:hsl(0, 0%, 0%, 0);">
                            <div class="section_wrapper mcb-section-inner">
                                <div class="wrap mcb-wrap one valign-bottom clearfix" style="margin-top:0">
                                    <div class="mcb-wrap-inner">
                                        <div class="column mcb-column one column_image">
                                            <div class="placeholder" style="padding:20px 0 20px 0;">
                                                <div class="placeholder">
                                                    <img class="scale-with-grid gallery_on_pc" src="{{asset('assets/content/savanna/about_buildings.png')}}" width="100%" style="padding-bottom:30px;"> 
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!--<div class="section about_solution" style="background-color:hsl(0, 0%, 0%, 0);">
                            <div class="section_wrapper mcb-section-inner">
                                <div class="wrap mcb-wrap one valign-bottom clearfix" style="margin-top:0">
                                    <div class="mcb-wrap-inner">
                                        <div class="column mcb-column one column_placeholder">
                                            <div class="animate about_solution_para" data-anim-type="fadeInDown">
                                                <h3 style="text-align:center;">JSI Group
												</h3>
                                                
                                                <p>{{ __('about.developer1') }}</p>
                                                <p>{{ __('about.developer2') }}</p>
                                                <p>{{ __('about.developer3') }}</p>
                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>-->

                        <div class="section about_view_img" style="background-color:hsl(0, 0%, 0%, 0); background-image:url({{asset('assets/content/savanna/about_view.png')}}); background-repeat:no-repeat; background-position:center top;">
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

                        

                        <div class="section about_greatnames_jsi" style="background-color:hsl(0, 0%, 0%, 0); background-image:url({{asset('assets/content/savanna/about_greatnames_bg2.png')}}); background-repeat:no-repeat; background-size:cover; background-position:center top;">
                            <div class="section_wrapper clearfix">
                                <div class="items_group clearfix">
                                    <!-- One full width row-->
                                    <div class="column one column_column">
                                        <div class="column_attr">
                                            <h5>SAVANNA SUMATERA</h5>
                                            <p>{{ __('about.greatnames1') }}</p>
                                        </div>
                                    </div>
                                    <div class="column one column_column about_gallery_portfolio">
                                        <div class="column one column_column">
                                            <h5 style="text-align:center;">{{ __('about.greatnames2') }}</h5>
                                            <p style="text-align:center;">JAKARTA SETIABUDI INTERNASIONAL</p>
                                        </div>
                                        <div class="column one column_column" style="text-align:center;">
                                            <div class="column one-second column_column">
                                                <a href="https://en.jsi.co.id/portfolio/hotel?id=31" target="_blank"><img class="scale-with-grid gallery_on_pc" src="{{asset('assets/content/savanna/about_andaz.png')}}" width="90%" style="padding-left:10%;"></a>
                                                <a href="https://en.jsi.co.id/portfolio/hotel?id=31" target="_blank"><img class="scale-with-grid gallery_on_mobile" src="{{asset('assets/content/savanna/about_andaz_mobile.png')}}" width="80%" style="padding-bottom:20px;"></a>
                                            </div>
                                            <div class="column one-second column_column">
                                                <a href="https://en.jsi.co.id/portfolio/hotel?id=29" target="_blank"><img class="scale-with-grid gallery_on_pc" src="{{asset('assets/content/savanna/about-grand_hyatt.png')}}" width="90%" style="padding-right:10%;"></a>
                                                <a href="https://en.jsi.co.id/portfolio/hotel?id=29" target="_blank"><img class="scale-with-grid gallery_on_mobile" src="{{asset('assets/content/savanna/about_grand_hyatt_mobile.png')}}" width="80%" style="padding-bottom:20px;"></a> 
                                            </div>
                                            <div class="column one column_column">
                                                <a href="https://en.jsi.co.id/portfolio/hotel?id=30" target="_blank"><img class="scale-with-grid gallery_on_pc" src="{{asset('assets/content/savanna/about_hyatt_regency.png')}}" width="90%" style="padding-right:5%;padding-left:5%;"></a>
                                                <a href="https://en.jsi.co.id/portfolio/hotel?id=30" target="_blank"><img class="scale-with-grid gallery_on_mobile" src="{{asset('assets/content/savanna/about_hyatt_regency_mobile.png')}}" width="80%" style="padding-bottom:20px;"></a> 
                                            </div>
                                            <div class="column one-third column_column">
                                                <a href="https://en.jsi.co.id/portfolio/residential?id=28" target="_blank"><img class="scale-with-grid gallery_on_pc" src="{{asset('assets/content/savanna/about_hyarta.png')}}" width="90%" style="padding-left:15%;"></a>
                                                <a href="https://en.jsi.co.id/portfolio/residential?id=28" target="_blank"><img class="scale-with-grid gallery_on_mobile" src="{{asset('assets/content/savanna/about_hyarta_mobile.png')}}" width="80%" style="padding-bottom:20px;"></a> 
                                            </div>
                                            <div class="column one-third column_column">
                                                <a href="https://en.jsi.co.id/portfolio/residential?id=18" target="_blank"><img class="scale-with-grid gallery_on_pc" src="{{asset('assets/content/savanna/about_puri_botanical2_pc.png')}}" width="90%"></a>
                                                <a href="https://en.jsi.co.id/portfolio/residential?id=18" target="_blank"><img class="scale-with-grid gallery_on_mobile" src="{{asset('assets/content/savanna/about_puri_botanical2.png')}}" width="80%" style="padding-bottom:20px;"></a> 
                                            </div>
                                            <div class="column one-third column_column">
                                                <a href="https://en.jsi.co.id/portfolio/retail?id=25" target="_blank"><img class="scale-with-grid gallery_on_pc" src="{{asset('assets/content/savanna/about_one_satrio.png')}}" width="90%" style="margin-left:-5%;padding-right:15%;"></a>
                                                <a href="https://en.jsi.co.id/portfolio/retail?id=25" target="_blank"><img class="scale-with-grid gallery_on_mobile" src="{{asset('assets/content/savanna/about_one_satrio_mobile.png')}}" width="80%"></a> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- <div class="section mcb-section about_contact_us" style="background-color:hsl(0, 0%, 0%, 0); background-image:url({{asset('assets/content/savanna/about_contact.png')}}); background-size: cover; background-repeat:no-repeat; ">
                            <div class="section_wrapper mcb-section-inner">
                                <div class="wrap mcb-wrap one valign-middle clearfix" style="margin-top:30px;">
                                    <div class="mcb-wrap-inner">
                                        <div class="column mcb-column one column_placeholder">
                                            <div class="column_attr">
                                                <h3 style="color:#6C8E99;font-weight:300;">{{ __('home.contact_1') }} {{ __('home.contact_7') }}</h3>
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
                    
                        <!-- <div class="section mcb-section about_contact_us_mobile2" style="margin-top:-150px;padding-top:150px;padding-bottom:350px;background-color:hsl(0, 0%, 0%, 0); background-image:url({{asset('assets/content/savanna/about_contact.png')}}); background-size: cover; background-repeat:no-repeat; background-position:left center;">
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
<script>
document.addEventListener("DOMContentLoaded", function() {
    const tabTitles = document.querySelectorAll(".tab-title");
    const tabContents = document.querySelectorAll(".tab-content");

    tabTitles.forEach(function(tabTitle) {
        tabTitle.addEventListener("click", function() {
            const targetTab = this.getAttribute("data-tab");

            // Remove "active" class from all tab titles and tab contents
            tabTitles.forEach(function(title) {
                title.classList.remove("active");
            });
            tabContents.forEach(function(content) {
                content.classList.remove("active");
            });

            // Add "active" class to the clicked tab title and corresponding tab content
            this.classList.add("active");
            document.querySelector(targetTab).classList.add("active");
        });
    });
});
</script>
<script>
  // Get references to all the tab content elements
  var tabContents = document.querySelectorAll('.tab-content');

  // Get references to all the tab title buttons
  var tabTitleButtons = document.querySelectorAll('.tab-title');

  // Add click event listeners to all the buttons
  tabTitleButtons.forEach(function(button, index) {
    button.addEventListener('click', function() {
      // Remove the active class from all tab titles
      tabTitleButtons.forEach(function(titleButton) {
        titleButton.classList.remove('active');
      });

      // Add the active class to the clicked tab title
      button.classList.add('active');

      // Remove the active class from all tab contents
      tabContents.forEach(function(tabContent) {
        tabContent.classList.remove('active');
      });

      // Add the active class to the corresponding tab content
      tabContents[index].classList.add('active');
    });

    // Add click event listeners to the buttons inside tab content
    var nextButtons = document.querySelectorAll('.tab-content .next-button');
    nextButtons.forEach(function(nextButton, nextIndex) {
      nextButton.addEventListener('click', function() {
        // Remove the active class from the current tab title
        button.classList.remove('active');

        // Add the active class to the next tab title
        tabTitleButtons[nextIndex + 1].classList.add('active');

        // Remove the active class from the current tab content
        tabContents[index].classList.remove('active');

        // Add the active class to the next tab content
        tabContents[nextIndex + 1].classList.add('active');
      });
    });
  });
</script>
@endsection