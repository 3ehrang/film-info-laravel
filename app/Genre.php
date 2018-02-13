<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    protected $fillable = ['title'];
    
    // define many to many relationship with film model
    public function films()
    {
        return $this->belongsToMany('App\Film')
            ->withTimestamps();
    }
}
