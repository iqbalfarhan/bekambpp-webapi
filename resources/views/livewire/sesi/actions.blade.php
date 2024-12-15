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
                    <input type="text" wire:model="form.order" @class([
                        'input flex items-center gap-2',
                        'input-error' => $errors->first('form.order'),
                    ])
                        placeholder="Nomor urut sesi" />
                </div>
                <div class="form-control">
                    <label class="label">
                        <span class="label-text">Nama sesi</span>
                    </label>
                    <input type="text" wire:model="form.name" @class([
                        'input flex items-center gap-2',
                        'input-error' => $errors->first('form.name'),
                    ]) placeholder="Nama sesi" />
                </div>
                <div class="form-control">
                    <label class="label">
                        <span class="label-text">Jam sesi</span>
                    </label>
                    <input type="text" wire:model="form.jam" @class([
                        'input flex items-center gap-2',
                        'input-error' => $errors->first('form.jam'),
                    ]) placeholder="Jam sesi" />
                    <label class="label">
                        <span class="label-text-alt text-primary">format 00:00 - 00:00</span>
                    </label>
                </div>
                <div class="form-control">
                    <label class="label">
                        <span class="label-text">Keterangan</span>
                    </label>
                    <input type="text" wire:model="form.keterangan" @class([
                        'input flex items-center gap-2',
                        'input-error' => $errors->first('form.keterangan'),
                    ])
                        placeholder="Keterangan sesi" />
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
