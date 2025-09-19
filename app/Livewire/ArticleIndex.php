<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Article;
use Livewire\Attributes\Title;

#[Title('Articles')]
class ArticleIndex extends Component
{
    #public $articles= [];

    public function render()
    {
        return view('livewire.article-index', [
            'articles' => Article::all()
        ]);
    } 
}
