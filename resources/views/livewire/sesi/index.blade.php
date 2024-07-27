<div class="page-wrapper">
    @livewire('partial.header', [
        'title' => 'Pengaturan sesi terapi',
        'subtitle' => 'Jadwal sesi terapi',
    ])

    <div class="flex flex-col md:flex-row justify-between gap-1">
        <input type="search" class="input" placeholder="Pencarian" />
        <button class="btn btn-primary" wire:click="$dispatch('createPaket')">
            <x-tabler-circle-plus class="size-5" />
            <span>Tambah sesi</span>
        </button>
    </div>

    <div class="table-wrapper">
        <table class="table">
            <thead>
                <th>No</th>
                <th>Nama sesi</th>
                <th>Jam</th>
                <th>Durasi</th>
                <th class="text-center">urutkan</th>
                <th class="text-center">Actions</th>
            </thead>
            <tbody>
                @foreach ($sesis as $sesi)
                    <tr wire:key="{{ $sesi->id }}">
                        <td>{{ $sesi->order }}</td>
                        <td>{{ $sesi->name }}</td>
                        <td>{{ implode(' - ', $sesi->jam) }}</td>
                        <td>{{ $sesi->durasi }}</td>
                        <td>
                            <div class="flex justify-center gap-1">
                                <button class="btn btn-xs btn-square"
                                    wire:click="$dispatch('reOrder', {sesi: {{ $sesi->id }}, order:{{ $sesi->order - 1 }}})">
                                    <x-tabler-chevron-down class="size-4" />
                                </button>
                                <button class="btn btn-xs btn-square"
                                    wire:click="$dispatch('reOrder', {sesi: {{ $sesi->id }}, order:{{ $sesi->order + 1 }}})">
                                    <x-tabler-chevron-up class="size-4" />
                                </button>
                            </div>
                        </td>
                        <td>
                            <div class="flex justify-center gap-1">
                                <button class="btn btn-xs"
                                    wire:click="$dispatch('editSesi', {sesi: {{ $sesi->id }}})">
                                    <x-tabler-edit class="size-4" />
                                    <span>Edit</span>
                                </button>
                                <button class="btn btn-xs"
                                    wire:click="$dispatch('deleteSesi', {sesi: {{ $sesi->id }}})"
                                    wire:confirm="Yakin menghapus sesi ini?">
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

    @livewire('sesi.actions')
</div>
