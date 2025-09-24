<?php

namespace App\Livewire;

use App\Livewire\Forms\ArticleForm;
use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\Attributes\Validate;
use App\Models\Article;
use Livewire\Features\SupportFileUploads\WithFileUploads;
use Livewire\Form;


#[Title('Create Article')]
class CreateArticle extends AdminComponent
{

    use WithFileUploads;

    public ArticleForm $form;

    public function save()
    {
        $this->form->store();

        return redirect()->route('dashboard.articles.index')->with('message', 'Article created successfully.');
    }

    public function render()
    {
        return view('livewire.create-article');
    }
}
