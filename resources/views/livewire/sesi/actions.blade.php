<div>
    <input type="checkbox" class="modal-toggle" @checked($show) />
    <div class="modal" role="dialog">
        <form class="modal-box" wire:submit="simpan">
            <h3 class="text-lg font-bold">Hello!</h3>
            <p class="py-4">This modal works with a hidden checkbox!</p>
            <div class="modal-action justify-between">
                <button type="button" wire:click="closeModal" class="btn btn-ghost">Close</button>
                <button class="btn btn-primary">
                    <x-tabler-check />
                    <span>Simpan</span>
                </button>
            </div>
        </form>
    </div>
</div>
