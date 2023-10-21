<?php

namespace App\Livewire;

use App\Models\Article;
use Illuminate\View\View;
use Livewire\Component;

class ArticlesDashboardSection extends Component
{
    public function render(): View
    {
        return view('livewire.articles-dashboard-section', [
            'articles' => Article::with('tags')->get(),
            'totalArticles' => Article::query()->count(),
            'lastArticleAt' => Article::query()
                ->orderByDesc('created_at')
                ->first()
                ?->created_at
        ]);
    }
}
