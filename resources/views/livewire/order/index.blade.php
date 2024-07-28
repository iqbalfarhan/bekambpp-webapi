<div class="page-wrapper">
    @livewire('partial.header', [
        'title' => 'Order sesi bekam',
        'subtitle' => 'List customer yang sudah order sesi bekam',
    ])

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
                        <td>{{ $data->status }}</td>
                        <td>
                            <div class="flex gap-1 justify-center">
                                <button class="btn btn-sm btn-primary" wire:click="dispatch('approveOrder')">
                                    <x-tabler-star class="size-4" />
                                    <span>Approve</span>
                                </button>
                                <button class="btn btn-sm btn-error btn-square">
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
