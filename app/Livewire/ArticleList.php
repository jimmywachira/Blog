<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;

class ArticleList extends AdminComponent
{
    #[Title('Manage Articles')]
    public function render()
    {
        return view('livewire.article-list', [
            'articles' => \App\Models\Article::all(),
        ]);
    }
}
