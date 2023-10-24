<?php

namespace App\Livewire;

use App\Models\Article;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class UpdateArticle extends Component
{
    public Article $article;
    public string $banner;
    public string $title;
    public string $content;

    public function mount(string $slug): void
    {
        $article = Article::query()
            ->with('tags')
            ->where('slug', $slug)
            ->first();

        abort_unless(isset($article), 404);

        $this->article = $article;
        $this->banner = $article->banner->url;
        $this->title = $article->title;
        $this->content = $article->content;
    }

    public function handleUpdate(): void
    {
        $this->article->update([
            'title' => $this->title,
            'content' => $this->content
        ]);

        $this->article->banner->update([
            'url'=> $this->banner
        ]);

        $this->redirect(route('admin'));
    }

    public function render(): View
    {
        return view('livewire.update-article');
    }
}
