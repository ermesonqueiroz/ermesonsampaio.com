<?php

namespace App\Livewire;

use App\Models\Article;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Str;
use Livewire\Component;

class AdminArticle extends Component
{
    public ?Article $article = null;
    public string $banner;
    public string $title;
    public string $content;

    public function createArticle(): void
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

    public function updateArticle(): void
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

    public function handleSubmit(): void
    {
        if ($this->article) $this->updateArticle();
        else $this->createArticle();
    }

    public function mount(?string $slug = null): void
    {
        if (!empty($slug)) {
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
    }

    public function render(): View
    {
        return view('livewire.admin-article');
    }
}
