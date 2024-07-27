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

    @livewire('order.table')
</div>
