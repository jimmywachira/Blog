<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;
use App\Models\Article;
use Livewire\Attributes\Title;
use Livewire\Attributes\Locked;


class ArticleForm extends Form
{

    public ?Article $article = null;

    #[Locked]
    public int $id;
    
    public $errors = [];

    public bool $published = false;

    public array $notifications = [];

    public bool $allowNotifications = false;

    public $photo_path = '';

    #[Validate('image|max:1024')] // 1MB Max
    public $photo;

    #[Validate('required|min:8|max:140')]
    public $title = '';

    #[Validate('required|min:140')]
    public $content = '';

    public function setArticle(Article $article)
    {
        $this->id = $article->id;
        $this->title = $article->title;
        $this->content = $article->content;
        $this->published = (bool) $article->published;
        $this->notifications = $article->notifications ?? [];
        $this->photo_path = $article->photo_path;


        $this->allowNotifications = count($this->notifications) > 0;

        $this->article = $article;
    }

    public function store()
    {
        $this->validate();

        if(!$this->allowNotifications) {
            $this->notifications = [];
        }

        if($this->photo){
            $this->photo_path = $this->photo->storePublicly('articles_photos',[ 'disk' => 'public' ]);
        }

        Article::create($this->only('title', 'content', 'published', 'notifications', 'photo_path'));
        cache()->forget('published-count');
    }

    public function update()
    {
        $this->validate();

        if(!$this->allowNotifications) {
            $this->notifications = [];
        }

        if($this->photo){
            $this->photo_path = $this->photo->storePublicly('articles_photos',[ 'disk' => 'public' ]);
        }

        $this->article->update($this->only('title', 'content', 'published', 'notifications', 'photo_path'));
        cache()->forget('published-count');
    }

}
