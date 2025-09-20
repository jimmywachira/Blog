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
    // #[Title('Edit Article')]

    public ArticleForm $form;

    public function mount(Article $article)
    {
        $this->form->setArticle($article);
    }

    public function save()
    {
        #$this->validate();
        #$this->article->update($this->only('title', 'content'));
        #$this->form->update($this->form->only('title', 'content'));
        $this->form->update();

        #$this->session->flash('message', 'Article updated successfully.');

        return redirect('/dashboard/articles', ["navigate" => true]);
    }       

    public function cancel()
    {
        return redirect('/dashboard/articles', ["navigate" => true]);
    }   

    public function render()
    {
        return view('livewire.edit-article');
    }
}
