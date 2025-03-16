<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Items extends Model
{
    protected $fillable = ['name', 'description', 'upside', 'downside', 'modes_id'];

    public function mode()
    {
        return $this->belongsTo(Articles::class, 'modes_id');
    }

    public function classes()
    {
        return $this->belongsToMany(Classes::class, 'class_items', 'items_id', 'class_id');
    }
}
