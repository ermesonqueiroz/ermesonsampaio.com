<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\View\View;
use Livewire\Component;

class AdminLogin extends Component
{
    public $login = '';
    public $password = '';

    public function handleSubmit(): void
    {
        $auth = Auth::attempt([
            'email' => $this->login,
            'password' => $this->password
        ]);

        if ($auth) $this->redirect(route('blog'));
    }

    public function render(): View
    {
        return view('livewire.admin-login');
    }
}
