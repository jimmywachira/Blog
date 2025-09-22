<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;
use App\Models\Article;
use Livewire\Attributes\Title;


class ArticleForm extends Form
{

    public Article $article;
    
    public $errors = [];

    public bool $published = false;

    public array $notifications = [];

    public bool $allowNotifications = false;

    #[Validate('required|min:8|max:140')]
    public $title = '';

    #[Validate('required|min:140')]
    public $content = '';

    public function setArticle(Article $article)
    {
        $this->title = $article->title;
        $this->content = $article->content;
        $this->published = $article->published;
        $this->notifications = $article->notifications ?? [];

        $this->allowNotifications = count($this->notifications) > 0;

        $this->article = $article;
    }

    public function store()
    {
        $this->validate();

        if(!$this->allowNotifications) {
            $this->notifications = [];
        }

        Article::create($this->only('title', 'content', 'published', 'notifications'));
    }

    public function update()
    {
        $this->validate();

        if(!$this->allowNotifications) {
            $this->notifications = [];
        }

        $this->article->update($this->only('title', 'content', 'published', 'notifications'));
    }

}
