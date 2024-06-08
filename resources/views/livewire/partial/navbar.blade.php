<div class="navbar bg-base-100 border-b-2 border-base-300">
    <div class="navbar-start">
        <label for="drawer" class="btn btn-ghost btn-circle">
            <x-tabler-menu class="size-5" />
        </label>
    </div>
    <div class="navbar-center">
        <a class="btn btn-ghost text-xl">{{ config('app.name') }}</a>
    </div>
    <div class="navbar-end">
        <button class="btn btn-ghost btn-circle">
            <x-tabler-search class="size-5" />
        </button>
        <button class="btn btn-ghost btn-circle">
            <x-tabler-bell class="size-5" />
        </button>
    </div>
</div>
