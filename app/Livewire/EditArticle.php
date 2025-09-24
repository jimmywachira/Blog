<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\Attributes\Validate;
use App\Models\Article;
use App\Livewire\Forms\ArticleForm;
use Livewire\Form;
use Livewire\Features\SupportFileUploads\WithFileUploads;


class EditArticle extends AdminComponent
{   
    use WithFileUploads;
    
    #[Title('Edit Article')]

    public ArticleForm $form;

    public function mount(Article $article)
    {
        $this->form->setArticle($article);
    }

    public function save()
    {
        $this->form->update();
        session()->flash('message', 'Article updated successfully!');
        $this->redirect(ArticleList::class, navigate: true);
    }

    public function render()
    {
        return view('livewire.edit-article');
    }
}
