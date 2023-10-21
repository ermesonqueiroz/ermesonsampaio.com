<section class="w-full max-w-screen-xl mx-auto flex flex-col gap-8 mt-6">
    <div class="flex gap-4">
        <div class="p-6 bg-gray-200 rounded-sm">
            <h2 class="font-heading  text-lg">Número de Artigos</h2>
            <p class="text-2xl font-bold">{{ $totalArticles }}</p>
        </div>
        @if($totalArticles > 0)
            <div class="p-6 bg-gray-200 rounded-sm">
                <h2 class="font-heading text-lg">Dias sem postar</h2>
                <p class="text-2xl font-bold">{{ date_diff($lastArticleAt, now())->days }}</p>
            </div>
            <div class="p-6 bg-gray-200 rounded-sm">
                <h2 class="font-heading text-lg">Último artigo postado em</h2>
                <p class="text-2xl font-bold">{{ date_format($lastArticleAt, 'd/m/Y') }}</p>
            </div>
        @endif
    </div>

    <div>
        <div class="flex justify-between items-center">
            <h1 class="uppercase text-3xl font-bold font-heading">Artigos</h1>

            <a href="/admin/article" class="font-heading font-medium text-white bg-indigo-600 px-3 h-10 text-center flex items-center rounded-md">
                Novo Artigo
            </a>
        </div>

        <figure class="relative overflow-x-auto mt-4">
            <table class="w-full text-left">
                <thead class="bg-gray-200 font-heading">
                    <tr>
                        <th scope="row" class="uppercase px-6 py-3">#</th>
                        <th scope="row" class="uppercase px-6 py-3">slug</th>
                        <th scope="row" class="uppercase px-6 py-3">title</th>
                        <th scope="row" class="uppercase px-6 py-3">status</th>
                        <th scope="row" class="px-6 py-3"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($articles as $article)
                        <tr class="border-b border-gray-200">
                            <th scope="row" class="px-6 py-3">{{ $article->id }}</th>
                            <td class="truncate px-6 py-3">
                                <a href="{{ $article->slug }}" class="text-indigo-600">
                                    {{ $article->slug }}
                                </a>
                            </td>
                            <td class="truncate px-6 py-3">{{ $article->title }}</td>
                            <td class="truncate px-6 py-3 font-mono">{{ $article->status }}</td>
                            <td>
                                <a href="/admin/{{ $article->slug }}">
                                    <x-eos-edit class="h-6 w-6" />
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </figure>
    </div>
</section>
