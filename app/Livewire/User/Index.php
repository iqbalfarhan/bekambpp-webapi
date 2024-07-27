<?php

namespace App\Livewire\User;

use App\Models\User;
use Livewire\Component;

class Index extends Component
{
    public $search = "";
    protected $listeners = ['reload' => '$refresh'];

    public function render()
    {
        return view('livewire.user.index', [
            'users' => User::when($this->search, function($q){
                $q->where('name', 'like', "%{$this->search}%")
                ->orWhere('email', 'like', "%{$this->search}%")
                ->orWhere('address', 'like', "%{$this->search}%")
                ->orWhere('phone', 'like', "%{$this->search}%");
            })->get()
        ]);
    }
}
