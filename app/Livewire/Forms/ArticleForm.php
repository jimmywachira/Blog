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

    public string $notification = 'none';

    #[Validate('required|min:8|max:140')]
    public $title = '';

    #[Validate('required|min:140')]
    public $content = '';

    public function setArticle(Article $article)
    {
        $this->title = $article->title;
        $this->content = $article->content;
        $this->published = $article->published;
        $this->notification = $article->notification;

        $this->article = $article;
    }

    public function store()
    {
        $this->validate();

        Article::create($this->only('title', 'content', 'published', 'notification'));
    }

    public function update()
    {
        $this->validate();

        $this->article->update($this->only('title', 'content', 'published', 'notification'));
    }

}
