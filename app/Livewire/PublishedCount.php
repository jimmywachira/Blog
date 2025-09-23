<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;
use Livewire\Attributes\Lazy;
use Livewire\Attributes\Computed;

#[Lazy]
class PublishedCount extends Component
{
    // public $count = 0;
    public $placeholderText = '';

    #[Computed(cache: true, key: 'published-count')]
    public function Count()
    {
        sleep(1);

        return Article::where('published', true)->count();
    }

    public function placeholder(){
        return view('livewire.placeholder',[
            'message' => $this->placeholderText,
        ]);
    }

    public function render()
    {
        return view('livewire.published-count');
    }
}
