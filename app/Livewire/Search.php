<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Validate;
use App\Models\Article;
use Livewire\Attributes\On;
use Livewire\Attributes\Url;

class Search extends Component
{
    // #[Validate('required')]
    #[Url(as:'q', except: '')]
    public $searchText = '';
    // public $results = [];

    #[On('search.clear-results')]
    public function clear(){
        $this->reset('searchText');
    }

    // public function updatedSearchText()
    // {
    //     $this->reset('results');
    //     $this->validate();
    //     $searchTerm = '%'.$this->searchText.'%';

    //     $this->results = Article::where('title', 'like', $searchTerm)
    //         ->get();
    // }

    protected function queryString()
    {
        return [
            'searchText' => [
                'as' => 'q',
                'history' => true,
                'except' => '',
            ]
        ];
    }

    public function render()
    {
        return view('livewire.search',[
            'results' => Article::where('title', 'like', '%'.$this->searchText.'%')
            ->get()
        ]);
    }
}
