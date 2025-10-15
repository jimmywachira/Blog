<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\Attributes\Validate;
use Livewire\Attributes\Title;

#[Title('Login')]
class Login extends Component
{

    #[Validate('required|email')]
    public $email='test@example.com';

    #[Validate('required|min:6')]
    public $password='password';

    public function authenticate()
    {
        $this->validate();
        $valid = Auth::attempt([
            'email' => $this->email,
            'password' => $this->password,
        ]);

        if ($valid) {
            session()->flash('message', 'Login successful!');
            return redirect()->intended('/dashboard');
        } else {
            session()->flash('message', 'Login failed. Please check your credentials.');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('home');
    }

    public function render()
    {
        return view('livewire.login');
    }
}
