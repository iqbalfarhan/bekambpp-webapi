<?php

namespace App\Livewire\User;

use App\Livewire\Forms\UserForm;
use App\Models\User;
use Livewire\Attributes\On;
use Livewire\Component;

class Actions extends Component
{
    public $show = false;
    public UserForm $form;

    #[On('createUser')]
    public function createUser()
    {
        $this->show = true;
    }

    #[On('editUser')]
    public function editUser(User $user)
    {
        $this->form->setUser($user);
        $this->show = true;
    }

    #[On('deleteUser')]
    public function deleteUser(User $user)
    {
        $user->delete();
        $this->dispatch('reload');
    }

    public function simpan()
    {
        if (isset($this->form->user)) {
            $this->form->update();
        }
        else{
            $this->form->store();
        }

        $this->dispatch('reload');
        $this->closeModal();
    }

    public function closeModal()
    {
        $this->form->reset();
        $this->reset('show');
    }

    public function render()
    {
        return view('livewire.user.actions');
    }
}
