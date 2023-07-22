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
                      All Applications Post
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
                               <th>Full Name</th>
                               <th>Phone</th>
                               <th>Course</th>
                               <th>Email</th>
                               <th>Application Date</th>
                               <th>User Location</th>
                               <th>Attachment</th>
                               <th>Action</th>
                           </tr>
                       </thead>
                       <tbody>
                           @foreach($upload as $uploads)
                           <tr>
                            <td>{{$uploads->id}}</td>
                            <td>{{$uploads->name}}</td>
                            <td>{{$uploads->phone}}</td>
                            <td>{{$uploads->course}}</td>
                            <td>{{$uploads->email}}</td>
                            <td>{{$uploads->created_at}}</td>
                             <td>{{$uploads->location}}</td>
                             <td>{{$uploads->filename}}</td>
                             <td>
                                 <a href="#" style="margin-right: 10px;" wire:click.prevent="deletePost({{ $uploads->id }})">
                                    <i class="bx bx-trash" style="color: red; font-size: 25px; float: right;"></i>
                                        Delete
                                 </a>
                            </td>
                            </tr>
                           @endforeach
                       </tbody>
                     </table>
                  </div>
              </div>
          </div>
      </div>
</div>
</div>
