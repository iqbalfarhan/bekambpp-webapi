<?php

namespace App\Livewire\Order;

use App\Livewire\Forms\OrderForm;
use App\Models\Order;
use Livewire\Attributes\On;
use Livewire\Component;

class Approve extends Component
{
    public $show = false;
    public ?Order $order;

    #[On('approveOrder')]
    public function approveOrder(Order $order){
        $this->show = true;
        $this->order = $order;
    }

    #[On('deleteOrder')]
    public function deleteOrder(Order $order){
        $order->delete();
        $this->dispatch('reload');
    }

    #[On('selesaiOrder')]
    public function selesaiOrder(Order $order){
        $order->update([
            'status' => "done",
        ]);
        $this->dispatch('reload');
    }

    #[On('kembalikanOrder')]
    public function kembalikanOrder(Order $order){
        $order->update([
            'status' => "requested",
        ]);
        $this->dispatch('reload');
    }

    public function closeModal(){
        $this->reset('show');
        $this->dispatch('reload');
    }

    public function simpan(){
        $this->order->update([
            'status' => "approved",
        ]);
        $this->closeModal();
    }

    public function render()
    {
        return view('livewire.order.approve');
    }
}
