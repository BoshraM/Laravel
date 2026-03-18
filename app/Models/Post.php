<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title', 'content', 'user_id'];//Add a fillable property so Laravel allows mass assignment
    //Laravel protects models from unwanted data insertion
    //$fillable tells Laravel:
    //These fields are allowed to be inserted.
    public function user()
    {
        return $this->belongsTo(User::class);
       // each post belongs to one user
    }
}
