<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;
    use \Staudenmeir\EloquentHasManyDeep\HasRelationships;

    public function cities()
    {
        return $this->hasMany(City::class);
    }

    public function shops()
    {
        return $this->hasManyThrough(Shop::class, City::class);
    }

    public function users()
    {
        return $this->hasManyDeep('App\Models\User', ['App\Models\City', 'App\Models\Shop']);;
    }
}
