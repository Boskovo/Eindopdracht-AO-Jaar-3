<?php

namespace App\Models;

use App\Models\Vacancie;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Address;

class Company extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'website',
        'phone',
        'email',
        'vat_number',
        'user_id',
        'logo',
        'address_city',
        'address_zipcode',
        'address_street',
        'address_street_number',
    ];

    public function vacancie()
    {
        return $this->hasMany(Vacancie::class, 'company_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function address()
    {
        return $this->hasMany(Address::class);
    }

}
