<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mistakes extends Model
{
    protected $fillable = ['text', 'date', 'user_id'];

    public function users()
    {
        return $this->belongsTo(Users::class);
    }
}
