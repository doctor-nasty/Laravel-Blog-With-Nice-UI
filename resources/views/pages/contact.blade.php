@extends('layouts.master', ['title' => 'Contact Us'])

@section('content')
    <!--=       Breadcrumb Area Start       =-->
    <!--=====================================-->
    <div class="breadcrum-area breadcrumb-banner single-breadcrumb">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="section-heading heading-left" data-sal="slide-right" data-sal-duration="1000"
                        data-sal-delay="300">
                        <div class="breadcrumb">
                            <ul class="list-unstyled">
                                <li><a href="/">Home</a></li>
                                <li class="active">Contact Us</li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <ul class="shape-group-8 list-unstyled">
            <li class="shape shape-1" data-sal="slide-right" data-sal-duration="500" data-sal-delay="100">
                <img src="{{ asset('assets/media/others/bubble-9.png') }}" alt="Bubble">
            </li>
            <li class="shape shape-2" data-sal="slide-left" data-sal-duration="500" data-sal-delay="200">
                <img src="{{ asset('assets/media/others/bubble-20.png') }}" alt="Bubble">
            </li>
            <li class="shape shape-3" data-sal="slide-up" data-sal-duration="500" data-sal-delay="300">
                <img src="{{ asset('assets/media/others/line-4.png') }}" alt="Line">
            </li>
        </ul>
    </div>
    <!--=====================================-->
    <!--=       Contact  Area Start        =-->
    <!--=====================================-->
    <section class="section section-padding">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-12 offset-xl-1">
                    <div class="contact-info mb--30">
                        <h4 class="title">Email</h4>
                        <p>Our support team will get back to you as soon as possible.</p>
                        <h4 class="phone-number"><a href="mailto:info@fiscalbulletin.com">info@fiscalbulletin.com</a></h4>
                    </div>
                </div>
            </div>
        </div>
        <ul class="list-unstyled shape-group-12">
            <li class="shape shape-1"><img src="assets/media/others/bubble-2.png" alt="Bubble"></li>
            <li class="shape shape-2"><img src="assets/media/others/bubble-1.png" alt="Bubble"></li>
            <li class="shape shape-3"><img src="assets/media/others/circle-3.png" alt="Circle"></li>
        </ul>
    </section>

    <!--=====================================-->
    <!--=       Location  Area Start        =-->
    <!--=====================================-->
    <!-- <section class="section section-padding bg-color-dark overflow-hidden">
                <div class="container">
                    <div class="section-heading heading-light-left">
                        <span class="subtitle">Find Us</span>
                        <h2 class="title">Our office</h2>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-sm-6">
                            <div class="office-location">
                                <div class="thumbnail">
                                    <img src="assets/media/others/location-1.png" alt="Office">
                                </div>
                                <div class="content">
                                    <h4 class="title">Virginia-HQ</h4>
                                    <p>435 Pouros Locks United States</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="office-location">
                                <div class="thumbnail">
                                    <img src="assets/media/others/location-2.png" alt="Office">
                                </div>
                                <div class="content">
                                    <h4 class="title">Nevada</h4>
                                    <p>46 Watsica Creek Suite 071 United States</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="office-location">
                                <div class="thumbnail">
                                    <img src="assets/media/others/location-3.png" alt="Office">
                                </div>
                                <div class="content">
                                    <h4 class="title">Columbia</h4>
                                    <p>7140 Wehner Tunnel Washington, D.C</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="office-location">
                                <div class="thumbnail">
                                    <img src="assets/media/others/location-4.png" alt="Office">
                                </div>
                                <div class="content">
                                    <h4 class="title">New Mexico</h4>
                                    <p>10 Maggie Valleys United States</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <ul class="shape-group-11 list-unstyled">
                    <li class="shape shape-1"><img src="assets/media/others/line-6.png" alt="line"></li>
                    <li class="shape shape-2"><img src="assets/media/others/circle-3.png" alt="line"></li>
                </ul>
            </section> -->
@endsection
