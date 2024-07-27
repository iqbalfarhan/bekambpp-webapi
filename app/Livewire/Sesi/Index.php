<?php

namespace App\Livewire\Sesi;

use App\Models\Sesi;
use Livewire\Component;

class Index extends Component
{
    protected $listeners = ['reload' => '$refresh'];

    public function render()
    {
        return view('livewire.sesi.index', [
            'sesis' => Sesi::orderBy('order')->get()
        ]);
    }
}
