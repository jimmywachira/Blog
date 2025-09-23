<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\WithPagination;
use Livewire\Attributes\Computed;

#[Title('Manage Articles')]
class ArticleList extends AdminComponent
{
    use WithPagination;

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
}
