<div class="col-md-12" >
    <div class="container" style="padding:30px 0;padding-top:15%">
       <div class="row">
               <div class="col-md-3">

               </div>
               <div class="col-md-6">
               <div class="panel panel-default">
                   <div class="panel-heading">
                       <div class="row">
                           <div class="col-md-12">
                               <b>ADD NEWS</b>
                           </div>
                           <div class="col-md-12">
                           <button type="submit"  style="float:right"class="btn btn-success"><a style="color:white" href="{{route('admin.news')}}">All News</a></button>
                           </div>
                       </div>
                   </div>
                   <div class="panel-body">
                       @if(Session::has('message'))
                           <div class="alert alert-success" role="alert">
                             {{Session::get('message')}}
                           </div>
                       @endif
                       <form class="form-horizontal" enctype="multipart/form-data" wire:submit.prevent="addNews">
                         <div class="form-group">
                             <label class="col-md-12 control-label">Title</label>
                             <div class="col-md-12">
                                  <input type="text" placeholder="news title" class="form-control input md" wire:model="title" wire:keyup="generateSlug"/>
                             </div>
                         </div>

                         <div class="form-group">
                             <label class="col-md-12 control-label">title slug</label>
                             <div class="col-md-12">
                                  <input type="text" placeholder="Product slug" class="form-control input md"  wire:model="slug"/>
                             </div>
                         </div>

                         <div class="form-group">
                             <label class="col-md-12 control-label">Description</label>
                             <div class="col-md-12">
                                  <textarea type="text" placeholder="Write News Here...." class="form-control"  wire:model="news"></textarea>
                             </div>
                         </div>

                         <div class="form-group">
                             <label class="col-md-12 control-label">Image</label>
                             <div class="col-md-12">
                                  <input type="file"  class="input-file"  wire:model="image" />
                                  @if($image)
                                        <img src="{{$image->temporaryUrl()}}" width="120"/>
                                  @endif
                             </div>
                         </div>
                        <div class="form-group">
                             <label class="col-md-12 control-label"></label>
                             <div class="col-md-12">
                             <button type="submit" class="btn btn-success">Submit</button>
                             </div>
                         </div>
                       </form>
                   </div>
               </div>
               </div>
               <div class="col-md-3">
                   
               </div>
           </div>
           <div class="col-md-3">

           </div>
        </div>
    </div>
</div>