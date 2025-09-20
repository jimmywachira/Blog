<?php

use App\Livewire\ArticleIndex;
use App\Livewire\ArticleList;
use App\Livewire\Dashboard;
use App\Livewire\Settings\Appearance;
use App\Livewire\Settings\Password;
use App\Livewire\Settings\Profile;
use Illuminate\Support\Facades\Route;
use App\Livewire\Search;
use App\Livewire\ShowArticle;
use App\Livewire\CreateArticle;
use App\Livewire\EditArticle;

Route::get('/', ArticleIndex::class)->name('home');
Route::get('/articles/{article}', ShowArticle::class)->name('articles.show');
Route::get('/dashboard', Dashboard::class)->name('dashboard');
Route::get('/dashboard/articles', ArticleList::class)->name('dashboard.articles');
Route::get('/dashboard/articles/create', CreateArticle::class)->name('dashboard.articles.create');
Route::get('/dashboard/articles/{article}/edit', EditArticle::class)->name('dashboard.articles.edit');


// Route::view('dashboard', 'dashboard')
//     ->middleware(['auth', 'verified'])
//     ->name('dashboard');

// Route::middleware(['auth'])->group(function () {
//     Route::redirect('settings', 'settings/profile');

//     Route::get('settings/profile', Profile::class)->name('settings.profile');
//     Route::get('settings/password', Password::class)->name('settings.password');
//     Route::get('settings/appearance', Appearance::class)->name('settings.appearance');
// });

// require __DIR__.'/auth.php';
