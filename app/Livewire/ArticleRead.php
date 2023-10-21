<?php

namespace App\Livewire;

use App\Models\Article;
use Illuminate\View\View;
use Livewire\Component;

class ArticleRead extends Component
{
    private readonly ?Article $article;

    public function mount(string $slug): void
    {
        $this->article = Article::query()
            ->with('tags')
            ->where('slug', $slug)->first();
    }

    public function render(): View
    {
        return view('livewire.article-read', [
            'article' => $this->article
        ]);
    }
}
