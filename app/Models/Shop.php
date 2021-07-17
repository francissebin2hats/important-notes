<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    use HasFactory;
    use \Znck\Eloquent\Traits\BelongsToThrough;

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function country()
    {
        return $this->belongsToThrough('App\Models\Country', 'App\Models\City');
    }
}
