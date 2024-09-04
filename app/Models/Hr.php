<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hr extends Model
{
    protected $connection = 'hr';
    protected $fillable = ['organization_id', 'name'];

    public function organization()
    {
        return $this->belongsTo(Organization::class);
    }
}
