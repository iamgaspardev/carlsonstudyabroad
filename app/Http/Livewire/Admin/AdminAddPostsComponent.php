<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Posts;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;

class AdminAddPostsComponent extends Component
{
    use WithFileUploads;
    public $title;
    public $slug;
    public $description;
    public $image;

    public function generateSlug(){
        $this->slug=Str::slug($this->title,'-');
    }

    public function addPosts(){
        $posts = new Posts();
        $posts->title=$this->title;
        $posts->slug=$this->slug;
        $posts->description=$this->description;
        $imageName=Carbon::now()->timestamp.'.' . $this->image->extension();
        $this->image->storeAs('posts',$imageName);
        $posts->image=$imageName;

        $posts->save();
        session()->flash('message','Successfully Product has heen added !');
    }

    public function render()
    {
        return view('livewire.admin.admin-add-posts-component')->layout('layouts.base');
    }
}
