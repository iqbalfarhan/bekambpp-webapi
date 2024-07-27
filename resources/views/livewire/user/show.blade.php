<div class="page-wrapper">
    @livewire('partial.header', [
        'title' => $user->name,
        'subtitle' => $user->phone,
    ])

    @livewire('user.card', ['user' => $user])

    <h4>Riwayat terapi</h4>

    @livewire('order.table')
</div>
