<footer class="footer-area">
            <div class="container">
                <div class="footer-top">
                    <div class="footer-social-link">
                        <ul class="list-unstyled">
                        </ul>
                    </div>
                </div>
                {{-- <div class="footer-main">
                    <div class="row">
                        <div class="col-xl-6 col-lg-5" data-sal="slide-right" data-sal-duration="800" data-sal-delay="100">
                            <div class="footer-widget border-end">
                                <div class="footer-newsletter">
                                    <h2 class="title">Get in touch!</h2>
                                    <p>Subscribe to hear from us !</p>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            @if ($message = Session::get('success'))
                                            <span class="text-success">{{ $message }}</span>
                                            <br><br>
                                            @endif
                                            @if ($message = Session::get('error'))
                                            <span class="text-danger">{{ $message }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <form method="post" action="{{url('/')}}">
                                        @csrf
                                        <div class="input-group">
                                            <input type="email" name="email" class="form-control" placeholder="Email address" required>
                                            <button class="subscribe-btn" type="submit">Subscribe</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-7" data-sal="slide-left" data-sal-duration="800" data-sal-delay="100">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="footer-widget">
                                        <h6 class="widget-title">Menu</h6>
                                        <div class="footer-menu-link">
                                            <ul class="list-unstyled">
                                                <li><a href="/">Home</a></li>
                                                <li><a href="/about">About Us</a></li>
                                                <li><a href="/services">Services</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="footer-widget">
                                        <h6 class="widget-title">Resourses</h6>
                                        <div class="footer-menu-link">
                                            <ul class="list-unstyled">
                                                <li><a href="/blog">Blog</a></li>

                                                <li><a href="/projects">Projects</a></li>
                                                <li><a href="/prices">Prices</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="footer-widget">
                                        <h6 class="widget-title">Support</h6>
                                        <div class="footer-menu-link">
                                            <ul class="list-unstyled">
                                                <li><a href="/contact">Contact Us</a></li>
                                                <li><a href="/privacypolicy">Privacy Policy</a></li>
                                                <li><a href="/tos">Terms of Service</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
                <div class="footer-bottom" data-sal="slide-up" data-sal-duration="500" data-sal-delay="100">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="footer-copyright">
                                <span class="copyright-text">© 2023. Designed and Created By <a href="https://offthem.com" itemscope itemtype="https://schema.org/Organization" itemprop="name">OFFTHEM</a>.</span>
                            </div>


                        </div>
                        <div class="col-md-6">
                            <div class="footer-bottom-link">
                                <ul class="list-unstyled">
                                    <li><a href="/privacypolicy">Privacy Policy</a></li>
                                    <li><a href="/termsofservice">Terms of Service</a></li>
                                    <li><a href="/disclaimer">Disclaimer</a></li>
                                    <li><a href="/cookiepolicy">Cookie Policy</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
