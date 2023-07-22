   <!-- slider_area_start -->
   <div class="slider_area">
        <div class="slider_active owl-carousel">
            <!-- single_carouse -->
            <div class="single_slider  d-flex align-items-center slider_bg_2">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="slider_text ">
                                <h3>We can Help <br>
                                    You to Study<br>
                                    Abroad.</h3>
                                <a href="{{route('apply.user')}}"class="boxed-btn3">Apply</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ single_carouse -->
            <!-- single_carouse -->
            <div class="single_slider  d-flex align-items-center slider_bg_2">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="slider_text ">
                                <h3>Study Abroad <br>
                                    With Carl <br>
                                    Internation</h3>
                                <a href="{{route('apply.user')}}"class="boxed-btn3">Apply</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ single_carouse -->
            <!-- single_carouse -->
            <div class="single_slider  d-flex align-items-center slider_bg_2">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="slider_text ">
                                <h3>We can Help <br>
                                    You to Study<br>
                                    Abroad.</h3>
                                <a href="{{route('apply.user')}}"class="boxed-btn3">Apply</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ single_carouse -->
        </div>
    </div>
    <!-- slider_area_end -->

    <!-- service_area_start  -->
    <div class="service_area gray_bg">
        <div class="container">
            <div class="row justify-content-center ">
                <div class="col-lg-4 col-md-6">
                    <div class="single_service d-flex align-items-center ">
                        <div class="icon">
                            <i class="flaticon-school"></i>
                        </div>
                        <div class="service_info">
                            <h4>Scholarship</h4>
                            <p>Abroad</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_service d-flex align-items-center ">
                        <div class="icon">
                            <i class="flaticon-error"></i>
                        </div>
                        <div class="service_info">
                            <h4>Consultation</h4>
                            <p>& Career Guaidance</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_service d-flex align-items-center ">
                        <div class="icon">
                            <i class="flaticon-book"></i>
                        </div>
                        <div class="service_info">
                            <h4>VisaApplication</h4>
                            <p>Assistance</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ service_area_start  -->

    <!-- popular_program_area_start  -->
    <div class="popular_program_area ">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section_title text-center">
                        <h3>Scholarships available</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <nav class="custom_tabs text-center">
                        <div class="nav" id="nav-tab" role="tablist">
                            <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Graduate</a>
                            <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Postgraduate </a>
                            <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Diploma</a>
                        </div>
                    </nav>
                </div>
            </div>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                    <div class="row">
                    @foreach ($posts as $post)
    <div class="col-lg-4 col-md-6">
        <div class="single__program">
            <div class="program_thumb" title="{{ $post->title }}">
                <img height="300" width="100%" src="{{ asset('assets/img/posts/') }}/{{ $post->image }}" alt="{{ $post->title }}">
            </div>
            <div class="program__content">
                <h4>{{ $post->title }}</h4>
                @php
                    $truncatedDescription = implode(' ', array_slice(explode(' ', $post->description), 0, 30));
                @endphp
                <p>{{ $truncatedDescription . (str_word_count($post->description) > 30 ? '...' : '') }}</p>
                <a href="{{ route('apply.user') }}" class="boxed-btn5">Apply Now</a>
            </div>
        </div>
    </div>
@endforeach

                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- popular_program_area_end -->

    <!-- latest_coures_area_start  -->
    <div class="latest_coures_area">
        <div class="latest_coures_inner">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="coures_info">
                            <div class="section_title white_text">
                                <h3>Latest Courses</h3>
                                <p>Get started, study abroad for your choice</p>
                            </div>
                            <div class="coures_wrap d-flex">
                                <div class="single_wrap">
                                    <div class="icon">
                                        <i class="flaticon-lab"></i>
                                    </div>
                                    <h4>Bachelor of <br>
                                        Neurology</h4>
                                        <a style="color:#fff">Many are served by Carl Study Abroad Apply now   </a>
                                        <a href="{{route('apply.user')}}" class="boxed-btn7">Apply NOw</a>
                                </div>
                                <div class="single_wrap">
                                    <div class="icon">
                                        <i class="flaticon-lab"></i>
                                    </div>
                                    <h4>Diploma in <br>
                                        Auronatical engineering</h4>
                                        <a style="color:#fff">We make an abroad education easy</a>
                                        <a href="{{route('apply.user')}}" class="boxed-btn7">Apply NOw</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                            <a href="/apply">
                                <img height="500" width="500" src="img/picha/a.png" alt="">
                            </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ latest_coures_area_end -->

    <!-- recent_news_area_start  -->
    <div class="recent_news_area ">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-10">
                    <div class="section_title text-center mb-70">
                        <h3 class="mb-45">Our Students</h3>
                        <p>We are so proud to serve more than 3000 students from different country to study abroad for two Years now ! </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="single__news">
                        <div class="thumb">
                            <a href="/apply">
                                <img src="img/picha/b.png" alt="">
                            </a>
                            <span class="badge bandge_2"> INDIA-PARUL UNIVERSITY</span>
                            
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="single__news">
                        <div class="thumb">
                            <a href="/apply">
                                <img src="img/picha/a.png" alt="">
                            </a>
                            <span class="badge bandge_2">HUNGARY-PECS UNIVERSITY </span>
                        </div>
                    </div>
                </div>
                 <div class="col-md-3">
                    <div class="single__news">
                        <div class="thumb">
                            <a href="/apply">
                                <img src="img/picha/c.png" alt="">
                            </a>
                            <span class="badge bandge_2">MALAYSIA-CITY UNIVERSITY</span>
                        </div>
                    </div>
                </div>
                 <div class="col-md-3">
                    <div class="single__news">
                        <div class="thumb">
                            <a href="/apply">
                                <img src="img/picha/d.png" alt="">
                            </a>
                            <span class="badge">CANADA- UNIVERSITY OF CANADA WEST</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- recent_news_area_end  -->
