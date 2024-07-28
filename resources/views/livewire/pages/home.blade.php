<div class="page-wrapper">

    @livewire('partial.header', [
        'title' => 'Selamat datang',
        'subtitle' => auth()->user()->name,
    ])

    <div class="grid md:grid-cols-3 gap-2 md:gap-4">
        @livewire('widget.count', [
            'number' => $orders->where('status', 'requested')->count(),
            'title' => 'Booking baru',
            'subtitle' => 'Booking belum diapprove',
        ])
        @livewire('widget.count', [
            'number' => $orders->where('status', 'approved')->count(),
            'title' => 'Booking sesi hari ini',
            'subtitle' => 'Booking yang diapprove',
        ])
        @livewire('widget.count', [
            'number' => $orders->where('status', 'done')->count(),
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
                <th>Paket</th>
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
                        <td>{{ Str::limit($order?->user->name, 20) }}</td>
                        <td>{{ $order?->user->phone }}</td>
                        <td>{{ $order?->paket->name }}</td>
                        <td>
                            @if ($order)
                                <span class="btn btn-xs">
                                    {{ $order->status_text }}
                                </span>
                            @endif
                        </td>
                        <td>
                            @if ($order)
                                <div class="flex gap-1 justify-center">
                                    @switch($order->status)
                                        @case('requested')
                                            <button class="btn btn-sm btn-primary"
                                                wire:click="dispatch('approveOrder', {order: {{ $order->id }}})">
                                                <x-tabler-check class="size-4" />
                                                <span>Approve</span>
                                            </button>
                                        @break

                                        @case('approved')
                                            <button class="btn btn-sm btn-success"
                                                wire:click="dispatch('selesaiOrder', {order: {{ $order->id }}})">
                                                <x-tabler-check class="size-4" />
                                                <span>Selesai</span>
                                            </button>
                                        @break

                                        @default
                                            <button class="btn btn-sm"
                                                wire:click="dispatch('kembalikanOrder', {order: {{ $order->id }}})">
                                                <x-tabler-chevron-left class="size-4" />
                                                <span>Kembalikan</span>
                                            </button>
                                    @endswitch


                                    <button class="btn btn-sm btn-error btn-square"
                                        wire:click="dispatch('deleteOrder', {order: {{ $order->id }}})">
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
