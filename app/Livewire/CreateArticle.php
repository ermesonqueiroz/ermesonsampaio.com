<?php

namespace App\Livewire;

use App\Models\Article;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Str;
use Livewire\Component;
use App\Markdown\MarkdownConverter;

class CreateArticle extends Component
{
    public string $banner;
    public string $title;
    public string $content;

    public function handleSave(): void
    {
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
