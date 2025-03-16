<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Articles extends Model
{
    protected $fillable = ['title', 'text', 'type'];

    public function comments()
    {
        return $this->morphMany(Comments::class, 'commentable');
    }
}
