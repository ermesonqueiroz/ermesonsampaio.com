<main class="w-full max-w-screen-xl mx-auto mt-5 grid grid-cols-2 gap-x-28 gap-y-14">
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
                <h1 class="text-3xl leading-tight tracking-wide font-heading uppercase font-bold text-justify hover:text-neutral-600 transition-colors">
                    <a href="{{ $article->slug }}">{{ $article->title }}</a>
                </h1>
                <h2 class="mt-2 font-heading leading-snug text-lg text-justify">
                    {{ $article->subtitle }}
                </h2>
            </hgroup>
        </section>
    @endforeach
</main>
