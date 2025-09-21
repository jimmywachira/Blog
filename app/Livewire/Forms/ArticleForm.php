<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;
use App\Models\Article;
use Livewire\Attributes\Title;


class ArticleForm extends Form
{
    #[Title('Create Article')]

    public Article $article;
    #public $errors = [];

    #[Validate('required|min:8|max:140')]
    public $title = '';

    #[Validate('required|min:140')]
    public $content = '';

    public function setArticle(Article $article)
    {
        $this->article = $article;
        $this->title = $article->title;
        $this->content = $article->content;
    }

    public function store()
    {
        $this->validate();

        Article::create($this->only('title', 'content'));

        #$this->session->flash('message', 'Article created successfully.');
        #return redirect('/dashboard/articles', ['navigate' => true]);
    }

    public function update()
    {
        $this->validate();

        $this->article->update($this->only('title', 'content'));
    }

}
