<?php

namespace App\Livewire\Frontend;

use App\Models\HeroSection;
use Livewire\Component;

class HomeComponent extends Component
{
    public function render()
    {
        $hero = HeroSection::latest()->first();
        return view('livewire.frontend.home-component',[
            'hero' => $hero
        ]);
    }
}
