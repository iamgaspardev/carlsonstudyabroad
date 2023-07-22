<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\News;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;

class AdminAddNewsComponent extends Component
{
    use WithFileUploads;
    public $title;
    public $slug;
    public $news;
    public $image;

    public function generateSlug(){
        $this->slug=Str::slug($this->title,'-');
    }

    public function addNews(){
        $taarifa = new News();
        $taarifa->title=$this->title;
        $taarifa->slug=$this->slug;
        $taarifa->news=$this->news;
        $imageName=Carbon::now()->timestamp.'.' . $this->image->extension();
        $this->image->storeAs('posts',$imageName);
        $taarifa->image=$imageName;

        $taarifa->save();
        session()->flash('message','Successfully Product has heen added !');
    }

    public function render()
    {
        return view('livewire.admin.admin-add-news-component')->layout('layouts.base');
    }
}
