<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Article;
use Livewire\Attributes\Title;
use Livewire\WithPagination;

#[Title('Articles')]
class ArticleIndex extends Component
{
    use withPagination;

    #public $articles= [];

    public function render()
    {
        return view('livewire.article-index', [
            'articles' => Article::paginate(15)
        ]);
    } 
}
