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
        <a href="{{ route('profile') }}" class="btn btn-circle avatar">
            <div class="w-10 rounded-full">
                <img alt="{{ $user->name }}" src="{{ $user->image_url }}" />
            </div>
        </a>
    </div>
</div>
