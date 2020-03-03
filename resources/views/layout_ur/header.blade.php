<header class="header-area">
    <!-- Navbar Area -->
    <div class="nikki-main-menu">
        <div class="classy-nav-container breakpoint-off">
            <div class="container-fluid">
                <!-- Menu -->
                <nav class="classy-navbar justify-content-between" id="nikkiNav">

                    <!-- Nav brand -->
                    <a href="{{route('demo')}}" class="nav-brand"><img src="asset/img/core-img/logo.png" alt=""></a>

                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>

                    <!-- Menu -->
                    <div class="classy-menu">

                        <!-- close btn -->
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>

                        <!-- Nav Start -->
                        <div class="classynav">
                            <ul>
                                <li><a href="{{route('demo')}}">{{ __('page-home') }}</a></li>
                                <li><a href="#">{{ __('header-pages') }}</a>
                                    <ul class="dropdown">
                                        <li><a href="{{route('demo')}}">{{ __('page-home') }}</a></li>
                                        <li><a href="{{route('archive-blog')}}">{{ __('page-archive-blog') }}</a></li>
                                        <li><a href="{{route('single-post')}}">{{ __('page-single-post') }}</a></li>
                                        <li><a href="{{route('about')}}">{{ __('page-about') }}</a></li>
                                        <li><a href="{{route('contact')}}">{{ __('page-contact') }}</a></li>
                                        <li><a href="{{route('typography')}}">{{ __('page-typography') }}</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">{{__('header-categoties')}}</a>
                                    <div class="megamenu">
                                        @foreach($categories as $category)
                                        <ul class="single-mega cn-col-3">
                                            <li><a href="#">- {{$category->name}}</a></li>
                                        </ul>
                                        @endforeach
                                        {{--<ul class="single-mega cn-col-4">--}}
                                            {{--<li><a href="#">- Features</a></li>--}}
                                            {{--<li><a href="#">- Food</a></li>--}}
                                            {{--<li><a href="#">- Travel</a></li>--}}
                                            {{--<li><a href="#">- Recipe</a></li>--}}
                                            {{--<li><a href="#">- Bread</a></li>--}}
                                            {{--<li><a href="#">- Breakfast</a></li>--}}
                                            {{--<li><a href="#">- Meat</a></li>--}}
                                        {{--</ul>--}}
                                        {{--<ul class="single-mega cn-col-4">--}}
                                            {{--<li><a href="#">- Features</a></li>--}}
                                            {{--<li><a href="#">- Food</a></li>--}}
                                            {{--<li><a href="#">- Travel</a></li>--}}
                                            {{--<li><a href="#">- Recipe</a></li>--}}
                                            {{--<li><a href="#">- Bread</a></li>--}}
                                            {{--<li><a href="#">- Breakfast</a></li>--}}
                                            {{--<li><a href="#">- Meat</a></li>--}}
                                        {{--</ul>--}}
                                        {{--<ul class="single-mega cn-col-4">--}}
                                            {{--<li><a href="#">- Features</a></li>--}}
                                            {{--<li><a href="#">- Food</a></li>--}}
                                            {{--<li><a href="#">- Travel</a></li>--}}
                                            {{--<li><a href="#">- Recipe</a></li>--}}
                                            {{--<li><a href="#">- Bread</a></li>--}}
                                            {{--<li><a href="#">- Breakfast</a></li>--}}
                                            {{--<li><a href="#">- Meat</a></li>--}}
                                        {{--</ul>--}}
                                    </div>
                                </li>
                                <li><a href="{{route('about')}}">{{__('page-about')}}</a></li>
                                <li><a href="{{route('contact')}}">{{__('page-contact')}}</a></li>
                            </ul>

                            <!-- Search Form -->
                            <div class="search-form">
                                <form action="#" method="get">
                                    <input type="search" name="search" class="form-control" placeholder="Search and hit enter...">
                                    <button type="submit"><i class="fa fa-search"></i></button>
                                </form>
                            </div>

                            <!-- Social Button -->
                            <div class="top-social-info">
                                <a href="#" data-toggle="tooltip" data-placement="bottom" title="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#" data-toggle="tooltip" data-placement="bottom" title="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="#" data-toggle="tooltip" data-placement="bottom" title="Instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                <a href="#" data-toggle="tooltip" data-placement="bottom" title="Pinterest"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                                <a href="#" data-toggle="tooltip" data-placement="bottom" title="RSS Feed"><i class="fa fa-rss" aria-hidden="true"></i></a>
                            </div>

                        </div>
                        <!-- Nav End -->
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- ##### Header Area End ##### -->

