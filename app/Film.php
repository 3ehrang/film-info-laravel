<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    protected $fillable = [
        'name', 'description', 'realease_at', 'rating',
        'ticket_price', 'country', 'genre', 'photo'
    ];
    
    // define many to many relationship with genre model
    public function genres()
    {
        return $this->belongsToMany('App\Genre')
            ->withTimestamps();
    }
    
    /**
     * Get the comments for the film.
     */
    public function comments()
    {
        return $this->hasMany('App\Comment');
    }
   
}
