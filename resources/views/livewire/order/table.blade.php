<div class="table-wrapper">
    <table class="table">
        <thead>
            <th>No</th>
            <th>Jam Sesi</th>
            <th>Nama Customer</th>
            <th>Nomor Telepon</th>
            <th>Status</th>
            <th class="text-center">Actions</th>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>10:00 - 10:30</td>
                <td>Iqbal farhan syuhada</td>
                <td>08999779527</td>
                <td>-</td>
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
        </tbody>
    </table>
    @livewire('order.approve')
</div>
