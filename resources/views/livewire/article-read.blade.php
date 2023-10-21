<main class="w-full max-w-screen-xl my-5 mx-auto flex flex-col gap-5">
    <header class="flex flex-col gap-3">
        <img  src="{{ $article->banner->url }}" alt="{{ $article->title }}"/>
        <hgroup>
            <h1 class="text-3xl leading-tight tracking-wide font-heading uppercase font-bold text-justify hover :text-neutral-600 transition-colors">
                <a href="{{ $article->slug }}">{{ $article->title }}</a>
            </h1>
            <span class="inline-flex gap-3 font-heading text-indigo-600">
                <p>{{ date_format($article->created_at, 'd/m/Y') }}</p>
                @foreach($article->tags as $tag)
                    <p>#{{ $tag->name }}</p>
                @endforeach
            </span>
        </hgroup>
    </header>

    <article class="prose">
        <x-markdown>
            {!! $article->content !!}
        </x-markdown>
    </article>
</main>
