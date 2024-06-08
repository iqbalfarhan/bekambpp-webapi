<?php

namespace App\Livewire\Pages;

use App\Models\User;
use Livewire\Component;

class Home extends Component
{
    public function render()
    {
        return view('livewire.pages.home', [
            'users' => User::count()
        ]);
    }
}
