<div class="page-wrapper">
    @livewire('partial.header', [
        'title' => 'Paket terapi',
        'subtitle' => 'Pengaturan paket terapi',
    ])

    <div class="flex flex-col md:flex-row justify-between gap-1">
        <input type="search" class="input" placeholder="Pencarian" />
        <button class="btn btn-primary" wire:click="$dispatch('createPaket')">
            <x-tabler-circle-plus class="size-5" />
            <span>Tambah paket</span>
        </button>
    </div>

    <div class="grid grid-cols-3 gap-6">
        @foreach ($pakets as $paket)
            <div wire:key="{{ $paket->id }}" wire:click="$dispatch('editPaket', {paket: {{ $paket->id }}})">
                @livewire('paket.card', ['paket' => $paket], key($paket->id))
            </div>
        @endforeach
    </div>

    @livewire('paket.actions')
</div>
