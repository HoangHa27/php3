{{-- <h1>Đây là trang chủ</h1> --}}
@extends('client.layouts.master')

@section('content')
<div class="main--content">
    <div class="post--items post--items-1 pd--30-0">



        <div class="row gutter--15">
            @foreach ($news->take(6) as $news_item)
            <div class="col-md-6">
                <div class="post--item post--layout-1 post--title-larger">
                    <div class="post--img">
                        {{-- <a href="news-single-v1-boxed.html" class="thumb"><img src="/client/images/banner-01.jpg"
                                alt="" /></a> --}}
                        <a href="article-1.html"><img src="{{ asset('/uploads/img-news/' . $news_item->image_url) }}"
                                data-src="{{ asset('/uploads/img-news/' . $news_item->image_url) }}"
                                class="card-img-top" width="900px" height="100px"> </a>
                        <a href="{{ url('tin/' . $news_item->id) }}" class="cat">{{ $news_item->category_name }}</a>
                        <a href="#" class="icon"><i class="fa fa-flash"></i></a>
                        <div class="post--map">
                            <p class="btn-link">
                                <i class="fa fa-map-o"></i>{{ $news_item->title }}
                            </p>
                            <div class="map--wrapper">
                                <div data-map-latitude="23.790546" data-map-longitude="90.375583" data-map-zoom="6"
                                    data-map-marker="[[23.790546, 90.375583]]"></div>
                            </div>
                        </div>
                        <div class="post--info">
                            <ul class="nav meta">
                                <li>
                                    <a href="{{ url('tin/' . $news_item->id) }}">{{ $news_item->published_at }}</a>
                                </li>
                                <li>
                                    <a href="#">{{ $news_item->published_at }}</a>
                                </li>
                            </ul>
                            <div class="title">
                                <h2 class="h4">
                                    <a href="{{ url('tin/' . $news_item->id) }}" class="btn-link">{{ $news_item->content }}</a>
                                </h2>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            @endforeach
            {{-- <div class="col-md-6">
                <div class="row gutter--15">
                    <div class="col-xs-6 col-xss-12">
                        <div class="post--item post--layout-1 post--title-large">
                            <div class="post--img">
                                <a href="news-single-v1-boxed.html" class="thumb"><img
                                        src="/client/images/banner-02.jpg" alt="" /></a>
                                <a href="#" class="cat">Travel</a>
                                <a href="#" class="icon"><i class="fa fa-flash"></i></a>
                                <div class="post--info">
                                    <ul class="nav meta">
                                        <li>
                                            <a href="#">Corey I.
                                                Dean</a>
                                        </li>
                                        <li>
                                            <a href="#">20 April
                                                2017</a>
                                        </li>
                                    </ul>
                                    <div class="title">
                                        <h2 class="h4">
                                            <a href="news-single-v1-boxed.html" class="btn-link">{{ $news_item->content
                                                }}</a>
                                        </h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 hidden-xss">
                        <div class="post--item post--layout-1 post--title-large">
                            <div class="post--img">
                                <a href="news-single-v1-boxed.html" class="thumb"><img
                                        src="/client/images/banner-03.jpg" alt="" /></a>
                                <a href="#" class="cat">Education</a>
                                <a href="#" class="icon"><i class="fa fa-flash"></i></a>
                                <div class="post--map">
                                    <p class="btn-link">
                                        <i class="fa fa-map-o"></i>{{ $news_item->content }}
                                    </p>
                                    <div class="map--wrapper">
                                        <div data-map-latitude="23.790546" data-map-longitude="90.375583"
                                            data-map-zoom="6" data-map-marker="[[23.790546, 90.375583]]"></div>
                                    </div>
                                </div>
                                <div class="post--info">
                                    <ul class="nav meta">
                                        <li>
                                            <a href="#">Leraje</a>
                                        </li>
                                        <li>
                                            <a href="#">20 April
                                                2017</a>
                                        </li>
                                    </ul>
                                    <div class="title">
                                        <h2 class="h4">
                                            <a href="news-single-v1-boxed.html" class="btn-link">Lorem Ipsum
                                                is simply
                                                dummy text
                                                of the
                                                printing</a>
                                        </h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 hidden-sm hidden-xs">
                        <div class="post--item post--layout-1 post--title-larger">
                            <div class="post--img">
                                <a href="news-single-v1-boxed.html" class="thumb"><img
                                        src="/client/images/banner-04.jpg" alt="" /></a>
                                <a href="#" class="cat">Politics</a>
                                <a href="#" class="icon"><i class="fa fa-fire"></i></a>
                                <div class="post--info">
                                    <ul class="nav meta">
                                        <li>
                                            <a href="#">Balam</a>
                                        </li>
                                        <li>
                                            <a href="#">20 April
                                                2017</a>
                                        </li>
                                    </ul>
                                    <div class="title">
                                        <h2 class="h4">
                                            <a href="news-single-v1-boxed.html" class="btn-link">On the
                                                other hand,
                                                we denounce
                                                with
                                                righteous
                                                indignation
                                                and dislike
                                                men who are
                                                so beguiled
                                                and
                                                demoralized
                                                by the
                                                sure.</a>
                                        </h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
</div>
@endsection
