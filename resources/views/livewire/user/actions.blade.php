<div>
    <input type="checkbox" class="modal-toggle" @checked($show) />
    <div class="modal" role="dialog">
        <form class="modal-box max-w-sm" wire:submit="simpan">
            <h3 class="font-bold text-lg">Form user</h3>
            <div class="py-4 space-y-2">
                <label class="form-control">
                    <div class="label">
                        <span class="label-text">Nama lengkap</span>
                    </div>
                    <input type="text" placeholder="Full name" @class(['input', 'input-error' => $errors->first('form.name')]) wire:model="form.name" />
                </label>
                <label class="form-control">
                    <div class="label">
                        <span class="label-text">Alamat email</span>
                    </div>
                    <input type="email" placeholder="Email address" @class(['input', 'input-error' => $errors->first('form.email')])
                        wire:model="form.email" />
                </label>
                <label class="form-control">
                    <div class="label">
                        <span class="label-text">Password baru</span>
                    </div>
                    <input type="password" placeholder="Password" @class(['input', 'input-error' => $errors->first('form.password')])
                        wire:model="form.password" />
                </label>
            </div>
            <div class="modal-action justify-between">
                <button wire:click="closeModal" type="button" class="btn btn-ghost">Close</button>
                <button class="btn btn-primary">
                    <x-tabler-check class="size-5" />
                    <span>Simpan</span>
                </button>
            </div>
        </form>
    </div>
</div>
