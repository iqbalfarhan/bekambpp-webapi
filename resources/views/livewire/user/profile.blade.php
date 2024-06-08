<div class="page-wrapper">
    @livewire('partial.header')

    <div class="card max-w-md mx-auto">
        <form class="card-body space-y-6" wire:submit="simpan">
            <div class="card-title">Edit Profile</div>

            <div class="space-y-1">
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

            <div class="card-actions">
                <button class="btn btn-primary">
                    <x-tabler-check class="size-5" />
                    <span>Simpan</span>
                </button>
            </div>
        </form>
    </div>
</div>
