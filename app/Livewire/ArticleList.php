<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\WithPagination;

#[Title('Manage Articles')]
class ArticleList extends AdminComponent
{
    use WithPagination;

    public $showOnlyPublished = false;


    public function delete(Article $article){
    
        $article->delete();
        return redirect()->route('dashboard.articles')->with('message', 'Article deleted successfully.');
    }

    public function showAll(){
        $this->showOnlyPublished = false;
        $this->resetPage('articles->page');
    }

    public function showPublished(){
        $this->showOnlyPublished = true;
        $this->resetPage('articles->page');
    }

    public function render()
    {
        $query = Article::query();

        if($this->showOnlyPublished){
            $query->where('published', true);
        }

        return view('livewire.article-list', [
            'articles' => $query->paginate(20,pageName: 'articles->page'),
        ]);

    }
}
