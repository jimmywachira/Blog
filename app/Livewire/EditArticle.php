<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\Attributes\Validate;
use App\Models\Article;
use App\Livewire\Forms\ArticleForm;
use Livewire\Form;
use Livewire\Features\SupportFileUploads\WithFileUploads;
use Illuminate\Support\Facades\Storage;


class EditArticle extends AdminComponent
{   
    use WithFileUploads;

    #[Title('Edit Article')]

    public ArticleForm $form;

    public function mount(Article $article)
    {
        $this->form->setArticle($article);
    }

    public function downloadPhoto()
    {
        // if ($this->form->photo_path && Storage::disk('public')->exists($this->form->photo_path)) {
        //     return response()->download(Storage::disk('public')->path($this->form->photo_path));
        // }

        // session()->flash('error', 'Photo not found.');
        // return redirect()->back();

        // return response()->streamDownload(function() {
        //     echo Storage::disk('public')->get($this->form->photo_path);
        // }, 'photo.png');

        return response()->download(Storage::disk('public')->path($this->form->photo_path), 'photo.png');
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
