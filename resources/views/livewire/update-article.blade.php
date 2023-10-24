<form class="w-full max-w-screen-xl mx-auto mb-10" wire:submit.prevent="handleUpdate">
    <div class="flex flex-col gap-y-8 my-10">
        <div class="flex flex-col gap-2">
            <label for="banner" class="text-xl font-heading uppercase font-bold tracking-wide">Banner</label>
            <input
                required
                type="url"
                id="banner"
                wire:model.live="banner"
                class="border border-gray-300 px-2 h-10 w-full rounded-md"
            />
        </div>
        <div class="flex flex-col gap-y-8">
            <div class="flex flex-col gap-2">
                <label for="title" class="text-xl font-heading uppercase font-bold tracking-wide">Título</label>
                <input
                    required
                    type="text"
                    id="title"
                    maxlength="255"
                    wire:model.live="title"
                    class="border border-gray-300 px-2 h-10 w-full rounded-md"
                />
            </div>
            <div class="flex flex-col gap-2">
                <label for="content" class="text-xl font-heading uppercase font-bold tracking-wide">Conteúdo</label>
                <textarea
                    required
                    id="content"
                    name="content"
                    class="border border-gray-300 rounded-md resize-y p-2"
                    rows="10"
                    wire:model.debounce.60s="content"
                ></textarea>
            </div>
        </div>
        <div class="flex gap-3 mt-2 font-heading font-medium justify-end">
            <button type="submit" class="font-heading font-medium text-white bg-indigo-600 px-3 h-10 text-center flex items-center rounded-md">
                Salvar
            </button>
        </div>
    </div>
</form>
