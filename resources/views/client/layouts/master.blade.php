<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>USNews - Multipurpose News, Magazine and Blog HTML5 Template</title>
    <meta name="author" content="ThemeLooks" />
    <meta name="description" content="USNews - Multipurpose News and Magazine Template" />
    <meta name="keywords"
        content="news, newspaper, magazine, blog, post, article, editorial, publishing, modern, responsive, html5, template" />
    @include('client.layouts.partials.css')
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script
    ><![endif]-->
</head>

<body class="boxed" data-bg-img="/client/img/bg-pattern.png">
    <div id="preloader">
        <div class="preloader bg--color-1--b" data-preloader="1">
            <div class="preloader--inner"></div>
        </div>
    </div>
    <div class="wrapper">
        <header class="header--section header--style-1">
            @include('client.layouts.partials.header-nav')
        </header>

        <div class="news--ticker">
            <div class="container">
                <div class="title">
                    <h2>News Updates</h2>
                    <span>(Update 12 minutes ago)</span>
                </div>
                <div class="news-updates--list" data-marquee="true">
                    @include('client.layouts.partials.qc')
                </div>
            </div>
        </div>
        <div class="main-content--section pbottom--30">
            <div class="container">
                @yield('content')
                <div class="row">
                    <div class="main--content col-md-8 col-sm-7" data-sticky-content="true">
                        <div class="sticky-content-inner">
                            <div class="row">
                                <div class="col-md-6 ptop--30 pbottom--30">
                                    <div class="post--items-title" data-ajax="tab">
                                        <h2 class="h4">Worlds News</h2>
                                        <div class="nav">
                                            <a href="#" class="prev btn-link"
                                                data-ajax-action="load_prev_world_news_posts">
                                                <i class="fa fa-long-arrow-left"></i>
                                            </a>
                                            <span class="divider">/</span>
                                            <a href="#" class="next btn-link"
                                                data-ajax-action="load_next_world_news_posts">
                                                <i class="fa fa-long-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="post--items post--items-2" data-ajax-content="outer">
                                        {{-- @foreach ($news->take(1) as $news_item) --}}
                                        <ul class="nav row gutter--15" data-ajax-content="inner">
                                            <li class="col-xs-12">
                                                <div class="post--item post--layout-1">
                                                    <div class="post--img">
                                                        <a href="news-single-v1-boxed.html" class="thumb"><img
                                                                src="/client/images/world-news-01.jpg" alt="" /></a>
                                                        <a href="#" class="cat">War</a>
                                                        <a href="#" class="icon"><i class="fa fa-flash"></i></a>
                                                        <div class="post--info">
                                                            <ul class="nav meta">
                                                                <li><a href="#">Astaroth</a></li>
                                                                <li><a href="#">Yeasterday 03:52 pm</a></li>
                                                            </ul>
                                                            <div class="title">
                                                                <h3 class="h4">
                                                                    <a href="news-single-v1-boxed.html"
                                                                        {{-- class="btn-link">{{ $news_item->content }}</a> --}}
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-xs-12">
                                                <hr class="divider" />
                                            </li>
                                            <li class="col-xs-6">
                                                <div class="post--item post--layout-2">
                                                    <div class="post--img">
                                                        <a href="news-single-v1-boxed.html" class="thumb"><img
                                                                src="/client/images/world-news-02.jpg" alt="" /></a>
                                                        <div class="post--info">
                                                            <ul class="nav meta">
                                                                <li><a href="#">Hantu Raya</a></li>
                                                                <li><a href="#">17 April 2017</a></li>
                                                            </ul>
                                                            <div class="title">
                                                                <h3 class="h4">
                                                                    <a href="news-single-v1-boxed.html"
                                                                        class="btn-link">It is a long established fact
                                                                        that a
                                                                        reader will done</a>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-xs-6">
                                                <div class="post--item post--layout-2">
                                                    <div class="post--img">
                                                        <a href="news-single-v1-boxed.html" class="thumb"><img
                                                                src="/client/images/world-news-03.jpg" alt="" /></a>
                                                        <div class="post--info">
                                                            <ul class="nav meta">
                                                                <li><a href="#">Astaroth</a></li>
                                                                <li><a href="#">17 April 2017</a></li>
                                                            </ul>
                                                            <div class="title">
                                                                <h3 class="h4">
                                                                    <a href="news-single-v1-boxed.html"
                                                                        class="btn-link">It is a long established fact
                                                                        that a
                                                                        reader will done</a>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-xs-12">
                                                <hr class="divider" />
                                            </li>
                                            <li class="col-xs-6">
                                                <div class="post--item post--layout-2">
                                                    <div class="post--img">
                                                        <a href="news-single-v1-boxed.html" class="thumb"><img
                                                                src="/client/images/world-news-04.jpg" alt="" /></a>
                                                        <div class="post--info">
                                                            <ul class="nav meta">
                                                                <li><a href="#">Astaroth</a></li>
                                                                <li><a href="#">17 April 2017</a></li>
                                                            </ul>
                                                            <div class="title">
                                                                <h3 class="h4">
                                                                    <a href="news-single-v1-boxed.html"
                                                                        class="btn-link">It is a long established fact
                                                                        that a
                                                                        reader will done</a>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-xs-6">
                                                <div class="post--item post--layout-2">
                                                    <div class="post--img">
                                                        <a href="news-single-v1-boxed.html" class="thumb"><img
                                                                src="/client/images/world-news-05.jpg" alt="" /></a>
                                                        <div class="post--info">
                                                            <ul class="nav meta">
                                                                <li><a href="#">Hantu Raya</a></li>
                                                                <li><a href="#">17 April 2017</a></li>
                                                            </ul>
                                                            <div class="title">
                                                                <h3 class="h4">
                                                                    <a href="news-single-v1-boxed.html"
                                                                        class="btn-link">It is a long established fact
                                                                        that a
                                                                        reader will done</a>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                        {{-- @endforeach --}}
                                        <div class="preloader bg--color-0--b" data-preloader="1">
                                            <div class="preloader--inner"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 ptop--30 pbottom--30">
                                    <div class="post--items-title" data-ajax="tab">
                                        <h2 class="h4">Technology</h2>
                                        <div class="nav">
                                            <a href="#" class="prev btn-link"
                                                data-ajax-action="load_prev_technology_posts">
                                                <i class="fa fa-long-arrow-left"></i>
                                            </a>
                                            <span class="divider">/</span>
                                            <a href="#" class="next btn-link"
                                                data-ajax-action="load_next_technology_posts">
                                                <i class="fa fa-long-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="post--items post--items-3" data-ajax-content="outer">
                                        <ul class="nav" data-ajax-content="inner">
                                            <li>
                                                <div class="post--item post--layout-1">
                                                    <div class="post--img">
                                                        <a href="news-single-v1-boxed.html" class="thumb"><img
                                                                src="/client/images/technology-01.jpg" alt="" /></a>
                                                        <a href="#" class="cat">Computer</a>
                                                        <a href="#" class="icon"><i class="fa fa-heart-o"></i></a>
                                                        <div class="post--info">
                                                            <ul class="nav meta">
                                                                <li><a href="#">Bathin</a></li>
                                                                <li><a href="#">Yeasterday 03:52 pm</a></li>
                                                            </ul>
                                                            <div class="title">
                                                                <h3 class="h4">
                                                                    <a href="news-single-v1-boxed.html"
                                                                        class="btn-link">It is a long established fact
                                                                        that a
                                                                        reader will be distracted by</a>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="post--item post--layout-3">
                                                    <div class="post--img">
                                                        <a href="news-single-v1-boxed.html" class="thumb"><img
                                                                src="/client/images/technology-02.jpg" alt="" /></a>
                                                        <div class="post--info">
                                                            <ul class="nav meta">
                                                                <li><a href="#">Bune</a></li>
                                                                <li><a href="#">16 April 2017</a></li>
                                                            </ul>
                                                            <div class="title">
                                                                <h3 class="h4">
                                                                    <a href="news-single-v1-boxed.html"
                                                                        class="btn-link">Long established fact that a
                                                                        reader will
                                                                        be distracted by the readable</a>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="post--item post--layout-3">
                                                    <div class="post--img">
                                                        <a href="news-single-v1-boxed.html" class="thumb"><img
                                                                src="/client/images/technology-03.jpg" alt="" /></a>
                                                        <div class="post--info">
                                                            <ul class="nav meta">
                                                                <li><a href="#">Bune</a></li>
                                                                <li><a href="#">16 April 2017</a></li>
                                                            </ul>
                                                            <div class="title">
                                                                <h3 class="h4">
                                                                    <a href="news-single-v1-boxed.html"
                                                                        class="btn-link">Long established fact that a
                                                                        reader will
                                                                        be distracted by the readable</a>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="post--item post--layout-3">
                                                    <div class="post--img">
                                                        <a href="news-single-v1-boxed.html" class="thumb"><img
                                                                src="/client/images/technology-04.jpg" alt="" /></a>
                                                        <div class="post--info">
                                                            <ul class="nav meta">
                                                                <li><a href="#">Bune</a></li>
                                                                <li><a href="#">16 April 2017</a></li>
                                                            </ul>
                                                            <div class="title">
                                                                <h3 class="h4">
                                                                    <a href="news-single-v1-boxed.html"
                                                                        class="btn-link">Long established fact that a
                                                                        reader will
                                                                        be distracted by the readable</a>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="post--item post--layout-3">
                                                    <div class="post--img">
                                                        <a href="news-single-v1-boxed.html" class="thumb"><img
                                                                src="/client/images/technology-05.jpg" alt="" /></a>
                                                        <div class="post--info">
                                                            <ul class="nav meta">
                                                                <li><a href="#">Bune</a></li>
                                                                <li><a href="#">16 April 2017</a></li>
                                                            </ul>
                                                            <div class="title">
                                                                <h3 class="h4">
                                                                    <a href="news-single-v1-boxed.html"
                                                                        class="btn-link">Long established fact that a
                                                                        reader will
                                                                        be distracted by the readable</a>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="preloader bg--color-0--b" data-preloader="1">
                                            <div class="preloader--inner"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 ptop--30 pbottom--30">
                                    <div class="ad--space">
                                        <a href="#">
                                            <img src="/client/images/ad-728x90-01.jpg" alt="" class="center-block" />
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-12 ptop--30 pbottom--30">
                                    <div class="post--items-title" data-ajax="tab">
                                        <h2 class="h4">Finance</h2>
                                        <div class="nav">
                                            <a href="#" class="prev btn-link"
                                                data-ajax-action="load_prev_finance_posts">
                                                <i class="fa fa-long-arrow-left"></i>
                                            </a>
                                            <span class="divider">/</span>
                                            <a href="#" class="next btn-link"
                                                data-ajax-action="load_next_finance_posts">
                                                <i class="fa fa-long-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="post--items post--items-2" data-ajax-content="outer">
                                        <ul class="nav row" data-ajax-content="inner">
                                            <li class="col-md-6">
                                                <div class="post--item post--layout-2">
                                                    <div class="post--img">
                                                        <a href="news-single-v1-boxed.html" class="thumb"><img
                                                                src="/client/images/finance-01.jpg" alt="" /></a>
                                                        <a href="#" class="cat">Business</a>
                                                        <a href="#" class="icon"><i class="fa fa-star-o"></i></a>
                                                        <div class="post--info">
                                                            <ul class="nav meta">
                                                                <li><a href="#">Vassago</a></li>
                                                                <li><a href="#">Today 03:30 am</a></li>
                                                            </ul>
                                                            <div class="title">
                                                                <h3 class="h4">
                                                                    <a href="news-single-v1-boxed.html"
                                                                        class="btn-link">At vero eos et accusamus et
                                                                        iusto odio
                                                                        dignissimos ducimus qui blanditiis
                                                                        praesentium voluptatum deleniti atque
                                                                        corrupti quos dolores et quas.</a>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-md-6">
                                                <ul class="nav row">
                                                    <li class="col-xs-12 hidden-md hidden-lg">
                                                        <hr class="divider" />
                                                    </li>
                                                    <li class="col-xs-6">
                                                        <div class="post--item post--layout-2">
                                                            <div class="post--img">
                                                                <a href="news-single-v1-boxed.html" class="thumb"><img
                                                                        src="/client/images/finance-02.jpg" alt="" /></a>
                                                                <div class="post--info">
                                                                    <ul class="nav meta">
                                                                        <li><a href="#">Zepar</a></li>
                                                                        <li><a href="#">Today 03:52 pm</a></li>
                                                                    </ul>
                                                                    <div class="title">
                                                                        <h3 class="h4">
                                                                            <a href="news-single-v1-boxed.html"
                                                                                class="btn-link">It is a long
                                                                                established fact that a
                                                                                reader will be</a>
                                                                        </h3>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="col-xs-6">
                                                        <div class="post--item post--layout-2">
                                                            <div class="post--img">
                                                                <a href="news-single-v1-boxed.html" class="thumb"><img
                                                                        src="/client/images/finance-03.jpg" alt="" /></a>
                                                                <div class="post--info">
                                                                    <ul class="nav meta">
                                                                        <li><a href="#">Demiurge</a></li>
                                                                        <li><a href="#">Today 03:02 pm</a></li>
                                                                    </ul>
                                                                    <div class="title">
                                                                        <h3 class="h4">
                                                                            <a href="news-single-v1-boxed.html"
                                                                                class="btn-link">It is a long
                                                                                established fact that a
                                                                                reader will be</a>
                                                                        </h3>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="col-xs-12">
                                                        <hr class="divider" />
                                                    </li>
                                                    <li class="col-xs-6">
                                                        <div class="post--item post--layout-2">
                                                            <div class="post--img">
                                                                <a href="news-single-v1-boxed.html" class="thumb"><img
                                                                        src="/client/images/finance-04.jpg" alt="" /></a>
                                                                <div class="post--info">
                                                                    <ul class="nav meta">
                                                                        <li><a href="#">Demiurge</a></li>
                                                                        <li><a href="#">Today 02:05 am</a></li>
                                                                    </ul>
                                                                    <div class="title">
                                                                        <h3 class="h4">
                                                                            <a href="news-single-v1-boxed.html"
                                                                                class="btn-link">It is a long
                                                                                established fact that a
                                                                                reader will be</a>
                                                                        </h3>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="col-xs-6">
                                                        <div class="post--item post--layout-2">
                                                            <div class="post--img">
                                                                <a href="news-single-v1-boxed.html" class="thumb"><img
                                                                        src="/client/images/finance-05.jpg" alt="" /></a>
                                                                <div class="post--info">
                                                                    <ul class="nav meta">
                                                                        <li><a href="#">Zepar</a></li>
                                                                        <li><a href="#">Today 12:35 am</a></li>
                                                                    </ul>
                                                                    <div class="title">
                                                                        <h3 class="h4">
                                                                            <a href="news-single-v1-boxed.html"
                                                                                class="btn-link">It is a long
                                                                                established fact that a
                                                                                reader will be</a>
                                                                        </h3>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                        <div class="preloader bg--color-0--b" data-preloader="1">
                                            <div class="preloader--inner"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 ptop--30 pbottom--30">
                                    <div class="post--items-title" data-ajax="tab">
                                        <h2 class="h4">Politics</h2>
                                        <div class="nav">
                                            <a href="#" class="prev btn-link"
                                                data-ajax-action="load_prev_politics_posts">
                                                <i class="fa fa-long-arrow-left"></i>
                                            </a>
                                            <span class="divider">/</span>
                                            <a href="#" class="next btn-link"
                                                data-ajax-action="load_next_politics_posts">
                                                <i class="fa fa-long-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="post--items post--items-2" data-ajax-content="outer">
                                        <ul class="nav row gutter--15" data-ajax-content="inner">
                                            <li class="col-xs-12">
                                                <div class="post--item post--layout-1">
                                                    <div class="post--img">
                                                        <a href="news-single-v1-boxed.html" class="thumb"><img
                                                                src="/client/images/politics-01.jpg" alt="" /></a>
                                                        <a href="#" class="cat">Election</a>
                                                        <a href="#" class="icon"><i class="fa fa-fire"></i></a>
                                                        <div class="post--info">
                                                            <ul class="nav meta">
                                                                <li><a href="#">Astaroth</a></li>
                                                                <li><a href="#">Yeasterday 03:52 pm</a></li>
                                                            </ul>
                                                            <div class="title">
                                                                <h3 class="h4">
                                                                    <a href="news-single-v1-boxed.html"
                                                                        class="btn-link">It is a long established fact
                                                                        that a
                                                                        reader will be distracted by</a>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-xs-12">
                                                <hr class="divider" />
                                            </li>
                                            <li class="col-xs-6">
                                                <div class="post--item post--layout-2">
                                                    <div class="post--img">
                                                        <a href="news-single-v1-boxed.html" class="thumb"><img
                                                                src="/client/images/politics-02.jpg" alt="" /></a>
                                                        <div class="post--info">
                                                            <ul class="nav meta">
                                                                <li><a href="#">Hantu Raya</a></li>
                                                                <li><a href="#">17 April 2017</a></li>
                                                            </ul>
                                                            <div class="title">
                                                                <h3 class="h4">
                                                                    <a href="news-single-v1-boxed.html"
                                                                        class="btn-link">It is a long established fact
                                                                        that a
                                                                        reader will done</a>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-xs-6">
                                                <div class="post--item post--layout-2">
                                                    <div class="post--img">
                                                        <a href="news-single-v1-boxed.html" class="thumb"><img
                                                                src="/client/images/politics-03.jpg" alt="" /></a>
                                                        <div class="post--info">
                                                            <ul class="nav meta">
                                                                <li><a href="#">Astaroth</a></li>
                                                                <li><a href="#">17 April 2017</a></li>
                                                            </ul>
                                                            <div class="title">
                                                                <h3 class="h4">
                                                                    <a href="news-single-v1-boxed.html"
                                                                        class="btn-link">It is a long established fact
                                                                        that a
                                                                        reader will done</a>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-xs-12">
                                                <hr class="divider" />
                                            </li>
                                            <li class="col-xs-6">
                                                <div class="post--item post--layout-2">
                                                    <div class="post--img">
                                                        <a href="news-single-v1-boxed.html" class="thumb"><img
                                                                src="/client/images/politics-04.jpg" alt="" /></a>
                                                        <div class="post--info">
                                                            <ul class="nav meta">
                                                                <li><a href="#">Astaroth</a></li>
                                                                <li><a href="#">17 April 2017</a></li>
                                                            </ul>
                                                            <div class="title">
                                                                <h3 class="h4">
                                                                    <a href="news-single-v1-boxed.html"
                                                                        class="btn-link">It is a long established fact
                                                                        that a
                                                                        reader will done</a>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-xs-6">
                                                <div class="post--item post--layout-2">
                                                    <div class="post--img">
                                                        <a href="news-single-v1-boxed.html" class="thumb"><img
                                                                src="/client/images/politics-05.jpg" alt="" /></a>
                                                        <div class="post--info">
                                                            <ul class="nav meta">
                                                                <li><a href="#">Hantu Raya</a></li>
                                                                <li><a href="#">17 April 2017</a></li>
                                                            </ul>
                                                            <div class="title">
                                                                <h3 class="h4">
                                                                    <a href="news-single-v1-boxed.html"
                                                                        class="btn-link">It is a long established fact
                                                                        that a
                                                                        reader will done</a>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="preloader bg--color-0--b" data-preloader="1">
                                            <div class="preloader--inner"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 ptop--30 pbottom--30">
                                    <div class="post--items-title" data-ajax="tab">
                                        <h2 class="h4">Sports</h2>
                                        <div class="nav">
                                            <a href="#" class="prev btn-link" data-ajax-action="load_prev_sports_posts">
                                                <i class="fa fa-long-arrow-left"></i>
                                            </a>
                                            <span class="divider">/</span>
                                            <a href="#" class="next btn-link" data-ajax-action="load_next_sports_posts">
                                                <i class="fa fa-long-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="post--items post--items-3" data-ajax-content="outer">
                                        <ul class="nav" data-ajax-content="inner">
                                            <li>
                                                <div class="post--item post--layout-1">
                                                    <div class="post--img">
                                                        <a href="news-single-v1-boxed.html" class="thumb"><img
                                                                src="/client/images/sports-01.jpg" alt="" /></a>
                                                        <a href="#" class="cat">Basketball</a>
                                                        <a href="#" class="icon"><i class="fa fa-eye"></i></a>
                                                        <div class="post--info">
                                                            <ul class="nav meta">
                                                                <li><a href="#">Bathin</a></li>
                                                                <li><a href="#">Yeasterday 03:52 pm</a></li>
                                                            </ul>
                                                            <div class="title">
                                                                <h3 class="h4">
                                                                    <a href="news-single-v1-boxed.html"
                                                                        class="btn-link">It is a long established fact
                                                                        that a
                                                                        reader will be distracted by</a>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="post--item post--layout-3">
                                                    <div class="post--img">
                                                        <a href="news-single-v1-boxed.html" class="thumb"><img
                                                                src="/client/images/sports-02.jpg" alt="" /></a>
                                                        <div class="post--info">
                                                            <ul class="nav meta">
                                                                <li><a href="#">Bune</a></li>
                                                                <li><a href="#">16 April 2017</a></li>
                                                            </ul>
                                                            <div class="title">
                                                                <h3 class="h4">
                                                                    <a href="news-single-v1-boxed.html"
                                                                        class="btn-link">Long established fact that a
                                                                        reader will
                                                                        be distracted by the readable</a>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="post--item post--layout-3">
                                                    <div class="post--img">
                                                        <a href="news-single-v1-boxed.html" class="thumb"><img
                                                                src="/client/images/sports-03.jpg" alt="" /></a>
                                                        <div class="post--info">
                                                            <ul class="nav meta">
                                                                <li><a href="#">Bune</a></li>
                                                                <li><a href="#">16 April 2017</a></li>
                                                            </ul>
                                                            <div class="title">
                                                                <h3 class="h4">
                                                                    <a href="news-single-v1-boxed.html"
                                                                        class="btn-link">Long established fact that a
                                                                        reader will
                                                                        be distracted by the readable</a>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="post--item post--layout-3">
                                                    <div class="post--img">
                                                        <a href="news-single-v1-boxed.html" class="thumb"><img
                                                                src="/client/images/sports-04.jpg" alt="" /></a>
                                                        <div class="post--info">
                                                            <ul class="nav meta">
                                                                <li><a href="#">Bune</a></li>
                                                                <li><a href="#">16 April 2017</a></li>
                                                            </ul>
                                                            <div class="title">
                                                                <h3 class="h4">
                                                                    <a href="news-single-v1-boxed.html"
                                                                        class="btn-link">Long established fact that a
                                                                        reader will
                                                                        be distracted by the readable</a>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="post--item post--layout-3">
                                                    <div class="post--img">
                                                        <a href="news-single-v1-boxed.html" class="thumb"><img
                                                                src="images/sports-05.jpg" alt="" /></a>
                                                        <div class="post--info">
                                                            <ul class="nav meta">
                                                                <li><a href="#">Bune</a></li>
                                                                <li><a href="#">16 April 2017</a></li>
                                                            </ul>
                                                            <div class="title">
                                                                <h3 class="h4">
                                                                    <a href="news-single-v1-boxed.html"
                                                                        class="btn-link">Long established fact that a
                                                                        reader will
                                                                        be distracted by the readable</a>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="preloader bg--color-0--b" data-preloader="1">
                                            <div class="preloader--inner"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="main--sidebar col-md-4 col-sm-5 ptop--30 pbottom--30" data-sticky-content="true">
                        <div class="sticky-content-inner">
                            <div class="widget">
                                <div class="ad--widget">
                                    <a href="#">
                                        <img src="images/ad-300x250-1.jpg" alt="" />
                                    </a>
                                </div>
                            </div>
                            <div class="widget">
                                <div class="widget--title">
                                    <h2 class="h4">Stay Connected</h2>
                                    <i class="icon fa fa-share-alt"></i>
                                </div>
                                <div class="social--widget style--1">
                                    <ul class="nav">
                                        <li class="facebook">
                                            <a href="#">
                                                <span class="icon"><i class="fa fa-facebook-f"></i></span>
                                                <span class="count">521</span>
                                                <span class="title">Likes</span>
                                            </a>
                                        </li>
                                        <li class="twitter">
                                            <a href="#">
                                                <span class="icon"><i class="fa fa-twitter"></i></span>
                                                <span class="count">3297</span>
                                                <span class="title">Followers</span>
                                            </a>
                                        </li>
                                        <li class="google-plus">
                                            <a href="#">
                                                <span class="icon"><i class="fa fa-google-plus"></i></span>
                                                <span class="count">596282</span>
                                                <span class="title">Followers</span>
                                            </a>
                                        </li>
                                        <li class="rss">
                                            <a href="#">
                                                <span class="icon"><i class="fa fa-rss"></i></span>
                                                <span class="count">521</span>
                                                <span class="title">Subscriber</span>
                                            </a>
                                        </li>
                                        <li class="vimeo">
                                            <a href="#">
                                                <span class="icon"><i class="fa fa-vimeo"></i></span>
                                                <span class="count">3297</span>
                                                <span class="title">Followers</span>
                                            </a>
                                        </li>
                                        <li class="youtube">
                                            <a href="#">
                                                <span class="icon"><i class="fa fa-youtube-square"></i></span>
                                                <span class="count">596282</span>
                                                <span class="title">Subscriber</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="widget">
                                <div class="widget--title">
                                    <h2 class="h4">Get Newsletter</h2>
                                    <i class="icon fa fa-envelope-open-o"></i>
                                </div>
                                <div class="subscribe--widget">
                                    <div class="content">
                                        <p>
                                            Subscribe to our newsletter to get latest news, popular
                                            news and exclusive updates.
                                        </p>
                                    </div>
                                    <form
                                        action="https://themelooks.us13.list-manage.com/subscribe/post?u=79f0b132ec25ee223bb41835f&amp;id=f4e0e93d1d"
                                        method="post" name="mc-embedded-subscribe-form" target="_blank"
                                        data-form="mailchimpAjax">
                                        <div class="input-group">
                                            <input type="email" name="EMAIL" placeholder="E-mail address"
                                                class="form-control" autocomplete="off" required="" />
                                            <div class="input-group-btn">
                                                <button type="submit" class="btn btn-lg btn-default active">
                                                    <i class="fa fa-paper-plane-o"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="status"></div>
                                    </form>
                                </div>
                            </div>
                            <div class="widget">
                                <div class="widget--title">
                                    <h2 class="h4">Featured News</h2>
                                    <i class="icon fa fa-newspaper-o"></i>
                                </div>
                                <div class="list--widget list--widget-1">
                                    <div class="list--widget-nav" data-ajax="tab">
                                        <ul class="nav nav-justified">
                                            <li>
                                                <a href="#" data-ajax-action="load_widget_hot_news">Hot News</a>
                                            </li>
                                            <li class="active">
                                                <a href="#" data-ajax-action="load_widget_trendy_news">Trendy News</a>
                                            </li>
                                            <li>
                                                <a href="#" data-ajax-action="load_widget_most_watched">Most Watched</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="post--items post--items-3" data-ajax-content="outer">
                                        <ul class="nav" data-ajax-content="inner">
                                            <li>
                                                <div class="post--item post--layout-3">
                                                    <div class="post--img">
                                                        <a href="news-single-v1-boxed.html" class="thumb"><img
                                                                src="images/news-widget-01.jpg" alt="" /></a>
                                                        <div class="post--info">
                                                            <ul class="nav meta">
                                                                <li><a href="#">Ninurta</a></li>
                                                                <li><a href="#">16 April 2017</a></li>
                                                            </ul>
                                                            <div class="title">
                                                                <h3 class="h4">
                                                                    <a href="news-single-v1-boxed.html"
                                                                        class="btn-link">Long established fact that a
                                                                        reader will
                                                                        be distracted</a>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="post--item post--layout-3">
                                                    <div class="post--img">
                                                        <a href="news-single-v1-boxed.html" class="thumb"><img
                                                                src="images/news-widget-02.jpg" alt="" /></a>
                                                        <div class="post--info">
                                                            <ul class="nav meta">
                                                                <li><a href="#">Orcus</a></li>
                                                                <li><a href="#">16 April 2017</a></li>
                                                            </ul>
                                                            <div class="title">
                                                                <h3 class="h4">
                                                                    <a href="news-single-v1-boxed.html"
                                                                        class="btn-link">Long established fact that a
                                                                        reader will
                                                                        be distracted</a>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="post--item post--layout-3">
                                                    <div class="post--img">
                                                        <a href="news-single-v1-boxed.html" class="thumb"><img
                                                                src="images/news-widget-03.jpg" alt="" /></a>
                                                        <div class="post--info">
                                                            <ul class="nav meta">
                                                                <li><a href="#">Rahab</a></li>
                                                                <li><a href="#">16 April 2017</a></li>
                                                            </ul>
                                                            <div class="title">
                                                                <h3 class="h4">
                                                                    <a href="news-single-v1-boxed.html"
                                                                        class="btn-link">Long established fact that a
                                                                        reader will
                                                                        be distracted</a>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="post--item post--layout-3">
                                                    <div class="post--img">
                                                        <a href="news-single-v1-boxed.html" class="thumb"><img
                                                                src="images/news-widget-04.jpg" alt="" /></a>
                                                        <div class="post--info">
                                                            <ul class="nav meta">
                                                                <li><a href="#">Tannin</a></li>
                                                                <li><a href="#">16 April 2017</a></li>
                                                            </ul>
                                                            <div class="title">
                                                                <h3 class="h4">
                                                                    <a href="news-single-v1-boxed.html"
                                                                        class="btn-link">Long established fact that a
                                                                        reader will
                                                                        be distracted</a>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="preloader bg--color-0--b" data-preloader="1">
                                            <div class="preloader--inner"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="widget">
                                <div class="widget--title">
                                    <h2 class="h4">Advertisement</h2>
                                    <i class="icon fa fa-bullhorn"></i>
                                </div>
                                <div class="ad--widget">
                                    <a href="#">
                                        <img src="images/ad-300x250-2.jpg" alt="" />
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="main--content pd--30-0">
                    <div class="post--items-title" data-ajax="tab">
                        <h2 class="h4">Audio &amp; Videos</h2>
                        <div class="nav">
                            <a href="#" class="prev btn-link" data-ajax-action="load_prev_audio_video_posts">
                                <i class="fa fa-long-arrow-left"></i>
                            </a>
                            <span class="divider">/</span>
                            <a href="#" class="next btn-link" data-ajax-action="load_next_audio_video_posts">
                                <i class="fa fa-long-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="post--items post--items-4" data-ajax-content="outer">
                        <ul class="nav row" data-ajax-content="inner">
                            <li class="col-md-8">
                                <div class="post--item post--layout-1 post--type-video post--title-large">
                                    <div class="post--img">
                                        <a href="news-single-v1-boxed.html" class="thumb"><img
                                                src="images/audio-video-01.jpg" alt="" /></a>
                                        <a href="#" class="cat">Wave</a>
                                        <a href="#" class="icon"><i class="fa fa-eye"></i></a>
                                        <div class="post--info">
                                            <ul class="nav meta">
                                                <li><a href="#">Succubus</a></li>
                                                <li><a href="#">Today 03:52 pm</a></li>
                                            </ul>
                                            <div class="title">
                                                <h2 class="h4">
                                                    <a href="news-single-v1-boxed.html" class="btn-link">Standard chunk
                                                        of Lorem Ipsum used since the
                                                        1500s is reproduced below for those interested.
                                                        Sections 1.10.32 and 1.10.33 from "de Finibus
                                                        Bonorum</a>
                                                </h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr class="divider hidden-md hidden-lg" />
                            </li>
                            <li class="col-md-4">
                                <ul class="nav">
                                    <li>
                                        <div class="post--item post--type-audio post--layout-3">
                                            <div class="post--img">
                                                <a href="news-single-v1-boxed.html" class="thumb"><img
                                                        src="images/audio-video-02.jpg" alt="" /></a>
                                                <div class="post--info">
                                                    <ul class="nav meta">
                                                        <li><a href="#">Maclaan John</a></li>
                                                        <li><a href="#">16 April 2017</a></li>
                                                    </ul>
                                                    <div class="title">
                                                        <h3 class="h4">
                                                            <a href="news-single-v1-boxed.html" class="btn-link">Long
                                                                established fact that a reader will be
                                                                distracted by the readable</a>
                                                        </h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="post--item post--type-video post--layout-3">
                                            <div class="post--img">
                                                <a href="news-single-v1-boxed.html" class="thumb"><img
                                                        src="images/audio-video-03.jpg" alt="" /></a>
                                                <div class="post--info">
                                                    <ul class="nav meta">
                                                        <li><a href="#">Maclaan John</a></li>
                                                        <li><a href="#">16 April 2017</a></li>
                                                    </ul>
                                                    <div class="title">
                                                        <h3 class="h4">
                                                            <a href="news-single-v1-boxed.html" class="btn-link">Long
                                                                established fact that a reader will be
                                                                distracted by the readable</a>
                                                        </h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="post--item post--type-video post--layout-3">
                                            <div class="post--img">
                                                <a href="news-single-v1-boxed.html" class="thumb"><img
                                                        src="images/audio-video-04.jpg" alt="" /></a>
                                                <div class="post--info">
                                                    <ul class="nav meta">
                                                        <li><a href="#">Maclaan John</a></li>
                                                        <li><a href="#">16 April 2017</a></li>
                                                    </ul>
                                                    <div class="title">
                                                        <h3 class="h4">
                                                            <a href="news-single-v1-boxed.html" class="btn-link">Long
                                                                established fact that a reader will be
                                                                distracted by the readable</a>
                                                        </h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="post--item post--type-audio post--layout-3">
                                            <div class="post--img">
                                                <a href="news-single-v1-boxed.html" class="thumb"><img
                                                        src="images/audio-video-05.jpg" alt="" /></a>
                                                <div class="post--info">
                                                    <ul class="nav meta">
                                                        <li><a href="#">Maclaan John</a></li>
                                                        <li><a href="#">16 April 2017</a></li>
                                                    </ul>
                                                    <div class="title">
                                                        <h3 class="h4">
                                                            <a href="news-single-v1-boxed.html" class="btn-link">Long
                                                                established fact that a reader will be
                                                                distracted by the readable</a>
                                                        </h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <div class="preloader bg--color-0--b" data-preloader="1">
                            <div class="preloader--inner"></div>
                        </div>
                    </div>
                </div>
                <div class="ad--space pd--30-0">
                    <a href="#">
                        <img src="images/ad-970x90.jpg" alt="" class="center-block" />
                    </a>
                </div>
                <div class="row">
                    <div class="main--content col-md-8 col-sm-7" data-sticky-content="true">
                        <div class="sticky-content-inner">
                            <div class="row">
                                <div class="col-md-6 ptop--30 pbottom--30">
                                    <div class="post--items-title" data-ajax="tab">
                                        <h2 class="h4">Health &amp; fitness</h2>
                                        <div class="nav">
                                            <a href="#" class="prev btn-link"
                                                data-ajax-action="load_prev_health_fitness_posts">
                                                <i class="fa fa-long-arrow-left"></i>
                                            </a>
                                            <span class="divider">/</span>
                                            <a href="#" class="next btn-link"
                                                data-ajax-action="load_next_health_fitness_posts">
                                                <i class="fa fa-long-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="post--items post--items-3" data-ajax-content="outer">
                                        <ul class="nav" data-ajax-content="inner">
                                            <li>
                                                <div class="post--item post--layout-1">
                                                    <div class="post--img">
                                                        <a href="news-single-v1-boxed.html" class="thumb"><img
                                                                src="images/health-and-fitness-01.jpg" alt="" /></a>
                                                        <a href="#" class="cat">Business</a>
                                                        <a href="#" class="icon"><i class="fa fa-star-o"></i></a>
                                                        <div class="post--info">
                                                            <ul class="nav meta">
                                                                <li><a href="#">Bathin</a></li>
                                                                <li><a href="#">Yeasterday 03:52 pm</a></li>
                                                            </ul>
                                                            <div class="title">
                                                                <h3 class="h4">
                                                                    <a href="news-single-v1-boxed.html"
                                                                        class="btn-link">It is a long established fact
                                                                        that a
                                                                        reader will be distracted by</a>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="post--item post--layout-3">
                                                    <div class="post--img">
                                                        <a href="news-single-v1-boxed.html" class="thumb"><img
                                                                src="images/health-and-fitness-02.jpg" alt="" /></a>
                                                        <div class="post--info">
                                                            <ul class="nav meta">
                                                                <li><a href="#">Maclaan John</a></li>
                                                                <li><a href="#">16 April 2017</a></li>
                                                            </ul>
                                                            <div class="title">
                                                                <h3 class="h4">
                                                                    <a href="news-single-v1-boxed.html"
                                                                        class="btn-link">Established fact that a reader
                                                                        will be
                                                                        distracted by the readable content</a>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="post--item post--layout-3">
                                                    <div class="post--img">
                                                        <a href="news-single-v1-boxed.html" class="thumb"><img
                                                                src="images/health-and-fitness-03.jpg" alt="" /></a>
                                                        <div class="post--info">
                                                            <ul class="nav meta">
                                                                <li><a href="#">Ziminiar</a></li>
                                                                <li><a href="#">16 April 2017</a></li>
                                                            </ul>
                                                            <div class="title">
                                                                <h3 class="h4">
                                                                    <a href="news-single-v1-boxed.html"
                                                                        class="btn-link">Long established fact that a
                                                                        reader will
                                                                        be distracted by the readable</a>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="post--item post--layout-3">
                                                    <div class="post--img">
                                                        <a href="news-single-v1-boxed.html" class="thumb"><img
                                                                src="images/health-and-fitness-04.jpg" alt="" /></a>
                                                        <div class="post--info">
                                                            <ul class="nav meta">
                                                                <li><a href="#">Vanth</a></li>
                                                                <li><a href="#">16 April 2017</a></li>
                                                            </ul>
                                                            <div class="title">
                                                                <h3 class="h4">
                                                                    <a href="news-single-v1-boxed.html"
                                                                        class="btn-link">Long established fact that a
                                                                        reader will
                                                                        be distracted by the readable</a>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="post--item post--layout-3">
                                                    <div class="post--img">
                                                        <a href="news-single-v1-boxed.html" class="thumb"><img
                                                                src="images/health-and-fitness-05.jpg" alt="" /></a>
                                                        <div class="post--info">
                                                            <ul class="nav meta">
                                                                <li><a href="#">Vanth</a></li>
                                                                <li><a href="#">16 April 2017</a></li>
                                                            </ul>
                                                            <div class="title">
                                                                <h3 class="h4">
                                                                    <a href="news-single-v1-boxed.html"
                                                                        class="btn-link">Long established fact that a
                                                                        reader will
                                                                        be distracted by the readable</a>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="preloader bg--color-0--b" data-preloader="1">
                                            <div class="preloader--inner"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 ptop--30 pbottom--30">
                                    <div class="post--items-title" data-ajax="tab">
                                        <h2 class="h4">Lifestyle</h2>
                                        <div class="nav">
                                            <a href="#" class="prev btn-link"
                                                data-ajax-action="load_prev_lifestyle_posts">
                                                <i class="fa fa-long-arrow-left"></i>
                                            </a>
                                            <span class="divider">/</span>
                                            <a href="#" class="next btn-link"
                                                data-ajax-action="load_next_lifestyle_posts">
                                                <i class="fa fa-long-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="post--items post--items-2" data-ajax-content="outer">
                                        <ul class="nav row gutter--15" data-ajax-content="inner">
                                            <li class="col-xs-12">
                                                <div class="post--item post--layout-1">
                                                    <div class="post--img">
                                                        <a href="news-single-v1-boxed.html" class="thumb"><img
                                                                src="images/lifestyle-01.jpg" alt="" /></a>
                                                        <a href="#" class="cat">Fashion</a>
                                                        <a href="#" class="icon"><i class="fa fa-heart-o"></i></a>
                                                        <div class="post--info">
                                                            <ul class="nav meta">
                                                                <li><a href="#">Astaroth</a></li>
                                                                <li><a href="#">Yeasterday 03:52 pm</a></li>
                                                            </ul>
                                                            <div class="title">
                                                                <h3 class="h4">
                                                                    <a href="news-single-v1-boxed.html"
                                                                        class="btn-link">Siriya attaced by a long
                                                                        established fact
                                                                        that a reader will be distracted by</a>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-xs-12">
                                                <hr class="divider" />
                                            </li>
                                            <li class="col-xs-6">
                                                <div class="post--item post--layout-2">
                                                    <div class="post--img">
                                                        <a href="news-single-v1-boxed.html" class="thumb"><img
                                                                src="images/lifestyle-02.jpg" alt="" /></a>
                                                        <div class="post--info">
                                                            <ul class="nav meta">
                                                                <li><a href="#">Astaroth</a></li>
                                                                <li><a href="#">17 April 2017</a></li>
                                                            </ul>
                                                            <div class="title">
                                                                <h3 class="h4">
                                                                    <a href="news-single-v1-boxed.html"
                                                                        class="btn-link">It is a long established fact
                                                                        that a
                                                                        reader will done</a>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-xs-6">
                                                <div class="post--item post--layout-2">
                                                    <div class="post--img">
                                                        <a href="news-single-v1-boxed.html" class="thumb"><img
                                                                src="images/lifestyle-03.jpg" alt="" /></a>
                                                        <div class="post--info">
                                                            <ul class="nav meta">
                                                                <li><a href="#">Astaroth</a></li>
                                                                <li><a href="#">17 April 2017</a></li>
                                                            </ul>
                                                            <div class="title">
                                                                <h3 class="h4">
                                                                    <a href="news-single-v1-boxed.html"
                                                                        class="btn-link">It is a long established fact
                                                                        that a
                                                                        reader will done</a>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-xs-12">
                                                <hr class="divider" />
                                            </li>
                                            <li class="col-xs-6">
                                                <div class="post--item post--layout-2">
                                                    <div class="post--img">
                                                        <a href="news-single-v1-boxed.html" class="thumb"><img
                                                                src="images/lifestyle-04.jpg" alt="" /></a>
                                                        <div class="post--info">
                                                            <ul class="nav meta">
                                                                <li><a href="#">Astaroth</a></li>
                                                                <li><a href="#">17 April 2017</a></li>
                                                            </ul>
                                                            <div class="title">
                                                                <h3 class="h4">
                                                                    <a href="news-single-v1-boxed.html"
                                                                        class="btn-link">It is a long established fact
                                                                        that a
                                                                        reader will done</a>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-xs-6">
                                                <div class="post--item post--layout-2">
                                                    <div class="post--img">
                                                        <a href="news-single-v1-boxed.html" class="thumb"><img
                                                                src="images/lifestyle-05.jpg" alt="" /></a>
                                                        <div class="post--info">
                                                            <ul class="nav meta">
                                                                <li><a href="#">Astaroth</a></li>
                                                                <li><a href="#">17 April 2017</a></li>
                                                            </ul>
                                                            <div class="title">
                                                                <h3 class="h4">
                                                                    <a href="news-single-v1-boxed.html"
                                                                        class="btn-link">It is a long established fact
                                                                        that a
                                                                        reader will done</a>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="preloader bg--color-0--b" data-preloader="1">
                                            <div class="preloader--inner"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 ptop--30 pbottom--30">
                                    <div class="post--items-title" data-ajax="tab">
                                        <h2 class="h4">Foods &amp; Recipes</h2>
                                        <div class="nav">
                                            <a href="#" class="prev btn-link"
                                                data-ajax-action="load_prev_food_resturent_posts">
                                                <i class="fa fa-long-arrow-left"></i>
                                            </a>
                                            <span class="divider">/</span>
                                            <a href="#" class="next btn-link"
                                                data-ajax-action="load_next_food_resturent_posts">
                                                <i class="fa fa-long-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="post--items" data-ajax-content="outer">
                                        <ul class="nav row gutter--15" data-ajax-content="inner">
                                            <li class="col-md-4 col-xs-6 col-xxs-12">
                                                <div class="post--item post--layout-1">
                                                    <div class="post--img">
                                                        <a href="news-single-v1-boxed.html" class="thumb"><img
                                                                src="images/food-and-resturent-01.jpg" alt="" /></a>
                                                        <div class="post--info">
                                                            <ul class="nav meta">
                                                                <li><a href="#">Astaroth</a></li>
                                                                <li><a href="#">Yeasterday 03:52 pm</a></li>
                                                            </ul>
                                                            <div class="title">
                                                                <h3 class="h4">
                                                                    <a href="news-single-v1-boxed.html"
                                                                        class="btn-link">It is a long established fact
                                                                        that a
                                                                        reader will be distracted by</a>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-xs-12 hidden shown-xxs">
                                                <hr class="divider" />
                                            </li>
                                            <li class="col-md-4 col-xs-6 col-xxs-12">
                                                <div class="post--item post--layout-1">
                                                    <div class="post--img">
                                                        <a href="news-single-v1-boxed.html" class="thumb"><img
                                                                src="images/food-and-resturent-02.jpg" alt="" /></a>
                                                        <div class="post--info">
                                                            <ul class="nav meta">
                                                                <li><a href="#">Astaroth</a></li>
                                                                <li><a href="#">Yeasterday 03:52 pm</a></li>
                                                            </ul>
                                                            <div class="title">
                                                                <h3 class="h4">
                                                                    <a href="news-single-v1-boxed.html"
                                                                        class="btn-link">It is a long established fact
                                                                        that a
                                                                        reader will be distracted by</a>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-md-4 hidden-sm hidden-xs">
                                                <div class="post--item post--layout-1">
                                                    <div class="post--img">
                                                        <a href="news-single-v1-boxed.html" class="thumb"><img
                                                                src="images/food-and-resturent-03.jpg" alt="" /></a>
                                                        <div class="post--info">
                                                            <ul class="nav meta">
                                                                <li><a href="#">Astaroth</a></li>
                                                                <li><a href="#">Yeasterday 03:52 pm</a></li>
                                                            </ul>
                                                            <div class="title">
                                                                <h3 class="h4">
                                                                    <a href="news-single-v1-boxed.html"
                                                                        class="btn-link">It is a long established fact
                                                                        that a
                                                                        reader will be distracted by</a>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="preloader bg--color-0--b" data-preloader="1">
                                            <div class="preloader--inner"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 ptop--30 pbottom--30">
                                    <div class="post--items-title" data-ajax="tab">
                                        <h2 class="h4">Photo Gallery</h2>
                                        <div class="nav">
                                            <a href="#" class="prev btn-link"
                                                data-ajax-action="load_prev_photo_gallery_posts">
                                                <i class="fa fa-long-arrow-left"></i>
                                            </a>
                                            <span class="divider">/</span>
                                            <a href="#" class="next btn-link"
                                                data-ajax-action="load_next_photo_gallery_posts">
                                                <i class="fa fa-long-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="post--items post--items-1" data-ajax-content="outer">
                                        <ul class="nav row gutter--15" data-ajax-content="inner">
                                            <li class="col-md-12">
                                                <div class="post--item post--layout-1 post--title-large">
                                                    <div class="post--img">
                                                        <a href="news-single-v1-boxed.html" class="thumb"><img
                                                                src="images/photo-gallery-01.jpg" alt="" /></a>
                                                        <a href="#" class="cat">Serfer</a>
                                                        <a href="#" class="icon"><i class="fa fa-eye"></i></a>
                                                        <div class="post--info">
                                                            <ul class="nav meta">
                                                                <li><a href="#">Astaroth</a></li>
                                                                <li><a href="#">Today 05:52 pm</a></li>
                                                            </ul>
                                                            <div class="title text-xxs-ellipsis">
                                                                <h2 class="h4">
                                                                    <a href="news-single-v1-boxed.html"
                                                                        class="btn-link">Standard chunk of Lorem Ipsum
                                                                        used since
                                                                        the 1500s is reproduced below for those
                                                                        interested. Sections 1.10.32 and 1.10.33
                                                                        from "de Finibus Bonorum</a>
                                                                </h2>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-md-4 col-xs-6 col-xxs-12">
                                                <div class="post--item post--layout-1">
                                                    <div class="post--img">
                                                        <a href="news-single-v1-boxed.html" class="thumb"><img
                                                                src="images/photo-gallery-02.jpg" alt="" /></a>
                                                        <div class="post--info">
                                                            <ul class="nav meta">
                                                                <li><a href="#">Astaroth</a></li>
                                                                <li><a href="#">Today 03:52 pm</a></li>
                                                            </ul>
                                                            <div class="title">
                                                                <h2 class="h4">
                                                                    <a href="news-single-v1-boxed.html"
                                                                        class="btn-link">It is a long established fact
                                                                        that a
                                                                        reader will be distracted by</a>
                                                                </h2>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-md-4 col-xs-6 col-xxs-12">
                                                <div class="post--item post--layout-1">
                                                    <div class="post--img">
                                                        <a href="news-single-v1-boxed.html" class="thumb"><img
                                                                src="images/photo-gallery-03.jpg" alt="" /></a>
                                                        <div class="post--info">
                                                            <ul class="nav meta">
                                                                <li><a href="#">Astaroth</a></li>
                                                                <li><a href="#">Today 03:52 pm</a></li>
                                                            </ul>
                                                            <div class="title">
                                                                <h2 class="h4">
                                                                    <a href="news-single-v1-boxed.html"
                                                                        class="btn-link">It is a long established fact
                                                                        that a
                                                                        reader will be distracted by</a>
                                                                </h2>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-md-4 hidden-sm hidden-xs">
                                                <div class="post--item post--layout-1">
                                                    <div class="post--img">
                                                        <a href="news-single-v1-boxed.html" class="thumb"><img
                                                                src="images/photo-gallery-04.jpg" alt="" /></a>
                                                        <div class="post--info">
                                                            <ul class="nav meta">
                                                                <li><a href="#">Astaroth</a></li>
                                                                <li><a href="#">Today 03:52 pm</a></li>
                                                            </ul>
                                                            <div class="title">
                                                                <h2 class="h4">
                                                                    <a href="news-single-v1-boxed.html"
                                                                        class="btn-link">It is a long established fact
                                                                        that a
                                                                        reader will be distracted by</a>
                                                                </h2>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="preloader bg--color-0--b" data-preloader="1">
                                            <div class="preloader--inner"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="main--sidebar col-md-4 col-sm-5 ptop--30 pbottom--30" data-sticky-content="true">
                        <div class="sticky-content-inner">
                            <div class="widget">
                                <div class="widget--title" data-ajax="tab">
                                    <h2 class="h4">Voting Poll (Checkbox)</h2>
                                    <div class="nav">
                                        <a href="#" class="prev btn-link" data-ajax-action="load_prev_poll_widget">
                                            <i class="fa fa-long-arrow-left"></i>
                                        </a>
                                        <span class="divider">/</span>
                                        <a href="#" class="next btn-link" data-ajax-action="load_next_poll_widget">
                                            <i class="fa fa-long-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="poll--widget" data-ajax-content="outer">
                                    <ul class="nav" data-ajax-content="inner">
                                        <li class="title">
                                            <h3 class="h4">
                                                Which was the best Football World Cup ever in your
                                                opinion?
                                            </h3>
                                        </li>
                                        <li class="options">
                                            <form action="#">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="option-1" />
                                                        <span>Brazil 2014</span>
                                                    </label>
                                                    <p>65%<span style="width: 65%"></span></p>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="option-2" />
                                                        <span>South Africa 2010</span>
                                                    </label>
                                                    <p>28%<span style="width: 28%"></span></p>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="option-2" />
                                                        <span>Germany 2006</span>
                                                    </label>
                                                    <p>07%<span style="width: 07%"></span></p>
                                                </div>
                                                <button type="submit" class="btn btn-primary">
                                                    Vote Now
                                                </button>
                                            </form>
                                        </li>
                                    </ul>
                                    <div class="preloader bg--color-0--b" data-preloader="1">
                                        <div class="preloader--inner"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="widget">
                                <div class="widget--title" data-ajax="tab">
                                    <h2 class="h4">Voting Poll (Radio)</h2>
                                    <div class="nav">
                                        <a href="#" class="prev btn-link" data-ajax-action="load_prev_poll_widget">
                                            <i class="fa fa-long-arrow-left"></i>
                                        </a>
                                        <span class="divider">/</span>
                                        <a href="#" class="next btn-link" data-ajax-action="load_next_poll_widget">
                                            <i class="fa fa-long-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="poll--widget" data-ajax-content="outer">
                                    <ul class="nav" data-ajax-content="inner">
                                        <li class="title">
                                            <h3 class="h4">
                                                Do you think the cost of sending money to mobile phone
                                                should be reduced?
                                            </h3>
                                        </li>
                                        <li class="options">
                                            <form action="#">
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio" name="option-1" />
                                                        <span>Yes</span>
                                                    </label>
                                                    <p>65%<span style="width: 65%"></span></p>
                                                </div>
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio" name="option-1" />
                                                        <span>No</span>
                                                    </label>
                                                    <p>28%<span style="width: 28%"></span></p>
                                                </div>
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio" name="option-1" />
                                                        <span>Average</span>
                                                    </label>
                                                    <p>07%<span style="width: 07%"></span></p>
                                                </div>
                                                <button type="submit" class="btn btn-primary">
                                                    Vote Now
                                                </button>
                                            </form>
                                        </li>
                                    </ul>
                                    <div class="preloader bg--color-0--b" data-preloader="1">
                                        <div class="preloader--inner"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="widget">
                                <div class="ad--widget">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <a href="#">
                                                <img src="images/ad-150x150-1.jpg" alt="" />
                                            </a>
                                        </div>
                                        <div class="col-sm-6">
                                            <a href="#">
                                                <img src="images/ad-150x150-2.jpg" alt="" />
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="widget">
                                <div class="widget--title" data-ajax="tab">
                                    <h2 class="h4">Readers Opinion</h2>
                                    <div class="nav">
                                        <a href="#" class="prev btn-link"
                                            data-ajax-action="load_prev_readers_opinion_widget">
                                            <i class="fa fa-long-arrow-left"></i>
                                        </a>
                                        <span class="divider">/</span>
                                        <a href="#" class="next btn-link"
                                            data-ajax-action="load_next_readers_opinion_widget">
                                            <i class="fa fa-long-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="list--widget list--widget-2" data-ajax-content="outer">
                                    <div class="post--items post--items-3">
                                        <ul class="nav" data-ajax-content="inner">
                                            <li>
                                                <div class="post--item post--layout-3">
                                                    <div class="post--img">
                                                        <span class="thumb"><img src="images/readers-opinion-01.png"
                                                                alt="" /></span>
                                                        <div class="post--info">
                                                            <div class="title">
                                                                <h3 class="h4">
                                                                    Long established fact that a reader will be
                                                                    distracted
                                                                </h3>
                                                            </div>
                                                            <ul class="nav meta">
                                                                <li><span>by Ninurta</span></li>
                                                                <li><span>16 April 2017</span></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="post--item post--layout-3">
                                                    <div class="post--img">
                                                        <span class="thumb"><img src="images/readers-opinion-02.png"
                                                                alt="" /></span>
                                                        <div class="post--info">
                                                            <div class="title">
                                                                <h3 class="h4">
                                                                    Long established fact that a reader will be
                                                                    distracted
                                                                </h3>
                                                            </div>
                                                            <ul class="nav meta">
                                                                <li><span>by Ninurta</span></li>
                                                                <li><span>16 April 2017</span></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="post--item post--layout-3">
                                                    <div class="post--img">
                                                        <span class="thumb"><img src="images/readers-opinion-03.png"
                                                                alt="" /></span>
                                                        <div class="post--info">
                                                            <div class="title">
                                                                <h3 class="h4">
                                                                    Long established fact that a reader will be
                                                                    distracted
                                                                </h3>
                                                            </div>
                                                            <ul class="nav meta">
                                                                <li><span>by Ninurta</span></li>
                                                                <li><span>16 April 2017</span></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="preloader bg--color-0--b" data-preloader="1">
                                            <div class="preloader--inner"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="widget">
                                <div class="widget--title" data-ajax="tab">
                                    <h2 class="h4">Editors Choice</h2>
                                    <div class="nav">
                                        <a href="#" class="prev btn-link"
                                            data-ajax-action="load_prev_editors_choice_widget">
                                            <i class="fa fa-long-arrow-left"></i>
                                        </a>
                                        <span class="divider">/</span>
                                        <a href="#" class="next btn-link"
                                            data-ajax-action="load_next_editors_choice_widget">
                                            <i class="fa fa-long-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="list--widget list--widget-1" data-ajax-content="outer">
                                    <div class="post--items post--items-3">
                                        <ul class="nav" data-ajax-content="inner">
                                            <li>
                                                <div class="post--item post--layout-3">
                                                    <div class="post--img">
                                                        <a href="news-single-v1-boxed.html" class="thumb"><img
                                                                src="images/editors-choice-01.jpg" alt="" /></a>
                                                        <div class="post--info">
                                                            <ul class="nav meta">
                                                                <li><a href="#">Ninurta</a></li>
                                                                <li><a href="#">16 April 2017</a></li>
                                                            </ul>
                                                            <div class="title">
                                                                <h3 class="h4">
                                                                    <a href="news-single-v1-boxed.html"
                                                                        class="btn-link">Long established fact that a
                                                                        reader will
                                                                        be distracted</a>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="post--item post--layout-3">
                                                    <div class="post--img">
                                                        <a href="news-single-v1-boxed.html" class="thumb"><img
                                                                src="images/editors-choice-02.jpg" alt="" /></a>
                                                        <div class="post--info">
                                                            <ul class="nav meta">
                                                                <li><a href="#">Orcus</a></li>
                                                                <li><a href="#">16 April 2017</a></li>
                                                            </ul>
                                                            <div class="title">
                                                                <h3 class="h4">
                                                                    <a href="news-single-v1-boxed.html"
                                                                        class="btn-link">Long established fact that a
                                                                        reader will
                                                                        be distracted</a>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="post--item post--layout-3">
                                                    <div class="post--img">
                                                        <a href="news-single-v1-boxed.html" class="thumb"><img
                                                                src="images/editors-choice-03.jpg" alt="" /></a>
                                                        <div class="post--info">
                                                            <ul class="nav meta">
                                                                <li><a href="#">Rahab</a></li>
                                                                <li><a href="#">16 April 2017</a></li>
                                                            </ul>
                                                            <div class="title">
                                                                <h3 class="h4">
                                                                    <a href="news-single-v1-boxed.html"
                                                                        class="btn-link">Long established fact that a
                                                                        reader will
                                                                        be distracted</a>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="post--item post--layout-3">
                                                    <div class="post--img">
                                                        <a href="news-single-v1-boxed.html" class="thumb"><img
                                                                src="images/editors-choice-04.jpg" alt="" /></a>
                                                        <div class="post--info">
                                                            <ul class="nav meta">
                                                                <li><a href="#">Tannin</a></li>
                                                                <li><a href="#">16 April 2017</a></li>
                                                            </ul>
                                                            <div class="title">
                                                                <h3 class="h4">
                                                                    <a href="news-single-v1-boxed.html"
                                                                        class="btn-link">Long established fact that a
                                                                        reader will
                                                                        be distracted</a>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="preloader bg--color-0--b" data-preloader="1">
                                            <div class="preloader--inner"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer--section">
            @include('client.layouts.partials.footer')

        </footer>
    </div>
    <div id="stickySocial" class="sticky--right">
        <ul class="nav">
            <li>
                <a href="#">
                    <i class="fa fa-facebook"></i> <span>Follow Us On Facebook</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-twitter"></i> <span>Follow Us On Twitter</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-google-plus"></i>
                    <span>Follow Us On Google Plus</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-rss"></i> <span>Follow Us On RSS</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-vimeo"></i> <span>Follow Us On Vimeo</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-youtube-play"></i>
                    <span>Follow Us On Youtube Play</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-linkedin"></i> <span>Follow Us On LinkedIn</span>
                </a>
            </li>
        </ul>
    </div>
    <div id="backToTop">
        <a href="#"><i class="fa fa-angle-double-up"></i></a>
    </div>
    @include('client.layouts.partials.js')
</body>

</html>