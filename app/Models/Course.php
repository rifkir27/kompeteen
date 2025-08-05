<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    
public function enrolledUsers()
{
    return $this->belongsToMany(User::class, 'enrollments')
                ->withTimestamps();
}


public function category()
{
    return $this->belongsTo(Category::class);
}


public function videos()
{
    return $this->hasMany(Video::class)->orderBy('order');
}


}
