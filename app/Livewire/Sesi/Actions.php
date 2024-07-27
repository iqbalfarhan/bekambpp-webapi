<?php

namespace App\Livewire\Sesi;

use App\Models\Sesi;
use Livewire\Attributes\On;
use Livewire\Component;

class Actions extends Component
{
    #[On('reOrder')]
    public function orderUp(Sesi $sesi, $order)
    {
        $sesi->order = $order;
        $sesi->save();
        $this->dispatch('reload');
    }

    public function render()
    {
        return view('livewire.sesi.actions');
    }
}
