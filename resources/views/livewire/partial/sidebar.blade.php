<ul class="menu p-4 w-80 min-h-full bg-base-100 text-base-content border-r-2 border-base-300 space-y-4" data-theme="dark">
    <li>
        <h3 class="menu-title">Dashboard</h3>
        <ul>
            <li>
                <a href="{{ route('home') }}" @class(['active' => Route::is('home')])>
                    <x-tabler-dashboard class="size-5" />
                    <span>Dashboard</span>
                </a>
            </li>
            <li>
                <a>
                    <x-tabler-calendar class="size-5" />
                    <span>Order sesi</span>
                    <span class="badge badge-sm">99+</span>
                </a>
            </li>
        </ul>
    </li>
    <li>
        <h3 class="menu-title">Pengaturan</h3>
        <ul>
            <li>
                <a>
                    <x-tabler-list class="size-5" />
                    <span>Jam Sesi Terapi</span>
                </a>
            </li>
            <li>
                <a href="{{ route('paket.index') }}" @class(['active' => Route::is('paket.index')])>
                    <x-tabler-box class="size-5" />
                    <span>Pengaturan Paket</span>
                </a>
            </li>
            <li>
                <a href="{{ route('user.index') }}" @class(['active' => Route::is('user.index')])>
                    <x-tabler-users class="size-5" />
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
                    <x-tabler-book class="size-5" />
                    <span>Dokumentasi</span>
                </a>
            </li>
            <li>
                <a href="{{ route('profile') }}" @class(['active' => Route::is('profile')])>
                    <x-tabler-user class="size-5" />
                    <span>Edit Profile</span>
                </a>
            </li>
            <li>
                <button wire:click="logout">
                    <x-tabler-logout class="size-5" />
                    <span>Logout</span>
                </button>
            </li>
        </ul>
    </li>
</ul>
