<?php

namespace App\Livewire\Paket;

use App\Models\Paket;
use Livewire\Attributes\On;
use Livewire\Component;

class Index extends Component
{
    protected $listeners = ['reload' => '$refresh'];

    #[On('deletePaket')]
    public function deletePaket(Paket $paket)
    {
        $paket->delete();
    }

    public function render()
    {
        return view('livewire.paket.index', [
            'pakets' => Paket::get()
        ]);
    }
}
