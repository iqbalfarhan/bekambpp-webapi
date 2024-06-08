<div class="page-wrapper">
    @livewire('partial.header', [
        'title' => 'User management',
        'subtitle' => 'Pengaturan user',
    ])

    <div class="flex flex-col md:flex-row justify-between gap-1">
        <input type="search" class="input bg-base-100" placeholder="Pencarian" />
        <button class="btn btn-primary" wire:click="$dispatch('createUser')">
            <x-tabler-plus class="size-5" />
            <span>Tambah baru</span>
        </button>
    </div>

    <div class="table-wrapper">
        <table class="table">
            <thead>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th class="text-center">Actions</th>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>
                            {{ $loop->iteration }}
                        </td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            <div class="flex justify-center gap-1">
                                <button class="btn btn-xs"
                                    wire:click="$dispatch('editUser', {user: {{ $user->id }}})">
                                    <x-tabler-edit class="size-4" />
                                    <span>Edit</span>
                                </button>
                                <button class="btn btn-xs"
                                    wire:click="$dispatch('deleteUser', {user: {{ $user->id }}})"
                                    wire:confirm="Yakin menghapus user ini?">
                                    <x-tabler-trash class="size-4" />
                                    <span>Delete</span>
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
