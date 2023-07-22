   <!-- ======= Details Section ======= -->
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
                            <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">PHD Scholarships</a>
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
                                <div class="program_thumb" title="{{$post->title}} ">
                                    <img height="300" width="100%" src="{{asset('assets/img/posts/')}}/{{$post->image}}"  alt="{{$post->title}}">
                                </div>
                                <div class="program__content">
                                    <span style="color:green">Available now</span>
                                    <p>{{$post->title}}</p>
                                    <a href="{{route('apply.user')}}" class="boxed-btn5">Apply NOw</a>
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
