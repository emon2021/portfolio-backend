<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HeroSection extends Model
{
    protected $table = 'hero_sections';

    protected $fillable = [
        'title',
        'greetings',
        'name',
        'rand_text',
        'description',
        'facebook',
        'linkedin',
        'github',
        'image',
    ];

    protected $casts = [
        'rand_text' => 'array',
    ];
}
