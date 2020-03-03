@extends('layout_ur.index')

@section('contents')
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Contact</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Breadcrumb Area End ##### -->

    <!-- ##### Google Maps Start ##### -->
    <div class="map-area">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d22236.40558254599!2d-118.25292394686001!3d34.057682914027104!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2c75ddc27da13%3A0xe22fdf6f254608f4!2z4Kay4Ka4IOCmj-CmnuCnjeCmnOCnh-CmsuCnh-CmuCwg4KaV4KeN4Kav4Ka-4Kay4Ka_4Kar4KeL4Kaw4KeN4Kao4Ka_4Kav4Ka84Ka-LCDgpq7gpr7gprDgp43gppXgpr_gpqgg4Kav4KeB4KaV4KeN4Kak4Kaw4Ka-4Ka34KeN4Kaf4KeN4Kaw!5e0!3m2!1sbn!2sbd!4v1532328708137" allowfullscreen></iframe>
    </div>
    <!-- ##### Google Maps End ##### -->

    <!-- ##### Contact Area Start ##### -->
    <section class="contact-area section-padding-100-0">
        <div class="container">
            <div class="row">

                <div class="col-12 col-lg-6">
                    <div class="contact-content mb-100">
                        <h4>Get In Touch</h4>
                        <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia dese mollit anim id est laborum, consectetur adipisicing elit.</p>
                        <!-- Single Contact Info -->
                        <div class="single-contact-info">
                            <h6>Location:</h6>
                            <h4>40 Baria Sreet 133/2 NewYork, US</h4>
                        </div>

                        <!-- Single Contact Info -->
                        <div class="single-contact-info">
                            <h6>Email:</h6>
                            <h4>info.deercreative@gmail.com</h4>
                        </div>

                        <!-- Single Contact Info -->
                        <div class="single-contact-info">
                            <h6>Phone:</h6>
                            <h4>(+123) 456-789-1120</h4>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-6">
                    <div class="contact-content mb-100">
                        <h4>Contact Form</h4>

                        <!-- Contact Form Area -->
                        <div class="contact-form-area">
                            <form action="#" method="post">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="contact-name" placeholder="Name">
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" id="contact-email" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="contact-phone" placeholder="Phone">
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" name="message" id="message" cols="30" rows="10" placeholder="Message"></textarea>
                                </div>
                                <button type="submit" class="btn nikki-btn mt-15">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    @endsection