<main class="w-full max-w-screen-md mt-14 mx-auto flex flex-col">
    <header class="flex flex-col gap-3">
        <hgroup class="flex flex-col items-center gap-2 mb-2">
            <span class="inline-flex gap-3 font-heading text-indigo-600">
                <p>{{ date_format($article->created_at, 'd/m/Y') }}</p>
                @foreach($article->tags as $tag)
                    <p>#{{ $tag->name }}</p>
                @endforeach
            </span>
            <h1 class="text-3xl leading-tight tracking-wide font-heading uppercase font-bold text-center hover :text-neutral-600 transition-colors">
                <a href="{{ $article->slug }}">{{ $article->title }}</a>
            </h1>
        </hgroup>
        <img class="aspect-[4/2] object-cover content-center" src="{{ $article->banner->url }}" alt="{{ $article->title }}"/>
    </header>

    <article class="prose prose-xl w-full font-heading max-w-none">
        <x-markdown>
            {!! $article->content !!}
        </x-markdown>
    </article>
</main>
