<?php

namespace App\Livewire;

use App\Models\Article;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Illuminate\View\View;
use Livewire\Component;

class CreateArticle extends Component
{
    public string $banner;
    public string $title;
    public string $content;

    public function handleSave(): void
    {
        Log::info('opa');

        $article = Article::create([
            'slug' => Str::slug($this->title),
            'title' => $this->title,
            'content' => $this->content
        ]);

        $article->banner()->create([
            'url' => $this->banner
        ]);

        $this->redirect(route('admin'));
    }

    public function render(): View
    {
        return view('livewire.create-article');
    }
}
