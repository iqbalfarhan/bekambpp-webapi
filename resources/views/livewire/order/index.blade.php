<div class="page-wrapper">
    @livewire('partial.header', [
        'title' => 'Order sesi bekam',
        'subtitle' => 'List customer yang sudah order sesi bekam',
    ])

    <div class="flex justify-between">
        <input type="date" class="input" wire:model.live="tanggal">
    </div>

    <div class="table-wrapper">
        <table class="table">
            <thead>
                <th>No</th>
                <th>Tanggal</th>
                <th>Jam Sesi</th>
                <th>Nama Customer</th>
                <th>Nomor Telepon</th>
                <th>Status</th>
                <th class="text-center">Actions</th>
            </thead>
            <tbody>
                @foreach ($datas as $data)
                    <tr>
                        <td>{{ $data->id }}</td>
                        <td>{{ $data->tanggal->format('D, d F Y') }}</td>
                        <td>{{ $data->sesi->jam_text }}</td>
                        <td>{{ $data->user->name }}</td>
                        <td>{{ $data->user->phone }}</td>
                        <td>
                            <span class="btn btn-xs">
                                {{ $data->status_text }}
                            </span>
                        </td>
                        <td>
                            <div class="flex gap-1 justify-center">
                                @switch($data->status)
                                    @case('requested')
                                        <button class="btn btn-sm btn-primary"
                                            wire:click="dispatch('approveOrder', {order: {{ $data->id }}})">
                                            <x-tabler-check class="size-4" />
                                            <span>Approve</span>
                                        </button>
                                    @break

                                    @case('approved')
                                        <button class="btn btn-sm btn-success"
                                            wire:click="dispatch('selesaiOrder', {order: {{ $data->id }}})">
                                            <x-tabler-check class="size-4" />
                                            <span>Selesai</span>
                                        </button>
                                    @break

                                    @default
                                        <button class="btn btn-sm"
                                            wire:click="dispatch('kembalikanOrder', {order: {{ $data->id }}})">
                                            <x-tabler-chevron-left class="size-4" />
                                            <span>Kembalikan</span>
                                        </button>
                                @endswitch


                                <button class="btn btn-sm btn-error btn-square"
                                    wire:click="dispatch('deleteOrder', {order: {{ $data->id }}})">
                                    <x-tabler-trash class="size-4" />
                                </button>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    @livewire('order.approve')
</div>
