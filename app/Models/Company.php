<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Vacancie;

class Company extends Model
{
    use HasFactory;

    public function vacancie()
    {
        return $this->hasMany(Vacancie::class);
    }

}
