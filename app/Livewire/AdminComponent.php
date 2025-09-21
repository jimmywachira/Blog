<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;


#[Layout('components.layouts.admin')]
class AdminComponent extends Component
{
    public function render()
    {
        return view('livewire.dashboard');
    }
}
