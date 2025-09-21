<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\Attributes\Validate;
use App\Models\Article;
use App\Livewire\Forms\ArticleForm;
use Livewire\Form;


class EditArticle extends AdminComponent
{
    #[Title('Edit Article')]

    public ArticleForm $form;

    public function mount(Article $article)
    {
        $this->form->setArticle($article);
    }

    public function save()
    {
        $this->form->update();

        return redirect('/dashboard/articles', ["navigate" => true])->with('message', 'Article updated successfully');
    }

    public function cancel()
    {
        return redirect('/dashboard/articles', ["navigate" => true])->with('message', 'Edit cancelled');
    }   

    public function render()
    {
        return view('livewire.edit-article');
    }
}
