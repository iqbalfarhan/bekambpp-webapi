<div class="page-wrapper">
    @livewire('partial.header', [
        'title' => $user->name,
        'subtitle' => $user->phone,
    ])

    @livewire('user.card', ['user' => $user])

    <h4>Riwayat terapi</h4>

    <div class="table-wrapper">
        <table class="table">
            <thead>
                <th>Tanggal</th>
                <th>Sesi (jam)</th>
                <th>Paket</th>
                <th>Harga bayar</th>
                <th>Status</th>
            </thead>
            <tbody>
                @foreach ($orders as $order)
                    <tr>
                        <td>{{ $order->tanggal->format('d F Y') }}</td>
                        <td>{{ $order->sesi->name }} ({{ $order->sesi->jam_text }})</td>
                        <td>{{ $order->paket->name }}</td>
                        <td>{{ $order->paket->rupiah }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
