<div>
    <input type="checkbox" class="modal-toggle" @checked($show) />
    <div class="modal" role="dialog">
        <form class="modal-box" wire:submit="simpan">
            <h3 class="text-lg font-bold">Form pengaturan sesi</h3>
            <div class="py-4">
                <div class="form-control">
                    <label class="label">
                        <span class="label-text">Urutan</span>
                    </label>
                    <input type="text" wire:model="form.order" class="input input-bordered"
                        placeholder="Nama sesi" />
                </div>
                <div class="form-control">
                    <label class="label">
                        <span class="label-text">Nama sesi</span>
                    </label>
                    <input type="text" wire:model="form.name" class="input input-bordered" placeholder="Nama sesi" />
                </div>
                <div class="form-control">
                    <label class="label">
                        <span class="label-text">Jam sesi</span>
                    </label>
                    <input type="text" wire:model="form.jam" class="input input-bordered" placeholder="Nama sesi" />
                    <label class="label">
                        <span class="label-text-alt text-primary">format 00:00 - 00:00</span>
                    </label>
                </div>
                <div class="form-control">
                    <label class="label">
                        <span class="label-text">Keterangan</span>
                    </label>
                    <input type="text" wire:model="form.keterangan" class="input input-bordered"
                        placeholder="Nama sesi" />
                </div>
            </div>
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
