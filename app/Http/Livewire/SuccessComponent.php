<?php

namespace App\Http\Livewire;

use App\Models\Posts;
use Livewire\Component;
use Livewire\WithPagination;

class SuccessComponent extends Component
{
    public function render()
    {
        $posts= Posts::paginate(12);
        return view('livewire.success-component',['posts'=>$posts])->layout('layouts.base');
    }
}
