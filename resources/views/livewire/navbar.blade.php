<header class="w-full flex py-8 border-b justify-center border-gray-200">
    <nav class="flex justify-between max-w-screen-xl w-full items-center">
        <h1 class="select-none text-3xl uppercase font-bold hover:text-neutral-600 transition-colors">
            <a href="/">Ermeson Sampaio</a>
        </h1>

        <ul class="flex items-center gap-10">
            @foreach($navItems as $item)
                <li class="font-heading text-lg uppercase font-medium hover:text-neutral-600 transition-colors border-b-2 {{ $activeRoute == $item ? 'border-black' : 'border-transparent' }}">
                    <a href="{{ route($item) }}">
                        {{ $item }}
                    </a>
                </li>
            @endforeach
        </ul>
    </nav>
</header>
