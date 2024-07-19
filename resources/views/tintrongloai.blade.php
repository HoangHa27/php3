
@extends('client.layouts.master')

@section('content')

@if ($news)
    <div class="col-md-6">
        <div class="post--item post--layout-1 post--title-larger">
            <div class="post--img">
                {{-- <a href="news-single-v1-boxed.html" class="thumb"><img src="/client/images/banner-01.jpg"
                        alt="" /></a> --}}
                <a href="article-1.html"><img src="{{ asset('/uploads/img-news/' . $news->image_url) }}"
                        data-src="{{ asset('/uploads/img-news/' . $news->image_url) }}"
                        class="card-img-top" width="900px" height="100px"> </a>
                {{-- <a href="#" class="cat">{{ $news->category_name }}</a> --}}
                <a href="#" class="icon"><i class="fa fa-flash"></i></a>
                <div class="post--map">
                    <p class="btn-link">
                        <i class="fa fa-map-o"></i>{{ $news->title }}
                    </p>
                    <div class="map--wrapper">
                        <div data-map-latitude="23.790546" data-map-longitude="90.375583" data-map-zoom="6"
                            data-map-marker="[[23.790546, 90.375583]]"></div>
                    </div>
                </div>
                <div class="post--info">
                    <ul class="nav meta">
                        <li>
                            <a href="#">{{ $news->published_at }}</a>
                        </li>
                        <li>
                            <a href="#">{{ $news->published_at }}</a>
                        </li>
                    </ul>
                    <div class="title">
                        <h2 class="h4">
                            <a href="news-single-v1-boxed.html" class="btn-link">{{ $news->content }}</a>
                        </h2>
                    </div>
                </div>
            </div>

        </div>
    </div>
@else
    <p>Không có dữ liệu tin tức để hiển thị.</p>
@endif

@endsection





