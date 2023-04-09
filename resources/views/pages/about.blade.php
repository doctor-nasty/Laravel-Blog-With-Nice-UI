@extends('layouts.master', ['title' => 'About'])

@section('meta_keywords', 'about, About Us')
@section('meta_description', 'About FiscalBulletin.com')


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
                                <li class="active">About Us</li>
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
    <!--=      About  Quality Area Start    =-->
    <!--=====================================-->
    <section class="section section-padding bg-color-dark pb--80 pb_lg--40 pb_md--20">
        <div class="container">
            <div class="section-heading mb--100">
                <span class="subtitle">Our Values</span>
                <h2 class="title">Our Story</h2>
                <p>FiscalBulletin.com was founded in 2023 by Nick, a finance enthusiast with a passion
                    for simplifying complex financial topics. Frustrated by the jargon and lack of transparency in the
                    financial industry, Nick set out to create a platform that breaks down barriers and empowers
                    individuals to take control of their financial futures.
                </p>
                <h2 class="title">Our Team</h2>
                <p>Our dedicated team of financial experts and writers come from diverse backgrounds,
                    with experience in various aspects of finance, including personal finance, investment, and wealth
                    management. We pride ourselves on the depth of knowledge and expertise we bring to the table, ensuring
                    our content is accurate, relevant, and accessible.


                </p>
                <h2 class="title">What We Offer</h2>
                <p>At FiscalBulletin.com, we provide a wealth of information on a wide range of financial
                    topics, from budgeting and saving to investing and retirement planning. Our content includes in-depth
                    articles, expert interviews, case studies, and practical tips, all designed to help you achieve your
                    financial goals.
                </p>
                <h2 class="title">Connect With Us</h2>
                <p>We encourage you to join our thriving community of readers and engage with us on our
                    various social media channels. We're always eager to hear from our audience, so don't hesitate to reach
                    out with any questions, feedback, or topic suggestions.

                    Thank you for choosing FiscalBulletin.com as your partner in financial empowerment. We look forward to
                    supporting you on your journey to financial success!
                </p>
            </div>
        </div>
    </section>

@endsection
