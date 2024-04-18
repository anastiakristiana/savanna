@extends('layouts.app')

@section('section')

<div id="Content">
    <div class="content_wrapper clearfix">
        <div class="sections_group">
            <div class="entry-content">
                <div class="section mcb-section news_main_banner" style="background-color:hsl(0, 0%, 0%, 0); background-image:url({{asset('assets/content/savanna/news_banner.jpeg')}}); background-size: cover; background-repeat:no-repeat; background-position:center top;">
                    <div class="section_wrapper mcb-section-inner">
                        <div class="wrap mcb-wrap one valign-top clearfix">
                            <div class="mcb-wrap-inner">
                                <div class="column mcb-column one column_placeholder">
                                    <div class="placeholder">
                                        <h2>NEWS</h2>
                                        <p>Find the latest news about Savanna Sumatera here!</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!--<div class="section news_grid_article" style="padding-top:50px;padding-bottom:50px;background-color:hsl(0, 0%, 0%, 0); background-repeat:no-repeat;background-size: cover;">
                    <div class="section_wrapper clearfix">
                        <div class="items_group clearfix">
                            <div class="column one column_article_tabs">
                                <div class="jq-tabs_article tabs_wrapper_article tabs_horizontal">
                                    <div class="tab-titles-wrapper">
                                        <div class="tab-titles">
                                        <span class="filter-text">Filter by</span>
                                            @foreach ($categories as $key => $category)
                                            <button class="tab-title{{ $key === 0 ? ' active' : '' }}" data-tab="#tab{{ $category->id }}">{{ $category->name }}</button>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="articles-container">
                                    @foreach ($categories as $key => $category)
                                    <div id="tab{{ $category->id }}" class="tab-content{{ $key === 0 ? ' active' : '' }}">
                                            <div class="column one column_blog">
                                                <div class="blog_wrapper isotope_wrapper">
                                                    <div class="posts_group lm_wrapper grid col-3">
                                                        @php
                                                            $categoryArticles = $articles->where('category_id', $category->id);
                                                        @endphp
                                                        @if ($categoryArticles->isEmpty())
                                                            <div class="no-articles">No articles found for this category.</div>
                                                        @else
                                                        @foreach ($articles as $article)
                                                            @if ($article->category_id == $category->id)
                                                                <div class="post-item isotope-item clearfix post format-standard has-post-thumbnail hentry">
                                                                    <div class="date_label">
                                                                        {{ $article->created_at->format('F d, Y') }}
                                                                    </div>
                                                                    <div class="image_frame post-photo-wrapper scale-with-grid image">
                                                                        <div class="image_wrapper">
                                                                            <a href="{{ route('news.show', ['locale' => app()->getLocale(), 'slug' => app()->getLocale() == 'en' ? $article->slug : $article->slug_id]) }}">
                                                                                <div class="mask"></div>
                                                                                <img width="960" height="720" src="{{ asset($article->image) }}" class="scale-with-grid wp-post-image">
                                                                            </a>
                                                                            <div class="image_links double">
                                                                                <a href="{{ asset($article->image) }}" class="zoom" rel="prettyphoto">
                                                                                    <i class="icon-search"></i>
                                                                                </a>
                                                                                <a href="{{ route('news.show', ['locale' => app()->getLocale(), 'slug' => app()->getLocale() == 'en' ? $article->slug : $article->slug_id]) }}" class="link">
                                                                                    <i class="icon-link"></i>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="post-desc-wrapper">
                                                                        <div class="post-desc">
                                                                            <div class="post-head">
                                                                                <div class="post-meta clearfix">
                                                                                    <div class="author-date">
                                                                                    <span class="vcard author post-author">
                                                                                        
                                                                                            <span class="category-name">{{ $article->category->name }}</span>
                                                                                        
                                                                                    </span>

                                                                                        <span class="date">
                                                                                            <span class="label"> at </span>
                                                                                            <i class="icon-clock"></i>
                                                                                            <span class="post-date updated">{{ $article->created_at->format('F d, Y') }}</span>
                                                                                        </span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="post-title">
                                                                                <h2 class="entry-title">
                                                                                    <a href="{{ route('news.show', ['locale' => app()->getLocale(), 'slug' => app()->getLocale() == 'en' ? $article->slug : $article->slug_id]) }}">
                                                                                        @if(app()->getLocale() == 'en')
                                                                                            {{ $article->title_en }}
                                                                                        @elseif(app()->getLocale() == 'id')
                                                                                            {{ $article->title_id }}
                                                                                        @endif
                                                                                    </a>
                                                                                </h2>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            @endif
                                                        @endforeach
                                                    @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>-->

                <div class="section news_grid_article" style="padding-top:50px;padding-bottom:50px;background-color:hsl(0, 0%, 0%, 0); background-repeat:no-repeat;background-size: cover;">
                    <div class="section_wrapper clearfix">
                        <div class="items_group clearfix">
                            <div class="column one column_article_tabs">
                                <div class="jq-tabs_article tabs_wrapper_article tabs_horizontal">
                                    <div class="tab-titles-wrapper">
                                        <div class="tab-titles">
                                            <span class="filter-text">Filter by</span>
                                            @foreach ($categories as $key => $category)
                                                <button class="tab-title{{ $key === 0 ? ' active' : '' }} tab-title-pc" data-tab="#tab{{ $category->id }}">{{ $category->name }}</button>
                                            @endforeach
                                            <!-- Add the dropdown container -->
                                            <div class="dropdown-filter-wrapper mobile-view">
                                                <select class="dropdown-filter-select">
                                                @foreach ($categories as $category)
                                                    <option value="#tab{{ $category->id }}">{{ $category->name }}</option>
                                                @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="articles-container">
                                    @foreach ($categories as $key => $category)
                                    <div id="tab{{ $category->id }}" class="tab-content{{ $key === 0 ? ' active' : '' }}">
                                            <div class="column one column_blog">
                                                <div class="blog_wrapper isotope_wrapper">
                                                    <div class="posts_group lm_wrapper grid col-3">
                                                        @php
                                                            $categoryArticles = $articles->where('category_id', $category->id);
                                                        @endphp
                                                        @if ($categoryArticles->isEmpty())
                                                            <div class="no-articles">No articles found for this category.</div>
                                                        @else
                                                        @foreach ($articles as $article)
                                                            @if ($article->category_id == $category->id)
                                                                <div class="post-item isotope-item clearfix post format-standard has-post-thumbnail hentry">
                                                                    <div class="date_label">
                                                                        {{ $article->created_at->format('F d, Y') }}
                                                                    </div>
                                                                    <div class="image_frame post-photo-wrapper scale-with-grid image">
                                                                        <div class="image_wrapper">
                                                                            <a href="{{ route('news.show', ['locale' => app()->getLocale(), 'slug' => app()->getLocale() == 'en' ? $article->slug : $article->slug_id]) }}">
                                                                                <div class="mask"></div>
                                                                                <img width="960" height="720" src="{{ asset($article->image) }}" class="scale-with-grid wp-post-image">
                                                                            </a>
                                                                            <div class="image_links double">
                                                                                <a href="{{ asset($article->image) }}" class="zoom" rel="prettyphoto">
                                                                                    <i class="icon-search"></i>
                                                                                </a>
                                                                                <a href="{{ route('news.show', ['locale' => app()->getLocale(), 'slug' => app()->getLocale() == 'en' ? $article->slug : $article->slug_id]) }}" class="link">
                                                                                    <i class="icon-link"></i>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="post-desc-wrapper">
                                                                        <div class="post-desc">
                                                                            <div class="post-head">
                                                                                <div class="post-meta clearfix">
                                                                                    <div class="author-date">
                                                                                    <span class="vcard author post-author">
                                                                                        <!--<span class="label">Published by </span>
                                                                                        <i class="icon-user"></i>-->
                                                                                        
                                                                                        
                                                                                            <span class="category-name">{{ $article->category->name }}</span>
                                                                                        
                                                                                    
                                                                                        
                                                                                    </span>

                                                                                        <span class="date">
                                                                                            <span class="label"> at </span>
                                                                                            <i class="icon-clock"></i>
                                                                                            <span class="post-date updated">{{ $article->created_at->format('F d, Y') }}</span>
                                                                                        </span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="post-title">
                                                                                <h2 class="entry-title">
                                                                                    <a href="{{ route('news.show', ['locale' => app()->getLocale(), 'slug' => app()->getLocale() == 'en' ? $article->slug : $article->slug_id]) }}">
                                                                                        @if(app()->getLocale() == 'en')
                                                                                            {{ $article->title_en }}
                                                                                        @elseif(app()->getLocale() == 'id')
                                                                                            {{ $article->title_id }}
                                                                                        @endif
                                                                                    </a>
                                                                                </h2>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            @endif
                                                        @endforeach
                                                    @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
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

  const dropdownFilter = document.querySelector(".dropdown-filter-select");

  dropdownFilter.addEventListener("change", function() {
    const selectedTab = this.value;

    // Remove "active" class from all tab titles and tab contents
    tabTitles.forEach(function(title) {
      title.classList.remove("active");
    });
    tabContents.forEach(function(content) {
      content.classList.remove("active");
    });

    // Add "active" class to the selected tab title and corresponding tab content
    const selectedTabTitle = document.querySelector(`[data-tab="${selectedTab}"]`);
    selectedTabTitle.classList.add("active");
    document.querySelector(selectedTab).classList.add("active");
  });
});


</script>



@endsection
