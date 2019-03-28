<div class="col-lg-4">
                    <div class="blog_right_sidebar">
                        <aside class="single_sidebar_widget search_widget">
                            <form class="input-group" action="{{ route('news.news.search') }}" method="get">
                                <input type="text" name="name" class="form-control" placeholder="Search Posts">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button" value="Tìm"><i class="ti-search"></i></button>
                                </span>
                            </form><!-- /input-group -->
                            <div class="br"></div>
                            <div class="widget widget-categories">
                                <h4 class="widget-title title_decor shadow">5 kinh nghiệm cần biết</h4>
                                <ul class="list-custom">
                            @php $i = 0 @endphp
                            @foreach($allexps->detail as $exp)
                                @if($i<5)
                                    <li><a href="{{ route('news.news.detail', ['slug' => str_slug($exp->title), 'id' => $exp->id]) }}">{{ $exp->title }}<span class="tip tip-hot">Hot!</span></a></li>
                                    @php $i++ @endphp
                                @endif
                            @endforeach
                                </ul>
                            </div><!-- End .widget -->
                            
                            <div class="single_sidebar_widget popular_post_widget mt-5">
                                <h4 class="widget-title title_decor shadow">Các bài viết nổi bật</h4>
                                @foreach($allnews as $new)
                                <div class="media post_item">
                                    <img src="/upload/{{ $new->img }}" alt="{{ $new->title }}" width="100px">
                                    <div class="media-body">
                                        <a href="{{ route('news.news.detail', ['slug' => str_slug($new->title), 'id' => $new->id]) }}">
                                            <h3>{{ $new->title }}</h3>
                                        </a>
                                        <p>{{ date_format($new->updated_at, 'D, m Y') }}</p>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            <div class="br"></div>
                            <div class="single_sidebar_widget popular_post_widget mt-5">
                                <h4 class="widget-title title_decor shadow">Các dịch vụ nổi bật</h4>
                                @foreach($allcars as $car)
                                <div class="media post_item">
                                    <img src="/upload/{{ $car->picture }}" alt="{{ $car->title }}" style="width: 100px">
                                    <div class="media-body">
                                        <a href="{{ route('news.car.detail', $car->slug) }}">
                                            <h3>{{ $car->title }}<span class="tip tip-hot">Hot!</span></h3>
                                        </a>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            <div class="br"></div>
                            <div class="single_sidebar_widget ads_widget">
                                <a href="#"><img class="img-fluid" src="/templates/news/img/blog/add.jpg" alt=""></a>
                            </div>
                            <div class="br"></div>
                            <div  class="single-sidebar-widget tag_cloud_widget">
                                <h4 class="widget_title">Các tag khác</h4>
                                <ul class="list">
                                    @foreach($alltags as $tag)
                                    <li><a href="{{ route('news.news.tag',$tag->slug_name) }}">{{ $tag->name }}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="br"></div>
                            
                            <div  class="single-sidebar-widget tag_cloud_widget">
                                <h4 class="widget_title">Fanpage</h4>
                                <div class="fb-page" data-href="https://www.facebook.com/hoangphuc.car.quangngai/" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/hoangphuc.car.quangngai/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/hoangphuc.car.quangngai/">Hoàng Phúc Car</a></blockquote></div>
                            </div>    
                        </aside>
                    </div>
                </div>