<?php

namespace App\Http\Livewire\Admin;
use Livewire\WithPagination;
use App\Models\News;

use Livewire\Component;

class AdminNewsComponent extends Component
{
    use WithPagination;
    public function deleteNews($id){
        $product= News::find($id);
        $product->delete();
        session()->flash('message','Successfuly Product has been deleted');
    }
    public function render()
    {
        $news = News::paginate(10);
        return view('livewire.admin.admin-news-component',['news'=>$news])->layout('layouts.base');
    }
}
