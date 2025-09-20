<?php

namespace App\Livewire;

use App\Livewire\Forms\ArticleForm;
use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\Attributes\Validate;
use App\Models\Article;
use Livewire\Form;


#[Title('Manage Articles')]

class CreateArticle extends AdminComponent
{

    public ArticleForm $form;

    public function save()
    {
        $this->form->store();

        #$this->session->flash('message', 'Article created successfully.');

        return redirect('/dashboard/articles', ['navigate' => true]);
    }

    public function render()
    {
        return view('livewire.create-article');
    }
}
