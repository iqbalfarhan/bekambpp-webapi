<div class="card w-full max-w-sm bg-base-100 shadow-lg">
    <form class="card-body space-y-5" wire:submit="login">
        <div class="avatar items-center justify-center">
            <div class="w-20">
                <img src="{{ url('logoimage.png') }}" alt="">
            </div>
        </div>
        <h3 class="card-title font-bold">Login {{ config('app.name') }}</h3>
        <div class="space-y-2">
            <label @class([
                'input flex items-center gap-2',
                'input-error' => $errors->first('email'),
            ])>
                <x-tabler-at class="size-6" />
                <input type="email" class="grow" placeholder="Email" wire:model="email" />
            </label>

            <label @class([
                'input flex items-center gap-2',
                'input-error' => $errors->first('password'),
            ])>
                <x-tabler-key class="size-6" />
                <input type="password" class="grow" placeholder="Email" wire:model="password" />
            </label>

            @if ($errors->any())
                <div class="text-error text-xs flex flex-col">
                    @foreach ($errors->all() as $error)
                        <div>{{ $error }}</div>
                    @endforeach
                </div>
            @endif

        </div>
        <div class="card-actions">
            <button class="btn btn-primary">
                <x-tabler-login class="size-5" />
                <span>Login</span>
            </button>
        </div>
    </form>
</div>
