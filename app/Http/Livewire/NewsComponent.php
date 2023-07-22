<?php

namespace App\Http\Livewire;

use App\Models\News;
use Livewire\Component;
use Livewire\WithPagination;

class NewsComponent extends Component
{
    use WithPagination;
    public function render()
    {
        $news= News::paginate(12);
        return view('livewire.news-component',['news'=>$news])->layout('layouts.base');
    }
}
