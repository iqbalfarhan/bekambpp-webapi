<?php

namespace App\Livewire\Partial;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Navbar extends Component
{
    public function render()
    {
        return view('livewire.partial.navbar', [
            'user' => Auth::user()
        ]);
    }
}
