@extends('layouts.app')

@section('section')

<div id="Content" style="background-color:#ffffff">
            <div class="content_wrapper clearfix">
                <div class="sections_group">
                    <div class="entry-content">
                        <!--<div class="section mcb-section contact-us_main_banner" style="background-color:hsl(0, 0%, 0%, 0); background-image:url({{asset('assets/content/savanna/contact-us_main-banner.jpeg')}}); background-size: cover; background-repeat:no-repeat;">
                            <div class="section_wrapper mcb-section-inner">
                                <div class="wrap mcb-wrap one valign-top clearfix">
                                    <div class="mcb-wrap-inner">
                                        <div class="column mcb-column one column_placeholder category_main_banner2">
                                            <div class="placeholder">
                                                &nbsp;
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>-->
                        <!--<div class="section mcb-section contact-us_visit" style="text-align:center;background-color:hsl(0, 0%, 0%, 0); background-size: contain; background-repeat:no-repeat;">
                            <div class="section_wrapper mcb-section-inner">
                                <div class="wrap mcb-wrap one clearfix" style="margin-top:0">
                                    <div class="mcb-wrap-inner">
                                        <div class="column mcb-column one column_placeholder">
                                            <div class="animate" data-anim-type="fadeInDown">
                                               <!-- <h3>{{ __('contact.title1') }}</h3>
                                                <h5>{{ __('contact.title2') }}<br/> {{ __('contact.title3') }}</h5>-->
                                                <!--<h3>{{ __('contact.title2') }}<br/> {{ __('contact.title3') }}</h3>
                                                <p>Jl. Jamin Ginting KM 19,8<br/>
                                                    Pertampilen, Pancur Batu, Kab. Deli Serdang Sumatera Utara
                                                </p>
                                            </div>
                                        </div>
                                        <!--<div class="column mcb-column one column_placeholder">
                                            <div class="animate" data-anim-type="fadeInUp">
                                            <iframe class="contact-map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3982.5604754536084!2d98.59843757463618!3d3.4564538965179765!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3031236969131b8b%3A0x8337a906d784e70b!2sSAVANNA%20SUMATERA!5e0!3m2!1sen!2sid!4v1687684683811!5m2!1sen!2sid" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                            </div>
                                        </div>-->
                                    <!--</div>
                                </div>
                            </div>
                        </div>-->

                        <!--<div class="section mcb-section contact_contact_us" style="background-color:hsl(0, 0%, 0%, 0); background-image:url({{asset('assets/content/savanna/contact-us_bg2.png')}}); background-size: cover; background-repeat:no-repeat; ">-->
                        <div class="section mcb-section contact_contact_us" style="background-color:hsl(0, 0%, 0%, 0); background-size: cover; background-repeat:no-repeat; ">
                            <div class="section_wrapper mcb-section-inner">
                                <div class="wrap mcb-wrap one valign-middle clearfix" style="margin-top:0px;">
                                    <div class="mcb-wrap-inner">
                                        <div class="column mcb-column one column_placeholder">
                                            <!--<div class="column_attr">
                                                <h3 style="color:#6C8E99;font-weight:500;text-align:center;font-size:34px;line-height:34px;">{{ __('home.contact_new_1') }}</h3>
                                                <h5 style="color:#6C8E99;font-weight:300;text-align:center;">{{ __('home.contact_new_2') }}
                                                </h5>
                                            </div>-->
                                            <div class="column_attr contact-us_visit2">
                                            <h5 style="text-align:center;">{{ __('contact.title3') }}</h5>
                                                        <!--<p style="text-align:center;color:#6C8E99;">Jl. Jamin Ginting KM 19,8<br/>
                                                            Pertampilen, Pancur Batu, Kab. Deli Serdang Sumatera Utara
                                                        </p>-->
                                            </div>
                                        </div>
                                        <div class="column mcb-column one column_contact_space_mobile" style="padding-top:300px;">
                                            <div class="column_attr">
                                                &nbsp;
                                            </div>
                                        </div>
                                        <div class="column mcb-column one-third column_placeholder">
                                            <!--<div class="image_wrapper contact-us_visit2">
                                                <h5 style="color:#6C8E99;font-weight:300;text-align:left;">{{ __('home.contact_new_1') }}</h5>
                                                <p style="color:#6C8E99;font-weight:300;text-align:left;">{{ __('home.contact_new_2') }}</p>
                                            </div>-->
                                            <div class="column mcb-column one column_placeholder contact_us_home" style="background-color:#0C404C;border:1px;border-color:#0C404C;border-radius:20px;">
                                                <div class="placeholder">
                                                    <div id="contactWrapper">
                                                            <!--<form id="contactform" method="POST" action="{{ url('/contact') }}">-->
                                                        <form class="contactform" method="POST" action="{{ route('contact.send') }}">
                                                            @csrf
                                                            <!-- One Second (1/2) Column -->
                                                            <div class="column one">
                                                                <label class="kontak">{{ __('home.contact_3') }}</label><input type="text" name="name" id="name" size="40" aria-required="true" aria-invalid="false" />
                                                            </div>
                                                            <!-- One Second (1/2) Column -->
                                                            <div class="column one">
                                                            <label class="kontak">Email</label><input type="email" name="email" id="email" size="40" aria-required="true" aria-invalid="false" />
                                                            </div>
                                                            <div class="column one">
                                                            <label class="kontak">{{ __('home.contact_4') }}</label><input type="number" name="phone" id="phone" size="40" aria-invalid="false" />
                                                            </div>

                                                            <!-- New date field: datevisit -->
                                                            <div class="column one-second">
                                                                <label class="kontak">Visit Date</label>
                                                                <input type="date" name="datevisit" id="datevisit" />
                                                            </div>

                                                            <!-- New dropdown field: timevisit -->
                                                            <div class="column one-second">
                                                                <label class="kontak">Visit Time</label>
                                                                <select name="timevisit" id="timevisit" style="padding-top:11px;padding-bottom:11px;">
                                                                    <option value="morning">Morning (10am-12pm)</option>
                                                                    <option value="afternoon">Afternoon (1pm-3pm)</option>
                                                                    <option value="evening">Evening (3pm-5pm)</option>
                                                                </select>
                                                            </div>

                                                            <div class="column one">
                                                            <label class="kontak">{{ __('home.contact_5') }}</label><textarea name="body" id="body" style="width:100%;" rows="3" aria-invalid="false"></textarea>
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
                                        <div class="column mcb-column one-second column_image visit_map">
                                        
                                        
                                            <div class="animate" data-anim-type="fadeInUp">
                                                <div class="image_frame image_item no_link scale-with-grid no_border">
                                                    <div class="image_wrapper">
                                                        <!--<h5>{{ __('contact.title3') }}</h5>
                                                        <p>Jl. Jamin Ginting KM 19,8<br/>
                                                            Pertampilen, Pancur Batu,<br/>
                                                            Kab. Deli Serdang Sumatera Utara
                                                        </p>-->
                                                    <a href="{{asset('assets/content/savanna/map-visit.png')}}" class="image-popup image-visit"><img class="scale-with-grid" src="{{asset('assets/content/savanna/map-visit.png')}}"></a><br/>
                                                    <a href="https://goo.gl/maps/DwxJ9HAmEQmyi8bJ6" class="image-visit-button"><button class="home_custom">{{ __('home.home_button3') }} <i class="icon-right-thin"></i></button></a>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                        <!--<div class="section mcb-section about_contact_us_mobile2" style="margin-top:-250px;padding-bottom:450px;background-color:hsl(0, 0%, 0%, 0); background-image:url({{asset('assets/content/savanna/contact-us_bg2.png')}}); background-size: cover; background-repeat:no-repeat; background-position:left center;">-->
                        <div class="section mcb-section about_contact_us_mobile2" style="margin-top:120px;padding-bottom:50px;background-color:hsl(0, 0%, 0%, 0); background-size: cover; background-repeat:no-repeat; background-position:left center;">
                            <div class="section_wrapper mcb-section-inner">
                                <div class="wrap mcb-wrap one valign-middle clearfix" style="margin-top:0">
                                    <div class="mcb-wrap-inner">
                                        <div class="column mcb-column one column_placeholder" style="text-align:center;">
                                            <div class="column_attr">
                                                <!--<h3 class="title_mobile" style="color:#6C8E99;font-weight:300;">{{ __('home.contact_new_1') }}</h3>
                                                <h5 style="color:#6C8E99;font-weight:300;font-size:16px;">{{ __('home.contact_new_2') }}
                                                </h5>-->
                                                <h3 class="title_mobile" style="color:#F2B781;font-weight:500;">{{ __('contact.title3') }}</h3>
                                                <!--<h5 style="color:#6C8E99;font-weight:300;font-size:12px;line-height:18px;">Jl. Jamin Ginting KM 19,8<br/>
                                                            Pertampilen, Pancur Batu, Kab. Deli Serdang Sumatera Utara
                                                </h5>-->
                                            </div>
                                            
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="section mcb-section about_contact_us_mobile3" style="margin-top:-50px;margin-left:-40px;padding-top:30px;padding-bottom:30px;background-color:hsl(0, 0%, 0%, 0); background-image:url({{asset('assets/content/savanna/about_largest_satellite_city.png')}});background-size: contain; background-repeat:no-repeat;background-position:center top;">
                            <div class="section_wrapper mcb-section-inner">
                                <div class="wrap mcb-wrap one valign-middle clearfix" style="margin-top:0">
                                    <div class="mcb-wrap-inner">
                                        <div class="column one column_column contact_us_home" style="background-color:#0C404C;border:1px;border-color:#0C404C;border-radius:20px;">
                                            <div class="placeholder">
                                                <div id="contactWrapper">
                                                        <!--<form id="contactform" method="POST" action="{{ url('/contact') }}">-->
                                                    <form class="contactform" method="POST" action="{{ route('contact.send') }}">
                                                        @csrf
                                                        <!-- One Second (1/2) Column -->
                                                        <div class="column one">
                                                            <label class="kontak">{{ __('home.contact_3') }}</label><input type="text" name="name" id="name" size="40" aria-required="true" aria-invalid="false" />
                                                        </div>
                                                        <!-- One Second (1/2) Column -->
                                                        <div class="column one">
                                                        <label class="kontak">Email</label><input type="email" name="email" id="email" size="40" aria-required="true" aria-invalid="false" />
                                                        </div>
                                                        <div class="column one">
                                                        <label class="kontak">{{ __('home.contact_4') }}</label><input type="number" name="phone" id="phone" size="40" aria-invalid="false" />
                                                        </div>

                                                         <!-- New date field: datevisit -->
                                                         <div class="column one-second">
                                                            <label class="kontak">Visit Date</label>
                                                            <input type="date" name="datevisit" id="datevisit" />
                                                        </div>

                                                        <!-- New dropdown field: timevisit -->
                                                        <div class="column one-second">
                                                            <label class="kontak">Visit Time</label>
                                                            <select name="timevisit" id="timevisit" style="padding-top:11px;padding-bottom:11px;">
                                                                <option value="morning">Morning (10am-12pm)</option>
                                                                <option value="afternoon">Afternoon (1pm-3pm)</option>
                                                                <option value="evening">Evening (3pm-5pm)</option>
                                                            </select>
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
                                        
                                        <div class="column mcb-column one column_image" style="margin-left:12%;padding-top:30px;">
                                        
                                            <div class="animate" data-anim-type="fadeInUp">
                                                <div class="image_frame image_item no_link scale-with-grid no_border">
                                                    <div class="image_wrapper">
                                                    <a href="{{asset('assets/content/savanna/map-visit.png')}}" class="image-popup"><img class="scale-with-grid" src="{{asset('assets/content/savanna/map-visit.png')}}" width="100%"></a><br/>
                                                    <a href="https://goo.gl/maps/DwxJ9HAmEQmyi8bJ6" style="text-align:center;margin-top:30px;"><button class="home_custom">{{ __('home.home_button3') }}</button></a>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        

                                    </div>
                                </div>
                            </div>
                        </div>

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