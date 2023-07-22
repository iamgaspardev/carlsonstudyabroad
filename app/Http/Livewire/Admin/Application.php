<?php

namespace App\Http\Livewire\Admin;
use Livewire\WithPagination;
use App\Models\Upload;
use Livewire\Component;

class Application extends Component
{
    use WithPagination;
    public function deletePost($id){
        $product= Upload::find($id);
        $product->delete();
        session()->flash('message','Successfuly Application has been deleted');
    }
    public function render()
    {
        $upload = Upload::paginate(10);
        return view('livewire.admin.application',['upload'=>$upload])->layout('layouts.base');
    }
}
