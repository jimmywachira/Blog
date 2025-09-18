<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Reactive;

class SearchResults extends Component
{

    #[Reactive]
    public $results = [];
    
    #[Reactive]
    public $show = [];

    public $placeholder = 'Search articles!';
    
    // public function clear(){
    //     $this->dispatch('search.clear-results');
    // }

    public function render()
    {
        return view('livewire.search-results');
    }
}
