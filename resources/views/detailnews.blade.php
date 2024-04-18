@extends('layouts.app')

@section('section')

            
            <div id="Content">
                <div class="content_wrapper clearfix">
                    <div class="sections_group">
                        <div class="section mcb-section news_main_banner" style="background-color:hsl(0, 0%, 0%, 0); background-image:url({{asset('assets/content/savanna/news_banner.jpeg')}}); background-size: cover; background-repeat:no-repeat; background-position:center top;">
                            <div class="section_wrapper mcb-section-inner">
                                <div class="wrap mcb-wrap one valign-top clearfix">
                                    <div class="mcb-wrap-inner">
                                        <div class="column mcb-column one column_placeholder">
                                            <div class="placeholder">
                                                <h2>{{ $article->{'title_' . app()->getLocale()} }}</h2>
                                            </div>
                                        </div>
                                            <div class="column one">
                                                <ul class="breadcrumbs_article">
                                                    <li>
                                                        <a href="{{ route('home', app()->getLocale()) }}">Home</a><span><i class="icon-right-open"></i></span>
                                                    </li>
                                                    <li>
                                                        <a href="{{ route('news', app()->getLocale()) }}">News</a><span><i class="icon-right-open"></i></span>
                                                    </li>
                                                    <li>
                                                        {{ $article->{'title_' . app()->getLocale()} }}
                                                    </li>
                                                </ul>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="no-title post format-standard has-post-thumbnail hentry category-mobile category-photography tag-css3 tag-eclipse tag-themeforest tag-zend">
                            
                            <div class="section section-post-header">
                                <div class="section_wrapper clearfix">
                                    <div class="column one post-header" style="padding-top:50px;padding-bottom:30px;">
                                        
                                                    <span class="label">Published by </span><span class="fn">Savanna Sumatera</span><span class="date"> <span class="label">at</span>
                                                    <time class="entry-date updated" datetime="{{ $article->date }}">
                                                        {{ $article->date->format('F j, Y') }}
                                                    </time>
                                                  
                                    </div>
                                    <div class="column one single-photo-wrapper image">
                                        <!--<div class="share_wrapper">
                                            <span class='st_facebook_vcount' displayText='Facebook'></span><span class='st_twitter_vcount' displayText='Tweet'></span><span class='st_pinterest_vcount' displayText='Pinterest'></span>
                                            <script src="../../w.sharethis.com/button/buttons.js"></script>
                                            <script>
                                                stLight.options({
                                                    publisher:"1390eb48-c3c3-409a-903a-ca202d50de91",
                                                    doNotHash: false,
                                                    doNotCopy: false,
                                                    hashAddressBar: false
                                                });
                                            </script>
                                        </div>-->
                                        <div class="scale-with-grid">
                                            <div class="image_wrapper">
                                                    <img width="1200" height="675" src="{{ asset($article->image) }}" alt="Article Image" class="scale-with-grid wp-post-image">
                                                        
                                                <!--<div class="image_links">
                                                    <a href="{{ asset($article->image) }}" class="zoom" rel="prettyphoto"><i class="icon-search"></i></a>
                                                </div>-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="post-wrapper-content">
                                <div class="section the_content has_content">
                                    <div class="section_wrapper">
                                        <div class="the_content_wrapper">
                                            {!! $article->{'content_' . app()->getLocale()} !!}
                                        </div>
                                    </div>
                                </div>
                                <div class="section section-post-footer">
                                    <div class="section_wrapper clearfix">
                                        <div class="column one post-pager"></div>
                                    </div>
                                </div>
                               
                            </div>
                            <!--<div class="section section-post-related">
                                <div class="section_wrapper clearfix">
                                    <div class="section-related-adjustment simple">
                                        <h4>Related news</h4>
                                        <div class="section-related-ul col-3">
                                        @foreach ($relatedArticles as $relatedArticle)
                                            <div class="column post-related post format-standard has-post-thumbnail hentry category-mobile category-motion tag-css3 tag-design tag-eclipse tag-framework tag-grid">
                                                <div class="single-photo-wrapper image">
                                                    <div class="image_frame scale-with-grid">
                                                        <div class="image_wrapper">
                                                            <a href="{{ route('news.show', ['locale' => app()->getLocale(), 'slug' => app()->getLocale() == 'en' ? $article->slug : $article->slug_id]) }}">
                                                                <div class="mask"></div><img width="960" height="720" src="{{ asset($article->image) }}" class="scale-with-grid wp-post-image">
                                                            </a>
                                                            <div class="image_links double">
                                                                <a href="{{ asset($article->image) }}" class="zoom" rel="prettyphoto"><i class="icon-search"></i></a><a href="post_page.html" class="link"><i class="icon-link"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="date_label">
                                                    {{ $article->created_at->format('F d, Y') }}
                                                </div>
                                                <div class="desc">
                                                    <h4><a href="{{ route('news.show', ['locale' => app()->getLocale(), 'slug' => app()->getLocale() == 'en' ? $article->slug : $article->slug_id]) }}">
                                                                @if(app()->getLocale() == 'en')
                                                                    {{ $article->title_en }}
                                                                @elseif(app()->getLocale() == 'id')
                                                                    {{ $article->title_id }}
                                                                @endif
                                                    </a></h4>
                                                    <hr class="hr_color">
                                                    
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>-->
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

@endsection