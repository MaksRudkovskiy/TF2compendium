<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    protected $fillable = ['username', 'email', 'password', 'avatar', 'role'];

    public function mistakes()
    {
        return $this->hasMany(Mistake::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
