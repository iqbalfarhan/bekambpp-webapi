<?php

namespace App\Livewire\User;

use App\Livewire\Forms\UserForm;
use App\Models\User;
use Livewire\Component;

class Profile extends Component
{
    public UserForm $form;

    public function simpan()
    {
        $this->form->update();
        $this->mount();
    }

    public function mount()
    {
        $user = User::find(auth()->id());
        $this->form->setUser($user);
    }

    public function render()
    {
        return view('livewire.user.profile');
    }
}
