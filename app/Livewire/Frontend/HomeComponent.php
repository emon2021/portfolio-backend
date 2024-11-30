<?php

namespace App\Livewire\Frontend;

use App\Models\About;
use App\Models\Project;
use App\Models\Setting;
use Livewire\Component;
use App\Models\HeroSection;
use App\Models\Testimonial;
use App\Models\ProjectCategory;

class HomeComponent extends Component
{
    public function render()
    {
        $hero = HeroSection::latest()->first();
        $about = About::latest()->first();
        $project_cat = ProjectCategory::latest()->limit(4)->get();
        $projects = Project::select('id','project_category_id','title','description','image','link')->latest()->get();
        $testimonials = Testimonial::latest()->get();
        $setting = Setting::latest()->first();

        return view('livewire.frontend.home-component',[
            'hero' => $hero,
            'about' => $about,
            'project_cat' => $project_cat,
            'projects' => $projects,
            'testimonials' => $testimonials,
            'setting' => $setting
        ]);
    }
}
