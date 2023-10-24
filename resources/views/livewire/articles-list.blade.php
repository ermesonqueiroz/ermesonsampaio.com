<main class="w-full max-w-screen-xl mx-auto my-16 grid grid-cols-2 gap-x-28 gap-y-14">
    @foreach($articles as $article)
        <section class="flex flex-col gap-3">
            <span class="inline-flex gap-3 font-heading text-indigo-600">
                <p>{{ date_format($article->created_at, 'd/m/Y') }}</p>
                @foreach($article->tags as $tag)
                    <p>#{{ $tag->name }}</p>
                @endforeach
            </span>
            <img class="aspect-[4/2] object-cover object-center" src="{{ $article->banner->url }}" alt="{{ $article->title }}" />
            <hgroup>
                @if($article->status !== \App\Enums\ArticleStatus::PUBLISHED)
                    <p class="text-red-600 font-heading">Pré-visualização</p>
                @endif
                <h1 class="text-3xl w-fit leading-tight tracking-wide font-heading uppercase font-bold text-justify hover:text-neutral-600 transition-colors">
                    <a href="{{ $article->slug }}">{{ $article->title }}</a>
                </h1>
            </hgroup>
        </section>
    @endforeach
</main>
