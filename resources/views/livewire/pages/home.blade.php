<div class="page-wrapper">

    @livewire('partial.header', [
        'title' => 'Selamat datang',
        'subtitle' => auth()->user()->name,
    ])

    <div class="grid md:grid-cols-3 gap-2 md:gap-4">
        @livewire('widget.count', [
            'number' => $users,
            'title' => 'Total customer',
            'subtitle' => 'total customers terdaftar',
        ])
    </div>
</div>
