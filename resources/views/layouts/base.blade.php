<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>carl-international</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="{{asset('site.webmanifest')}}"> -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('img/favicon.png')}}">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('css/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('css/gijgo.css')}}">
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('css/slicknav.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <style>
    .social_links {
        display: flex;
        flex-direction: row;
        align-items: center;
        background-color: transparent;
        gap: 10px; /* Adjust the value as per your desired spacing */
    }

    .social_links a {
        margin-right: 20px;
        background-color: white;
        border-radius: 50%; 
        padding: 8px;
        display: flex; /* Use flexbox */
        align-items: center; /* Center vertically */
        justify-content: center; /* Center horizontally */
        width: 40px;
        height: 40px;
    }
</style>
</head>

<body>
    <header>
        <div class="header-area ">
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="header_wrap d-flex justify-content-between align-items-center">
                                <div class="header_left">
                                    <div class="logo">
                                        <a href="/">
                                            <img src="{{asset('assets/logo.png')}}" height="60px" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="header_right d-flex align-items-center">
                                    @if(Route::has('login'))
                                       @auth
                                      @if(Auth::user()->utype ==='adm')
                                     <div class="main-menu  d-none d-lg-block">
                                        <nav>
                                            <ul id="navigation">
                                                <li><a  href="{{route('admin.posts')}}">Upload</a></li>
                                                <li><a href="{{route('admin.application')}}">View Application</a></li>
                                                <li><a class="nav-link scrollto" href="{{route('logout')}}" onclick="event.preventDefault(); getElementById('logout-form').submit();">LogOut</a></li>
                                                  <form id="logout-form" method= "POST" action="{{route('logout')}}">
                                                       @csrf 
                                                  </form>
                                            </ul>
                                        </nav>
                                    </div>
                                      @endif
                                      @else
                                    <div class="main-menu  d-none d-lg-block">
                                        <nav>
                                            <ul id="navigation">
                                                <li><a  href="/">home</a></li>
                                                <li><a href="#">Scholarships</a></li>
                                                <li><a href="/info">About Us</a></li>
                                                
                                                <li><a href="/contact">Contact</a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                    <div class="Appointment">
                                        <div class="book_btn d-none d-lg-block" >
                                            <a  href="{{route('apply.user')}}">Apply NOw</a>
                                        </div>
                                    </div>
                                    @endif
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
         @livewireStyles
    </header>
   


   {{$slot}}

  

   <footer class="footer-section">
        <div class="container">
            <div class="footer-cta pt-5 pb-5">
                <div class="row">
                    <div class="col-xl-4 col-md-4 mb-30">
                        <div class="single-cta">
                            <i class="fas fa-map-marker-alt"></i>
                            <div class="cta-text">
                                <h4>Find us</h4>
                                <span>Green Acres Home Complex Victoria, Dar es Salaam</span>
                                <span>P.o.box 60594 Dar es salaam. Tanzania</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-4 mb-30">
                        <div class="single-cta">
                            <i class="fa fa-phone"></i>
                            <div class="cta-text">
                                <h4>Call us</h4>
                                <span>+255 676 002 598</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-4 mb-30">
                        <div class="single-cta">
                            <i class="fa fa-envelope"></i>
                            <div class="cta-text">
                                <h4>Mail us</h4>
                                <span> info@carlstudyabroad.com</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-content pt-5 pb-5">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 mb-50">
                        <div class="footer-widget">
                            <!-- <div class="footer-logo">
                                <a href="index.html"><img src="{{asset('assets/logo.png')}}" class="img-fluid" alt="logo"></a>
                            </div> -->
                            <div class="footer-text">
                                <p> Welcome to Carl International! We are dedicated to empowering individuals through education by offering scholarships to students seeking opportunities abroad. </p>
                                <!-- Explore the world of possibilities with Carl International and embark on a journey to academic success. -->
                            </div>
                            <div class="footer-social-icon">
                                <span>Follow us</span>
                                <a href="https://www.facebook.com/profile.php?id=100081150739519&mibextid=ZbWKwL">
                                                <i class="ti-facebook"></i>
                                            </a>
                                    <a href="https://twitter.com/Carlstudyabroad?t=SsQ8b5LW4dBmj7PoMHIB5Q&s=09">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                    <a href="https://carlstudyabroad.com/">
                                                <i class="fa fa-google-plus"></i>
                                            </a>
    <a href="https://www.instagram.com/invites/contact/?i=1ic4n3qvb178a&utm_content=59cw9pl">
                                                <i class="fa fa-instagram"></i>
                                            </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                        <div class="footer-widget">
                            <div class="footer-widget-heading">
                                <h3>Useful Links</h3>
                            </div>
                            <ul>
                                <li><a href="/">Home</a></li>
                                <li><a href="#">services</a></li>
                                <li><a href="/contact">Contact</a></li>
                                <li><a href="/info">About us</a></li>
                                <li><a href="/apply">Our Services</a></li>
                                <li><a href="#">Latest News</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 mb-50">
                        <div class="footer-widget">
                            <div class="footer-widget-heading">
                                <h3>Subscribe</h3>
                            </div>
                            <div class="footer-text mb-25">
                                <p>Don’t miss to subscribe to our new feeds, kindly fill the form below.</p>
                            </div>
                            <div class="subscribe-form">
                                <form action="#">
                                    <input type="text" placeholder="Email Address">
                                    <button><i class="fa fa-paper-plane-o" aria-hidden="true"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 text-center text-lg-left">
                        <div class="copyright-text">
                            <p>Copyright &copy; 2023, All Right Reserved <a href="https://trusttechnology.tech">trust_technology</a></p>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 d-none d-lg-block text-right">
                        <div class="footer-menu">
                            <ul>
                                <li><a href="/">Home</a></li>
                                <li><a href="#">Terms</a></li>
                                <li><a href="#">Privacy</a></li>
                                <li><a href="#">Policy</a></li>
                                <li><a href="/contact">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- <footer class="footer">
        <div class="footer_top">
            <div class="container">
                <div class="newsLetter_wrap">
                    <div class="row justify-content-between">
                        <div class="col-md-12 col-lg-5">
                            <div class="footer_widget">
                                <h3 class="footer_title">
                                    our media
                                </h3>
                                <div class="social_links">
                                <a href="https://www.facebook.com/profile.php?id=100081150739519&mibextid=ZbWKwL">
                                                <i class="ti-facebook"></i>
                                            </a>
                                    <a href="https://twitter.com/Carlstudyabroad?t=SsQ8b5LW4dBmj7PoMHIB5Q&s=09">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                    <a href="https://carlstudyabroad.com/">
                                                <i class="fa fa-google-plus"></i>
                                            </a>
    <a href="https://www.instagram.com/invites/contact/?i=1ic4n3qvb178a&utm_content=59cw9pl">
                                                <i class="fa fa-instagram"></i>
                                            </a>
</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copy-right_text">
            <div class="container">
                <div class="footer_border"></div>
                <div class="row">
                    <div class="col-xl-12">
                        <p class="copy_right text-center">
                            <p style="color:white">
                             Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | developed by <a href="https://trusttechnology.tech" style="color:aliceblue" target="_blank">trust-technology</a>
                           </p>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer> -->
    <!-- footer end  -->


    <!-- JS here -->
    <script src="{{asset('js/vendor/modernizr-3.5.0.min.js')}}"></script>
    <script src="{{asset('js/vendor/jquery-1.12.4.min.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('js/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('js/ajax-form.js')}}"></script>
    <script src="{{asset('js/waypoints.min.js')}}"></script>
    <script src="{{asset('js/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('js/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{asset('js/scrollIt.js')}}"></script>
    <script src="{{asset('js/jquery.scrollUp.min.js')}}"></script>
    <script src="{{asset('js/wow.min.js')}}"></script>
    <script src="{{asset('js/nice-select.min.js')}}"></script>
    <script src="{{asset('js/jquery.slicknav.min.js')}}"></script>
    <script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('js/plugins.js')}}"></script>
    <script src="{{asset('js/gijgo.min.js')}}"></script>

    <!--contact js-->
    <script src="{{asset('js/contact.js')}}"></script>
    <script src="{{asset('js/jquery.ajaxchimp.min.js')}}"></script>
    <script src="{{asset('js/jquery.form.js')}}"></script>
    <script src="{{asset('js/jquery.validate.min.js')}}"></script>
    <script src="{{asset('js/mail-script.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
 @livewireScripts
</body>

</html>