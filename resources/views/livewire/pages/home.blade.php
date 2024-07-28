<div class="page-wrapper">

    @livewire('partial.header', [
        'title' => 'Selamat datang',
        'subtitle' => auth()->user()->name,
    ])

    <div class="grid md:grid-cols-3 gap-2 md:gap-4">
        @livewire('widget.count', [
            'number' => $users,
            'title' => 'Booking sesi hari ini',
            'subtitle' => 'Sesi yang dibooking',
        ])
        @livewire('widget.count', [
            'number' => $users,
            'title' => 'Booking baru',
            'subtitle' => 'Booking belum diapprove',
        ])
        @livewire('widget.count', [
            'number' => $users,
            'title' => 'Sudah selesaui bekam',
            'subtitle' => 'Selesai sesi',
        ])
    </div>

    <h2>Sesi Booking yang belum diapprove</h2>

    <div class="table-wrapper">
        <table class="table">
            <thead>
                <th>Jam</th>
                <th>Nama user</th>
                <th>Nomor telepon</th>
                <th>Status</th>
                <th class="text-center">Actions</th>
            </thead>
            <tbody>
                @foreach ($sesis as $sesi)
                    @php
                        $order = $orders->where('sesi.id', $sesi->id)->first();
                    @endphp
                    <tr>
                        <td>{{ $sesi->jam_text }}</td>
                        <td>{{ $order?->user['name'] }}</td>
                        <td>{{ $order?->user['phone'] }}</td>
                        <td>{{ $order?->status }}</td>
                        <td>
                            @if ($order)
                                <div class="flex gap-1 justify-center">
                                    <button class="btn btn-sm btn-primary" wire:click="dispatch('approveOrder')">
                                        <x-tabler-star class="size-4" />
                                        <span>Approve</span>
                                    </button>
                                    <button class="btn btn-sm btn-error btn-square">
                                        <x-tabler-trash class="size-4" />
                                    </button>
                                </div>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    @livewire('order.approve')

</div>
