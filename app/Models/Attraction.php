<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Attraction extends Model
{
    protected $fillable = [
        'name', 'size_required', 'experience_earn', 'picture', 'picture_alt', 'description'
    ];
}
