<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    public function getRouteKeyName()
    {
        return 'title_abbr';
    }
    
    public function options()
    {
        return $this->belongsToMany('App\Models\Option')->withTimestamps();
    }
}
