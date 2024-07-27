<?php

namespace App\Livewire\Order;

use Livewire\Attributes\On;
use Livewire\Component;

class Approve extends Component
{
    public $show = false;
    public $order;

    #[On('approveOrder')]
    public function approveOrder(){
        $this->show = true;
    }

    public function closeModal(){
        $this->reset('show');
        $this->dispatch('reload');
    }

    public function simpan(){
        $this->closeModal();
    }

    public function render()
    {
        return view('livewire.order.approve');
    }
}
