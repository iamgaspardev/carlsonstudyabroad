
   <div class="col-md-6 offset-md-3 mt-1" style="margin-bottom: 40px; padding-top: 20px;background-color: #fff; border-radius: 15px; box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);">
        <h2 style="color:#ce0404;">CARL STUDY ABROAD APPLICATION FORM</h2>
        <a target="_blank"  style="padding-bottom:10px" class="mt-3 d-flex">unloacking your admission with carl international study abroad today by gaining up to 70% scholarship whereby by 1600$ you will be able to study in different parts of the world.  join now among 1000+ students 
        who will be benefited from our scholarships programes by filling this form now.</a>
        @if(session()->has('message'))
        <div class="alert alert-success">
          {{session('message')}}
        </div>
        @endif
        <form  wire:submit.prevent="uploadfile" id="form-id" method="POST" >
          <div class="form-group">
            <label for="exampleInputName">Full Name</label>
            <input type="text" name="name" class="form-control" id="exampleInputName" placeholder="Enter your name and surname"  wire:model="name">
            @error('name') <span class="text-danger">{{$message}}</span>@enderror
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1" >Course of Interest</label>
            <input type="text" name="course" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Course of Interest" wire:model="course">
            @error('course') <span class="text-danger">{{$message}}</span>@enderror  
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1" >Email address</label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" wire:model="email">
            @error('email') <span class="text-danger">{{$message}}</span>@enderror  
          </div>
           <div class="form-group">
            <label for="exampleInputEmail1" >Mobile number</label>
            <input type="text" name="phone" class="form-control" id="exampleInputName" placeholder="Enter your mobile number for a call"  wire:model="phone">
            @error('phone') <span class="text-danger">{{$message}}</span>@enderror
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1" >Location</label>
            <input type="text" name="location" class="form-control" id="exampleInputName" placeholder="Enter current city"  wire:model="location">
            @error('location') <span class="text-danger">{{$message}}</span>@enderror
          </div>
          <!-- <div class="form-group">
            <label for="exampleFormControlSelect1">Select Category</label>
            <select class="form-control" id="exampleFormControlSelect1" name="platform"  wire:model="category">
              <option>Full Scholarship</option>
              <option>Percent Scholarship</option>
            </select>
          </div> -->
          <hr>
          <div class="form-group mt-3">
            <label class="mr-2">Upload your documents:</label>
            <input type="file" name="filename" wire:model="filename">
            <br>@error('filename') <span class="text-danger">{{$message}}</span>@enderror
          </div>
          <hr>
          <div class="submit-button">
    <button type="submit" class="btn btn-danger" style="background-color:#ce0404">Submit</button>
  </div>
        </form>
    </div> 
