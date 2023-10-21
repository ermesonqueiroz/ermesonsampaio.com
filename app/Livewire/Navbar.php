<?php

namespace App\Livewire;

use Illuminate\View\View;
use Livewire\Component;

class Navbar extends Component
{
    public function render(): View
    {
        $navItems = [
            'blog',
            'admin'
        ];

        return view('livewire.navbar', [
            'navItems' => $navItems,
            'activeRoute' => request()->route()->getName()
        ]);
    }
}
