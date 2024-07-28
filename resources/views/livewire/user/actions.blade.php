<div>
    <input type="checkbox" class="modal-toggle" @checked($show) />
    <div class="modal" role="dialog">
        <form class="modal-box max-w-sm" wire:submit="simpan">
            <h3 class="font-bold text-lg">Form pengaturan user</h3>
            <div class="py-4 space-y-2">
                <div class="form-control">
                    <div class="label">
                        <span class="label-text">Nama lengkap</span>
                    </div>
                    <label @class([
                        'input flex items-center gap-2',
                        'input-error' => $errors->first('form.name'),
                    ])>
                        <x-tabler-user-circle />
                        <input type="text" placeholder="Full name" class="grow" wire:model="form.name" />
                    </label>
                </div>
                <div class="form-control">
                    <div class="label">
                        <span class="label-text">Alamat email</span>
                    </div>
                    <label @class([
                        'input flex items-center gap-2',
                        'input-error' => $errors->first('form.email'),
                    ])>
                        <x-tabler-at />
                        <input type="email" placeholder="Email address" class="grow" wire:model="form.email" />
                    </label>
                </div>
                <div class="form-control">
                    <div class="label">
                        <span class="label-text">Nomor telepon</span>
                    </div>
                    <label @class([
                        'input flex items-center gap-2',
                        'input-error' => $errors->first('form.phone'),
                    ])>
                        <x-tabler-phone />
                        <input type="text" placeholder="Nomor telepon" class="grow" wire:model="form.phone"
                            inputmode="numeric" />
                    </label>
                </div>
                <div class="form-control">
                    <div class="label">
                        <span class="label-text">Alamat</span>
                    </div>
                    <label @class([
                        'input flex items-center gap-2',
                        'input-error' => $errors->first('form.address'),
                    ])>
                        <x-tabler-pin />
                        <input type="text" placeholder="Alamat rumah" class="grow" wire:model="form.address" />
                    </label>
                </div>
                <div class="form-control">
                    <div class="label">
                        <span class="label-text">Password</span>
                    </div>
                    <label @class([
                        'input flex items-center gap-2',
                        'input-error' => $errors->first('form.password'),
                    ])>
                        <x-tabler-key />
                        <input type="text" placeholder="Password" class="grow" wire:model="form.password" />
                    </label>
                </div>
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
