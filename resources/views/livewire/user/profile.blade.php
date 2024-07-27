<div class="page-wrapper">
    @livewire('partial.header', [
        'title' => 'Edit profile',
        'subtitle' => 'Pembaruan informasi user',
    ])

    <form class="flex flex-col items-center space-y-6 max-w-xs mx-auto" wire:submit="simpan">
        <div class="avatar items-center justify-center">
            <div class="w-32 rounded-full bg-base-200">
                <img src="{{ Auth::user()->image_url }}" alt="">
            </div>
        </div>

        <div class="text-center text-primary">
            <div class="font-extrabold text-2xl">{{ $form->name }}</div>
            <div class="">{{ $form->email }}</div>
        </div>

        <div class="space-y-1 w-full">
            <label @class([
                'input flex items-center gap-2',
                'input-error' => $errors->first('form.name'),
            ])>
                <x-tabler-user />
                <input type="text" placeholder="Full name" class="grow" wire:model="form.name" />
            </label>
            <label @class([
                'input flex items-center gap-2',
                'input-error' => $errors->first('form.email'),
            ])>
                <x-tabler-at />
                <input type="email" placeholder="Email address" class="grow" wire:model="form.email" />
            </label>
            <label @class([
                'input flex items-center gap-2',
                'input-error' => $errors->first('form.password'),
            ])>
                <x-tabler-key />
                <input type="password" placeholder="Password" class="grow" wire:model="form.password" />
            </label>
            <label @class([
                'input flex items-center gap-2',
                'input-error' => $errors->first('form.alamat'),
            ])>
                <x-tabler-pin />
                <input type="text" placeholder="Alamat" class="grow" wire:model="form.alamat" />
            </label>
        </div>
        <button class="btn btn-primary w-full">
            <x-tabler-check class="size-5" />
            <span>Simpan</span>
        </button>
        <div class="text-sm opacity-50">Keluar aplikasi</div>
        <button type="button" class="btn btn-error w-full" wire:click="dispatch('logout')">
            <x-tabler-logout class="size-5" />
            <span>Keluar aplikasi</span>
        </button>
    </form>
</div>
