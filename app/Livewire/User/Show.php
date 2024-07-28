<?php

namespace App\Livewire\User;

use App\Models\Order;
use App\Models\User;
use Livewire\Component;

class Show extends Component
{
    public User $user;

    public function mount(User $user)
    {
        $this->user = $user;
    }

    public function render()
    {
        return view('livewire.user.show', [
            'orders' => Order::where('user_id', $this->user->id)->latest()->get()
        ]);
    }
}
