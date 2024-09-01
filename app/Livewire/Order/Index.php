<?php

namespace App\Livewire\Order;

use App\Models\Order;
use Livewire\Component;

class Index extends Component
{
    protected $listeners = ['reload' => '$refresh'];
    public $tanggal;

    public function mount()
    {
        $this->tanggal = today()->format("Y-m-d");
    }

    public function render()
    {
        return view('livewire.order.index', [
            'datas' => Order::when($this->tanggal, function($q){
                return $q->where('tanggal', $this->tanggal);
            })->get()
        ]);
    }
}
