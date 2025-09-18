<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Validate;
use App\Models\Article;
use Livewire\Attributes\On;

class Search extends Component
{
    #[Validate('required')]
    public $searchText = '';
    public $results = [];

    #[On('search.clear-results')]
    public function clear(){
        $this->reset('searchText', 'results');
    }

    public function updatedSearchText()
    {
        $this->reset('results');
        $this->validate();
        $searchTerm = '%'.$this->searchText.'%';
        $this->results = Article::where('title', 'like', $searchTerm)
            ->get();
    }

    public function render()
    {
        return view('livewire.search');
    }
}
