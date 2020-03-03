@extends('layout_ur.index')

@section('contents')

    <!-- ##### Breadcrumb Area Start ##### -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Features</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{__('page-typography')}}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Breadcrumb Area End ##### -->

    <div class="typography-content-area section-padding-0-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-8">

                    <!-- Type Face -->
                    <div class="type-face mb-30">
                        <h1>Heading 1</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim</p>
                        <h2>Heading 2</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim</p>
                        <h3>Heading 3</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim</p>
                        <h4>Heading 4</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim</p>
                        <h5>Heading 5</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim</p>
                        <h6>Heading 6</h6>
                        <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim</p>
                    </div>

                    <!-- Images -->
                    <div class="nikki-image mb-30">
                        <h2 class="mb-30">Images</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat.</p>
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <img class="mb-30" src="img/blog-img/4.jpg" alt="">
                            </div>
                            <div class="col-12 col-md-6">
                                <img class="mb-30" src="img/blog-img/3.jpg" alt="">
                            </div>
                        </div>
                        <p class="mb-0">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                            doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et
                            quasi architecto beatae vitae dicta sunt explicabo.</p>
                    </div>

                    <!-- Blockquote -->
                    <div class="nikki-blockquote mb-30">
                        <h2 class="mb-30">Blockquote</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat.</p>
                        <blockquote class="shortcodes">
                            <div class="blockquote-icon">
                                <img src="img/core-img/quote.png" alt="">
                            </div>
                            <div class="blockquote-text">
                                <h5>That’s not to say you’ll have the exact same thing if you stop by: the restaurant’s
                                    menus change constantly, based on seasonal ingredients.</h5>
                                <h6>Ollie Schneider - <span>CEO Colorlib</span></h6>
                            </div>
                        </blockquote>
                        <p class="mb-0">What hadn’t shown up, however, was the idea that Vietnamese cuisine can be taken
                            seriously, with complex techniques and in a fancier setting.</p>
                    </div>

                    <!-- List -->
                    <div class="nikki-list-area mb-30">
                        <h2 class="mb-30">Definition Lists</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat.</p>
                        <ul class="nikki-list">
                            <li>* Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                            <li>* Aliquam nec turpis ac nunc facilisis interdum mattis blandit libero.</li>
                            <li>* Nulla sed nulla ultricies, rutrum ligula vel, euismod mauris.</li>
                            <li>* In rutrum nunc convallis euismod ultricies.</li>
                            <li>* Sed viverra nisi nec neque facilisis, eget feugiat metus ultrices.</li>
                        </ul>
                    </div>

                    <!-- Form & Button -->
                    <div class="form-button">
                        <h2 class="mb-30">Form &amp; Button</h2>

                        <!-- Contact Form Area -->
                        <div class="contact-form-area mb-50">
                            <form action="#" method="post">
                                <div class="row">
                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="contact-name"
                                                   placeholder="Name">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            <input type="email" class="form-control" id="contact-email"
                                                   placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <textarea class="form-control" name="message" id="message" cols="30"
                                                      rows="10" placeholder="Message"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <!-- Buttons -->
                        <a href="#" class="btn nikki-btn m-2">Post Comment</a>
                        <a href="#" class="btn nikki-btn active m-2">Post Comment</a>

                        <div class="d-block mb-30"></div>

                        <a href="#" class="btn nikki-btn btn-sm m-2">Like</a>
                        <a href="#" class="btn nikki-btn btn-sm active m-2">Reply</a>
                    </div>
                </div>

                <!-- Blog Sidebar Area -->
                <div class="col-12 col-sm-9 col-md-6 col-lg-4">
                    <div class="post-sidebar-area">

                        <!-- ##### Single Widget Area ##### -->
                        <div class="single-widget-area mb-50">
                            <form class="search-form" action="#" method="post">
                                <input type="search" name="search" class="form-control" placeholder="Search...">
                                <button><i class="fa fa-send"></i></button>
                            </form>
                        </div>

                        <!-- ##### Single Widget Area ##### -->
                        <div class="single-widget-area mb-30">
                            <!-- Title -->
                            <div class="widget-title">
                                <h6>Categories</h6>
                            </div>
                            <ol class="nikki-catagories">
                                <li><a href="#"><span><i class="fa fa-angle-double-right"
                                                         aria-hidden="true"></i> Art</span> <span>(3)</span></a></li>
                                <li><a href="#"><span><i class="fa fa-angle-double-right" aria-hidden="true"></i> Business</span>
                                        <span>(4)</span></a></li>
                                <li><a href="#"><span><i class="fa fa-angle-double-right" aria-hidden="true"></i> Fashion</span>
                                        <span>(5)</span></a></li>
                                <li><a href="#"><span><i class="fa fa-angle-double-right" aria-hidden="true"></i> Life Style</span>
                                        <span>(9)</span></a></li>
                                <li><a href="#"><span><i class="fa fa-angle-double-right" aria-hidden="true"></i> Music</span>
                                        <span>(3)</span></a></li>
                            </ol>
                        </div>

                        <!-- ##### Single Widget Area ##### -->
                        <div class="single-widget-area mb-30">
                            <!-- Title -->
                            <div class="widget-title">
                                <h6>About Me</h6>
                            </div>
                            <!-- Thumbnail -->
                            <div class="about-thumbnail">
                                <img src="img/blog-img/about-me.jpg" alt="">
                            </div>
                            <!-- Content -->
                            <div class="widget-content text-center">
                                <img src="img/core-img/signature.png" alt="">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ipsum adipisicing</p>
                            </div>
                        </div>

                        <!-- ##### Single Widget Area ##### -->
                        <div class="single-widget-area mb-30">
                            <!-- Title -->
                            <div class="widget-title">
                                <h6>Subscribe &amp; Follow</h6>
                            </div>
                            <!-- Widget Social Info -->
                            <div class="widget-social-info text-center">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                                <a href="#"><i class="fa fa-pinterest"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-rss"></i></a>
                            </div>
                        </div>

                        <!-- ##### Single Widget Area ##### -->
                        <div class="single-widget-area mb-30">
                            <!-- Title -->
                            <div class="widget-title">
                                <h6>Archives</h6>
                            </div>
                            <ol class="nikki-archives">
                                <li><a href="#">February 2018</a></li>
                                <li><a href="#">June 2018</a></li>
                                <li><a href="#">March 2018</a></li>
                                <li><a href="#">November 2018</a></li>
                            </ol>
                        </div>

                        <!-- ##### Single Widget Area ##### -->
                        <div class="single-widget-area mb-30">
                            <!-- Title -->
                            <div class="widget-title">
                                <h6>Latest Posts</h6>
                            </div>

                            <!-- Single Latest Posts -->
                            <div class="single-latest-post d-flex">
                                <div class="post-thumb">
                                    <img src="img/blog-img/lp1.jpg" alt="">
                                </div>
                                <div class="post-content">
                                    <a href="#" class="post-title">
                                        <h6>10 Books to Read This Summer If You Want to Improve Yourself</h6>
                                    </a>
                                    <a href="#" class="post-author"><span>by</span> Colorlib</a>
                                </div>
                            </div>

                            <!-- Single Latest Posts -->
                            <div class="single-latest-post d-flex">
                                <div class="post-thumb">
                                    <img src="img/blog-img/lp2.jpg" alt="">
                                </div>
                                <div class="post-content">
                                    <a href="#" class="post-title">
                                        <h6>Why I Decided to Give up My Favorite Foods and Go Vegan</h6>
                                    </a>
                                    <a href="#" class="post-author"><span>by</span> Colorlib</a>
                                </div>
                            </div>

                            <!-- Single Latest Posts -->
                            <div class="single-latest-post d-flex">
                                <div class="post-thumb">
                                    <img src="img/blog-img/lp3.jpg" alt="">
                                </div>
                                <div class="post-content">
                                    <a href="#" class="post-title">
                                        <h6>The 10 Most Instagrammable Spots in San Diego</h6>
                                    </a>
                                    <a href="#" class="post-author"><span>by</span> Colorlib</a>
                                </div>
                            </div>

                        </div>

                        <!-- ##### Single Widget Area ##### -->
                        <div class="single-widget-area mb-30">
                            <!-- Adds -->
                            <a href="#"><img src="img/blog-img/add.png" alt=""></a>
                        </div>

                        <!-- ##### Single Widget Area ##### -->
                        <div class="single-widget-area mb-30">
                            <!-- Title -->
                            <div class="widget-title">
                                <h6>Newsletter</h6>
                            </div>
                            <!-- Content -->
                            <div class="newsletter-content">
                                <p>Subscribe our newsletter for get notification about new updates, information
                                    discount, etc.</p>
                                <form action="#" method="post">
                                    <input type="email" name="email" class="form-control" placeholder="Your email">
                                    <button><i class="fa fa-send"></i></button>
                                </form>
                            </div>
                        </div>

                        <!-- ##### Single Widget Area ##### -->
                        <div class="single-widget-area mb-30">
                            <!-- Title -->
                            <div class="widget-title">
                                <h6>popular tags</h6>
                            </div>
                            <!-- Tags -->
                            <ol class="popular-tags d-flex flex-wrap">
                                <li><a href="#">LifeStyle</a></li>
                                <li><a href="#">Sport</a></li>
                                <li><a href="#">Fashion</a></li>
                                <li><a href="#">Photography</a></li>
                                <li><a href="#">Yoga</a></li>
                                <li><a href="#">Health Food</a></li>
                                <li><a href="#">Summer Holiday</a></li>
                                <li><a href="#">Supper Food</a></li>
                                <li><a href="#">Life</a></li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection