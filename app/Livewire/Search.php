<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Validate;
use App\Models\Article;

class Search extends Component
{
    #[Validate('required')]
    public $searchText = '';
    public $results = [];

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
