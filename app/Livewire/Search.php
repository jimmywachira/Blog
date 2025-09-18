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

    public function updatedSearchText()
    {
        $this->reset('results');
        $this->validate();
        $this->results = Article::where('title', 'like', '%' . $this->searchText . '%')
            ->get();
    }

    public function render()
    {
        return view('livewire.search');
    }
}
