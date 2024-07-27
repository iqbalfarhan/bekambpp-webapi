<div class="navbar bg-base-200 border-b-2 border-base-300">
    <div class="navbar-start">
        <label for="drawer" class="btn btn-ghost btn-circle">
            <x-tabler-menu class="size-5" />
        </label>
    </div>
    <div class="navbar-center">
        <a class="btn btn-ghost text-xl text-primary font-bold">{{ config('app.name') }}</a>
    </div>
    <div class="navbar-end">
        <a href="{{ route('profile') }}" class="btn btn-ghost btn-circle">
            <x-tabler-user-circle class="size-7" />
        </a>
    </div>
</div>
