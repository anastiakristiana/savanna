@foreach ($articles as $article)
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
                                                                            <span class="label">Published by </span>
                                                                            <i class="icon-user"></i>
                                                                            <span class="fn">Savanna Sumatera</span>
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
                                                            <!--<div class="post-excerpt">
                                                                <span class="big">{{ $article->content_en }}</span>
                                                            </div>-->
                                                        </div>
                                                    </div>
                                                </div>
@endforeach
