<form class="w-full max-w-screen-md gap-10 mx-auto flex h-screen flex-col flex-1 items-center justify-center" wire:submit="handleSubmit">
    <h1 class="select-none text-3xl uppercase font-bold hover:text-neutral-600 transition-colors">
        <a href="/">Ermeson Sampaio</a>
    </h1>

    <div class="flex flex-col w-full gap-4 bg-neutral-100 p-10 rounded-md">
        <div class="flex flex-col gap-2">
            <label for="login" class="text-xl font-heading uppercase font-bold tracking-wide">Login</label>
            <input
                type="text"
                id="login"
                wire:model.live="login"
                class="border border-gray-600 px-2 h-10 w-full rounded-md"
            />
        </div>

        <div class="flex flex-col gap-2">
            <label for="password" class="text-xl font-heading uppercase font-bold tracking-wide">Senha</label>
            <input
                type="password"
                id="password"
                wire:model.live="password"
                class="border border-gray-600 px-2 h-10 w-full rounded-md"
            />
        </div>

        <button type="submit" class="cursor-pointer bg-black h-12 rounded-md text-white uppercase font-heading font-bold">
            Login
        </button>
    </div>
</form>
