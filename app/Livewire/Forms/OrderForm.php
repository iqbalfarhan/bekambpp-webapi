<?php

namespace App\Livewire\Forms;

use App\Models\Order;
use Livewire\Attributes\Validate;
use Livewire\Form;

class OrderForm extends Form
{
    public $tanggal;
    public $sesi_id;
    public $user_id;
    public $paket_id;
    public $status;

    public ?Order $order;

    public function setOrder(Order $order)
    {
        $this->order = $order;
        $this->tanggal = $order->tanggal;
        $this->sesi_id = $order->sesi_id;
        $this->user_id = $order->user_id;
        $this->paket_id = $order->paket_id;
        $this->status = $order->status;
    }

    public function store()
    {
        $valid = $this->validate([
            'tanggal' => 'required',
            'sesi_id' => 'required',
            'user_id' => 'required',
            'paket_id' => 'required',
            'status' => 'required',
        ]);

        Order::create($valid);
    }

    public function update()
    {
        $valid = $this->validate([
            'tanggal' => 'required',
            'sesi_id' => 'required',
            'user_id' => 'required',
            'paket_id' => 'required',
            'status' => 'required',
        ]);

        $this->order->update($valid);
    }
}
