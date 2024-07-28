<?php

namespace App\Livewire\Widget;

use Livewire\Component;

class Count extends Component
{
    public $listeners = ['reload', 'refresh'];

    public $number = 0;
    public $title = "Widget Title";
    public $subtitle = "Widget subtitle description";

    public function render()
    {
        return view('livewire.widget.count');
    }
}
