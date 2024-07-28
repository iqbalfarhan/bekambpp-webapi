<?php

namespace App\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    public $email = "";
    public $password = "";
    public $showPass = false;

    public function toggleShowPass(){
        $this->showPass != $this->showPass;
    }

    public function login()
    {
        $valid = $this->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($valid)) {
            $this->redirect(route('home'));
        }

        $this->addError('email', "Kombinasi username dan password salah");
    }

    public function render()
    {
        return view('livewire.auth.login');
    }
}
