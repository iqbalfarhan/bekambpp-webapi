<?php

namespace App\Livewire\Partial;

use Livewire\Component;

class Header extends Component
{
    public $title = "App header";
    public $subtitle;

    public function render()
    {
        return view('livewire.partial.header');
    }
}
