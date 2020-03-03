@extends('layout_ur.index')

@section('contents')

    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> {{__('page-home')}}</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{__('page-about')}}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Breadcrumb Area End ##### -->

    <div class="about-us-area section-padding-0-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="about-content">
                        <!-- Section Heading -->
                        <div class="section-heading text-center">
                            <h2>About Us</h2>
                            <p>Welcome to the Nikki Blog</p>
                        </div>

                        <img src="asset/img/blog-img/7.jpg" alt="">

                        <div class="about-text">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                            <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                            <blockquote>
                                <div class="blockquote-icon">
                                    <img src="asset/img/core-img/quote.png" alt="">
                                </div>
                                <div class="blockquote-text">
                                    <h5>“If you’re going to try, go all the way. There is no other feeling like that. You will be alone with the gods, and the nights will flame with fire.”</h5>
                                </div>
                            </blockquote>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>

                        <div class="row">
                            <div class="col-12 col-md-4">
                                <img src="asset/img/blog-img/2.jpg" alt="">
                            </div>
                            <div class="col-12 col-md-4">
                                <img src="asset/img/blog-img/3.jpg" alt="">
                            </div>
                            <div class="col-12 col-md-4">
                                <img src="asset/img/blog-img/4.jpg" alt="">
                            </div>
                        </div>

                        <div class="about-text">
                            <h4>What I Do</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            <ul>
                                <li><i class="fa fa-check" aria-hidden="true"></i> Nam ut dui tincidunt, tincidunt dui sit amet, vestibulum lacus.</li>
                                <li><i class="fa fa-check" aria-hidden="true"></i> Vestibulum id risus sit amet metus consectetur ornare.</li>
                                <li><i class="fa fa-check" aria-hidden="true"></i> Integer a quam id ante venenatis interdum.</li>
                                <li><i class="fa fa-check" aria-hidden="true"></i> Donec semper ante quis mi lobortis molestie.</li>
                                <li><i class="fa fa-check" aria-hidden="true"></i> Aliquam pulvinar quam eget purus pulvinar vehicula.</li>
                            </ul>
                            <p>Nullam venenatis, nisi ac scelerisque tincidunt, elit ante volutpat velit, a rhoncus ipsum est vel nulla. Nulla nibh arcu, porttitor non ipsum vel, ullamcorper faucibus mauris. Vivamus interdum molestie ex, id tincidunt nibh volutpat eu. Nunc tempus porttitor tortor. Pellentesque id efficitur odio. Phasellus non risus dapibus, lobortis mi non, tincidunt lorem. Curabitur sed dolor felis. Vivamus mollis fringilla dictum.</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection