<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
    protected $fillable = ['name'];

    public function hr()
    {
        return $this->hasMany(Hr::class);
    }

    public function doctors()
    {
        return $this->hasMany(Doctor::class);
    }

    public function students()
    {
        return $this->hasMany(Student::class);
    }
}

