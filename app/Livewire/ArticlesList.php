<?php

namespace App\Livewire;

use App\Models\Article;
use Carbon\Carbon;
use Illuminate\View\View;
use Livewire\Component;

class ArticlesList extends Component
{
    public function render(): View
    {
        return view('livewire.articles-list', [
            'articles' => Article::with('tags')->get()
        ]);
    }
}