<!-- ##### Hero Area Start ##### -->
<section class="hero-area">
    <!-- Preloader -->
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="circle-preloader">
            <div class="a" style="--n: 5;">
                <div class="dot" style="--i: 0;"></div>
                <div class="dot" style="--i: 1;"></div>
                <div class="dot" style="--i: 2;"></div>
                <div class="dot" style="--i: 3;"></div>
                <div class="dot" style="--i: 4;"></div>
            </div>
        </div>
    </div>

    <div class="hero-post-slides owl-carousel">

        <!-- Single Hero Post -->
        <div class="single-hero-post d-flex flex-wrap">
            <!-- Post Thumbnail -->
            <div class="slide-post-thumbnail h-100 bg-img" style="background-image: url(asset/img/blog-img/13.jpg);"></div>
            <!-- Post Content -->
            <div class="slide-post-content h-100 d-flex align-items-center">
                <div class="slide-post-text">
                    <p class="post-date" data-animation="fadeIn" data-delay="100ms">MAY 01, 2018 / lifestyle</p>
                    <a href="#" class="post-title" data-animation="fadeIn" data-delay="300ms">
                        <h2>We’ve Launched More May Gal Meets Glam Collection Dresses</h2>
                    </a>
                    <p class="post-excerpt" data-animation="fadeIn" data-delay="500ms">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</p>
                    <a href="#" class="btn nikki-btn" data-animation="fadeIn" data-delay="700ms">Read More</a>
                </div>
                <!-- Page Count -->
                <div class="page-count"></div>
            </div>
        </div>

        <!-- Single Hero Post -->
        <div class="single-hero-post d-flex flex-wrap">
            <!-- Post Thumbnail -->
            <div class="slide-post-thumbnail h-100 bg-img" style="background-image: url(asset/img/blog-img/14.jpg);"></div>
            <!-- Post Content -->
            <div class="slide-post-content h-100 d-flex align-items-center">
                <div class="slide-post-text">
                    <p class="post-date" data-animation="fadeIn" data-delay="100ms">MAY 01, 2018 / lifestyle</p>
                    <a href="#" class="post-title" data-animation="fadeIn" data-delay="300ms">
                        <h2>A Closer Look At Our Front Porch Items From Lowe’s</h2>
                    </a>
                    <p class="post-excerpt" data-animation="fadeIn" data-delay="500ms">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</p>
                    <a href="#" class="btn nikki-btn" data-animation="fadeIn" data-delay="700ms">Read More</a>
                </div>
                <!-- Page Count -->
                <div class="page-count"></div>
            </div>
        </div>

        <!-- Single Hero Post -->
        <div class="single-hero-post d-flex flex-wrap">
            <!-- Post Thumbnail -->
            <div class="slide-post-thumbnail h-100 bg-img" style="background-image: url(asset/img/blog-img/15.jpg);"></div>
            <!-- Post Content -->
            <div class="slide-post-content h-100 d-flex align-items-center">
                <div class="slide-post-text">
                    <p class="post-date" data-animation="fadeIn" data-delay="100ms">MAY 01, 2018 / lifestyle</p>
                    <a href="#" class="post-title" data-animation="fadeIn" data-delay="300ms">
                        <h2>Answering Your Most Frequent International Transportation Questions</h2>
                    </a>
                    <p class="post-excerpt" data-animation="fadeIn" data-delay="500ms">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</p>
                    <a href="#" class="btn nikki-btn" data-animation="fadeIn" data-delay="700ms">Read More</a>
                </div>
                <!-- Page Count -->
                <div class="page-count"></div>
            </div>
        </div>

    </div>
</section>