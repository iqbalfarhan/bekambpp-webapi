<?php

namespace App\Livewire\Pages;

use App\Models\Order;
use App\Models\Sesi;
use App\Models\User;
use Livewire\Component;

class Home extends Component
{
    protected $listeners = ['reload', '$refresh'];

    public function render()
    {
        return view('livewire.pages.home', [
            'users' => User::count(),
            'sesis' => Sesi::get(),
            'orders' => Order::where('tanggal', today())->get()
        ]);
    }
}
