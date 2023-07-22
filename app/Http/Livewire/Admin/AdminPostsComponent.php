<?php

namespace App\Http\Livewire\Admin;
use Livewire\WithPagination;
use App\Models\Posts;

use Livewire\Component;

class AdminPostsComponent extends Component
{
    use WithPagination;
    public function deletePost($id){
        $product= Posts::find($id);
        $product->delete();
        session()->flash('message','Successfuly Product has been deleted');
    }
    public function render()
    {
        $posts = Posts::paginate(10);
        return view('livewire.admin.admin-posts-component',['posts'=>$posts])->layout('layouts.base');
    }
}
