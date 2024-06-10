<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;
    public function getAvailableOnAttribute($value)
    {
        return strtoupper($value);
    }

    public function getDegreeAttribute($value)
    {
        return strtoupper($value);
    }
}
