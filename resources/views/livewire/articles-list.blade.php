<main class="w-full max-w-screen-xl mx-auto my-8 grid grid-cols-1 md:grid-cols-2 px-5 md:px-8 gap-x-10 gap-y-14">
    @foreach($articles as $article)
        <section class="flex flex-col w-full">
            <span class="inline-flex gap-3 font-heading text-indigo-600 text-sm lg:text-base">
                <p>{{ date_format($article->created_at, 'd/m/Y') }}</p>
                @foreach($article->tags as $tag)
                    <p>#{{ $tag->name }}</p>
                @endforeach
            </span>
            <img class="aspect-[4/2] object-cover object-center" src="{{ $article->banner->url }}" alt="{{ $article->title }}" />
            <hgroup class="mt-2">
                @if($article->status !== \App\Enums\ArticleStatus::PUBLISHED)
                    <p class="text-red-600 font-heading text-sm lg:text-base">Pré-visualização</p>
                @endif
                <h1 class="text-xl lg:text-2xl w-fit leading-tight tracking-wide font-heading uppercase font-bold text-justify hover:text-neutral-600 transition-colors">
                    <a href="{{ $article->slug }}">{{ $article->title }}</a>
                </h1>
            </hgroup>
        </section>
    @endforeach
</main>
