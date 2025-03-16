<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
    protected $fillable = ['name', 'description'];

    public function items()
    {
        return $this->belongsToMany(Items::class, 'class_items', 'class_id', 'items_id');
    }
}
