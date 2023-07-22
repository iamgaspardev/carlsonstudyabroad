<x-guest-layout>
  <section id="abouting" class="abouting" style="display:flex; justify-content:center;  height:60vh;margin-top:100px">
    <div>
      @if (session('status'))
        <div class="mb-4 font-medium text-sm text-green-600">
          {{ session('status') }}
        </div>
      @endif

      <div class="row" data-aos="fade-up">
        <x-jet-validation-errors class="mb-4" />
        <form method="POST" action="{{ route('login') }}" class="col-lg-4 col-md-6">
          @csrf
          <div class="box" data-aos="zoom-in" data-aos-delay="100" style="width: 400px;">
            <h3 class="text-center">LOGIN HERE</h3>
            <div class="form-group mt-3 mt-md-0">
              <input type="email" name="email" class="form-control" id="name" placeholder="UserName" :value="old('email')" required autofocus>
            </div>
            <div class="form-group mt-3 mt-md-0">
              <input type="password" class="form-control" name="password" id="password" placeholder="*************" required>
            </div>
            <div class="text-center mt-3">
              <input style="width: 200px;" type="submit" class="btn btn-primary" name="submit" value="Login">
            </div>
          </div>
        </form>
      </div>
    </div>
  </section>
</x-guest-layout>
