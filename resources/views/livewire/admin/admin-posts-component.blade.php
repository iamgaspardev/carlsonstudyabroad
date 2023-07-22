<div>
<style>
        nav svg{
            height:20px;
        }
        nav .hidden{
            display:block !important;
        }
    </style>
    <div class="container"  style="padding: 30px 0;padding-top:5%">
      <div class="row">
          <div class="col-md-12">
              <div class="panel panel-default">
                  <div class="panel-heading">
                      All Posts
                  </div>
                  <div class="col-md-12">
                           <button type="submit"  style="float:right"class="btn btn-success"><a style="color:white" href ="{{route('admin.add.posts')}}">Add Posts</a></button>
                  </div>
                  <div class="panel-body">
                  @if(Session::has('message'))
                           <div class="alert alert-success" role="alert">
                             {{Session::get('message')}}
                           </div>
                    @endif
                  <table class="table table-striped">
                       <thead>
                           <tr>
                               <th>Id</th>
                               <th>Image</th>
                               <th>title</th>
                               <th>Date</th>
                               <th>Action</th>
                           </tr>
                       </thead>
                       <tbody>
                           @foreach($posts as $post)
                           <tr>
                            <td>{{$post->id}}</td>
                            <td><img src="{{asset('assets/img/posts/')}}/{{$post->image}}" width="60"/></td>
                            <td>{{$post->title}}</td>
                            <td>{{$post->created_at}}</td>
                            <td>
                                <a href="#" style="margin:right" wire:click.prevent="deletePost({{$post->id}})"><i class="bx bx-x" style="color:red; font-size:25px;float:right"></i>Delete</a>
                            </td>
                            </tr>
                           @endforeach
                       </tbody>
                     </table>
                     {{$posts->links()}}
                  </div>
              </div>
          </div>
      </div>
</div>
</div>
