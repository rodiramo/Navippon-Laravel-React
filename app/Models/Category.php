<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $primaryKey = 'category_id';

    public function restaurants()
    {
        return $this->hasMany(Restaurant::class, 'category_id', 'category_id');
    }

    public function activities()
    {
        return $this->hasMany(Activity::class, 'category_id', 'category_id');
    }
}
