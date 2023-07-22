
 <!-- ======= Pricing Section ======= -->
 <section id="abouting" class="abouting">
      <div class="container" style="padding-top:10%">

        <div class="section-title" data-aos="fade-up">
          <h2>News Page/</h2>
        </div>
        @foreach ($news as $new)
        <div class="row" data-aos="fade-left">

          <div class="col-lg-4 col-md-6">
            <div class="box" data-aos="zoom-in" data-aos-delay="100">
            <h3 style="color:red">News</h3>
           
            <p class="fst-italic">{{$new->news}}</p>
            
        </div>
          </div>

          <div class="col-lg-8 col-md-6 mt-4 mt-lg-0">
            <div class="box" data-aos="zoom-in" data-aos-delay="400">
            <div title="{{$new->title}} "class="col-md-4" data-aos="fade-right" >
              <img src="{{asset('assets/img/posts/')}}/{{$new->image}}" class="img-fluid" alt="{{$new->title}}">
            </div>
            </div>
          </div>
          @endforeach
        </div>

      </div>
    </section><!-- End abouting Section -->
