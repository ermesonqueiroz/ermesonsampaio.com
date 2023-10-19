<?php

namespace App\Livewire;

use Carbon\Carbon;
use Illuminate\View\View;
use Livewire\Component;

class ArticlesList extends Component
{
    public function render(): View
    {
        return view('livewire.articles-list', [
            'articles' => [
                [
                    'slug' => 'tudo-o-que-voce-precisa-saber-sobre-laravel',
                    'title' => 'Tudo o que você precisa saber sobre Laravel',
                    'created_at' => Carbon::now()->format('d/m/Y'),
                    'banner' => 'https://placehold.co/1500x700',
                    'tags' => ['js', 'css', 'php']
                ]
            ]
        ]);
    }
}
