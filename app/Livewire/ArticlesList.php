<?php

namespace App\Livewire;

use App\Enums\ArticleStatus;
use App\Models\Article;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\View\View;
use Livewire\Component;

class ArticlesList extends Component
{
    public function render(): View
    {
        return view('livewire.articles-list', [
            'articles' => Article::with('tags')
                ->unless(auth()->user(), function (Builder $query) {
                    return $query->where('status', ArticleStatus::PUBLISHED);
                })
                ->get()
        ]);
    }
}
