<?php

namespace App\Livewire;

use Illuminate\View\View;
use Livewire\Component;

class Navbar extends Component
{
    public function render(): View
    {
        return view('livewire.navbar', [
            'navItems' => [
                'blog'
            ],
            'activeRoute' => request()->route()->getName()
        ]);
    }
}
