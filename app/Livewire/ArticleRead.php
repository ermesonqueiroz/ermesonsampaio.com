<?php

namespace App\Livewire;

use App\Enums\ArticleStatus;
use App\Markdown\MarkdownConverter;
use App\Models\Article;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Builder;
use Livewire\Component;

class ArticleRead extends Component
{
    private readonly ?Article $article;

    public function mount(string $slug): void
    {
        $this->article = Article::query()
            ->with('tags')
            ->where('slug', $slug)
            ->unless(auth()->user(), function (Builder $query) {
                return $query->where('status', ArticleStatus::PUBLISHED);
            })
            ->first();
    }

    public function render(): View
    {
        if (!$this->article) abort(404);
        return view('livewire.article-read', [
            'article' => $this->article,
            'content' => MarkdownConverter::convert($this->article->content)
        ]);
    }
}
