<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\WithPagination;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Session;

#[Title('Manage Articles')]
class ArticleList extends AdminComponent
{
    use WithPagination;

    #[Session('published')]
    public $showOnlyPublished = false;

    #[Computed()]
    public function articles(){
        $query = Article::query();

        if($this->showOnlyPublished){
            $query->where('published', true);
        }

        return $query->paginate(20,pageName: 'articles->page');
    }

    public function delete(Article $article){
        if($this->articles->count()<10){
            throw new \Exception('Cannot delete article when there are less than 10 articles.'); 
        }
        $article->delete();
        unset($this->articles);
        cache()->forget('published-count');
        return redirect()->route('dashboard.articles')->with('message', 'Article deleted successfully.');
    }

    public function togglePublished($showOnlyPublished){
        $this->showOnlyPublished = $this->showOnlyPublished;
        $this->resetPage('articles->page');
    }
}
