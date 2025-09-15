<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    //
      use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'created_by',
    ];

    // Relations
    public function creator()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function evolutions()
    {
        return $this->hasMany(Evolution::class);
    }

    public function students()
    {
        return $this->belongsToMany(User::class, 'evolutions')
                    ->withPivot('progress')
                    ->withTimestamps();
    }

    public function exercises()
    {
        return $this->hasMany(Exercise::class);
    }
}
