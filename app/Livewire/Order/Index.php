<?php

namespace App\Livewire\Order;

use App\Models\Order;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.order.index', [
            'datas' => Order::where('tanggal', today())->get()
        ]);
    }
}
