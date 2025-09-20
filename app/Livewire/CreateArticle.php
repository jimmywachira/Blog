<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\Attributes\Validate;
use App\Models\Article;

#[Title('Manage Articles')]

class CreateArticle extends AdminComponent
{
    #[Title('Create Article')]
    #[Validate('title', 'required|min:3|max:255')]
    public $title = '';
    #[Validate('content', 'required|min:140')]
    public $content = '';

    public function save()
    {
        $this->validate();

        \App\Models\Article::create([
            'title' => $this->title,
            'content' => $this->content,
        ]);

        $this->session->flash('message', 'Article created successfully.');

        return redirect('/dashboard/articles', ['navigate' => true]);
    }

    public function render()
    {
        return view('livewire.create-article');
    }
}
