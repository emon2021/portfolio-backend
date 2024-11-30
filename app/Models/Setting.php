<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $table = 'settings';

    protected $fillable = [
        'logo_name',
        'logo',
        'favicon',
        'resume',
        'address',
        'phone',
        'email',
        'contact_text'
    ];
}
