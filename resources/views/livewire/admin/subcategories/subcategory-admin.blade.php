<div>


    <div class="flex justify-end">
        <x-button wire:click="$set('openModal', true)" class="bg-emerald-600 hover:bg-green-600 focus:bg-green-600 active:bg-green-500">
            Nueva subcategoría
        </x-button>
    </div>

    <div>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <x-dialog-modal wire:model="openModal">

            <x-slot name="title">
                Crear subcategoria
            </x-slot>

            <x-slot name="content">
                <div class="mb-3">
                    <label for="name" class="form-label">Nombre</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Nombre de la subcategoría" >
                  </div>
            </x-slot>

            <x-slot name="footer">
                <x-button wire:click="save" class="bg-blue-500 hover:bg-blue-400">
                    Crear
                </x-button>
            </x-slot>
        </x-dialog-modal>

    </div>





</div>
