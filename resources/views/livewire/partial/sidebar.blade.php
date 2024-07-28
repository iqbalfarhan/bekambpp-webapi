<ul class="menu p-4 w-80 min-h-full bg-base-200 text-base-content border-r-2 border-base-300 space-y-4" data-theme="dark">
    <div class="flex gap-3 items-center justify-center px-4 py-3">
        <div class="avatar self-center flex-none">
            <div class="w-10">
                <img src="{{ url('logoimage.png') }}" alt="">
            </div>
        </div>
        <div class="flex-1 flex flex-col">
            <h2 class="text-primary text-lg font-bold">{{ config('app.name') }}</h2>
            <div class="text-xs">Aplikasi booking sesi terapi</div>
        </div>
    </div>
    <li>
        <h3 class="menu-title">Dashboard</h3>
        <ul>
            <li>
                <a href="{{ route('home') }}" @class(['active' => Route::is('home')])>
                    <x-tabler-home />
                    <span>Dashboard</span>
                </a>
            </li>
            <li>
                <a href="{{ route('order.index') }}" @class(['active' => Route::is('order.index')])>
                    <x-tabler-list-check />
                    <span>Order Sesi</span>
                </a>
            </li>
        </ul>
    </li>
    <li>
        <h3 class="menu-title">Pengaturan</h3>
        <ul>
            <li>
                <a href="{{ route('paket.index') }}" @class(['active' => Route::is('paket.index')])>
                    <x-tabler-box />
                    <span>Paket terapi</span>
                </a>
            </li>
            <li>
                <a href="{{ route('sesi.index') }}" @class(['active' => Route::is('sesi.index')])>
                    <x-tabler-clock />
                    <span>Pengaturan sesi</span>
                </a>
            </li>
            <li>
                <a href="{{ route('user.index') }}" @class(['active' => Route::is(['user.index', 'user.show'])])>
                    <x-tabler-user-circle />
                    <span>Pengaturan User</span>
                </a>
            </li>
        </ul>
    </li>
    <li>
        <h3 class="menu-title">Pengaturan Akun</h3>
        <ul>
            <li>
                <a href="{{ route('dokumentasi') }}" @class(['active' => Route::is('dokumentasi')])>
                    <x-tabler-book />
                    <span>Dokumentasi</span>
                </a>
            </li>
            <li>
                <a href="{{ route('profile') }}" @class(['active' => Route::is('profile')])>
                    <x-tabler-user-circle />
                    <span>Edit Profile</span>
                </a>
            </li>
            <li>
                <button wire:click="logout">
                    <x-tabler-logout />
                    <span>Keluar</span>
                </button>
            </li>
        </ul>
    </li>
</ul>
