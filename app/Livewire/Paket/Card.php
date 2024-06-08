<?php

namespace App\Livewire\Paket;

use App\Models\Paket;
use Livewire\Component;

class Card extends Component
{
    public Paket $paket;

    protected $listeners = ['reload' => '$refresh'];

    public function mount(Paket $paket)
    {
        $this->paket = $paket;
    }

    public function render()
    {
        return view('livewire.paket.card');
    }
}
