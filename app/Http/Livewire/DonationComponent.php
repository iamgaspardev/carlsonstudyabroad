<?php

namespace App\Http\Livewire;

use Livewire\Component;

class DonationComponent extends Component
{
    public function render()
    {
        return view('livewire.donation-component')->layout('layouts.base');
    }
}
