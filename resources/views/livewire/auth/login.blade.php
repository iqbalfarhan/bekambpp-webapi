<div class="card w-full max-w-sm">
    <form class="card-body" wire:submit="login">
        <h3 class="card-title">Login</h3>
        <div class="py-4 space-y-2">
            <label class="form-control">
                <input type="email" placeholder="Email address" @class(['input', 'input-error' => $errors->first('email')]) wire:model="email" />
            </label>
            <label class="form-control">
                <input type="password" placeholder="Password" @class(['input', 'input-error' => $errors->first('password')]) wire:model="password" />
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
