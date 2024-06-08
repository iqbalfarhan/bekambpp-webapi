<div>
    <input type="checkbox" class="modal-toggle" @checked($show) />
    <div class="modal" role="dialog">
        <form class="modal-box max-w-sm" wire:submit="simpan">
            <div class="flex justify-between">
                <h3 class="font-bold text-lg">Form paket</h3>
                @isset($form->paket)
                    <button type="button" class="btn btn-xs btn-error btn-square"
                        wire:click="deletePaket({{ $form->paket->id }})" wire:confirm="Yakin menghapus paket ini?">
                        <x-tabler-trash class="size-4" />
                    </button>
                @endisset
            </div>
            <div class="py-4 space-y-2">
                <div class="avatar" onclick="document.getElementById('pickphoto').click()">
                    <div class="w-24 rounded-full bg-base-200">
                        <img src="{{ $photo ? $photo->temporaryUrl() : $form->paket->image ?? url('noimage.png') }}"
                            alt="">
                    </div>
                </div>
                <input type="file" id="pickphoto" wire:model="photo" class="hidden">
                <label class="form-control">
                    <div class="label">
                        <span class="label-text">Nama paket</span>
                    </div>
                    <input type="text" placeholder="Nama paket" @class(['input', 'input-error' => $errors->first('form.name')])
                        wire:model="form.name" />
                </label>
                <label class="form-control">
                    <div class="label">
                        <span class="label-text">Harga paket</span>
                    </div>
                    <input type="number" placeholder="Harga paket" @class(['input', 'input-error' => $errors->first('form.harga')])
                        wire:model="form.harga" />
                </label>
                <label class="form-control">
                    <div class="label">
                        <span class="label-text">Keterangan</span>
                    </div>
                    <textarea type="text" placeholder="Keterangan paket" @class([
                        'textarea',
                        'textarea-error' => $errors->first('form.keterangan'),
                    ]) wire:model="form.keterangan"></textarea>
                </label>
            </div>
            <div class="modal-action justify-between">
                <button type="button" wire:click="closeModal" class="btn btn-ghost">Close</button>
                <button class="btn btn-primary">
                    <x-tabler-check class="size-5" />
                    <span>Simpan</span>
                </button>
            </div>
        </form>
    </div>
</div>
