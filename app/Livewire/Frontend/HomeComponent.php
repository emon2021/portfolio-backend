<?php

namespace App\Livewire\Frontend;

use App\Models\About;
use Livewire\Component;
use App\Models\HeroSection;

class HomeComponent extends Component
{
    public function render()
    {
        $hero = HeroSection::latest()->first();
        $about = About::latest()->first();
        return view('livewire.frontend.home-component',[
            'hero' => $hero,
            'about' => $about
        ]);
    }
}
