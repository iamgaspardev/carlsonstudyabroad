<?php

namespace App\Http\Livewire;

use App\Models\Posts;
use Livewire\Component;
use Livewire\WithPagination;

class HomeComponent extends Component
{
    use WithPagination;
    function truncateText($text, $limit = 40) {
        $words = explode(' ', $text);
        if (count($words) > $limit) {
            return implode(' ', array_slice($words, 0, $limit)) . '...';
        }
        return $text;
    }
    public function render()
    {
        $posts= Posts::paginate(6);
        return view('livewire.home-component',['posts'=>$posts])->layout('layouts.base');
    }
}
