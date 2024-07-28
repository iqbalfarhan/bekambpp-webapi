<div class="page-wrapper">
    @livewire('partial.header', [
        'title' => 'Pengaturan User',
        'subtitle' => 'Pengaturan customer',
    ])

    <div class="flex flex-col md:flex-row justify-between gap-1">
        <input type="search" class="input" placeholder="Pencarian" wire:model.live="search" />
        <button class="btn btn-primary" wire:click="$dispatch('createUser')">
            <x-tabler-plus class="size-5" />
            <span>Tambah baru</span>
        </button>
    </div>

    <div class="table-wrapper">
        <table class="table">
            <thead>
                <th>ID</th>
                <th>Nama user</th>
                <th>Email</th>
                <th>Nomor telepon</th>
                <th>Alamat</th>
                <th class="text-center">Actions</th>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ Str::limit($user->name, 30) }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->phone }}</td>
                        <td>{{ Str::limit($user->address, 30) }}</td>
                        <td>
                            <div class="flex justify-center gap-1">
                                <a href="{{ route('user.show', $user) }}" class="btn btn-xs btn-secondary btn-square">
                                    <x-tabler-eye class="size-4" />
                                </a>
                                <button class="btn btn-xs btn-primary btn-square"
                                    wire:click="$dispatch('editUser', {user: {{ $user->id }}})">
                                    <x-tabler-edit class="size-4" />
                                </button>
                                <button class="btn btn-xs btn-error btn-square"
                                    wire:click="$dispatch('deleteUser', {user: {{ $user->id }}})"
                                    wire:confirm="Yakin menghapus user ini?">
                                    <x-tabler-trash class="size-4" />
                                </button>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    @livewire('user.actions')
</div>
