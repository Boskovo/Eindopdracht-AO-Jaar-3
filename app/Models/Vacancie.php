<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Company;

class Vacancie extends Model
{
    use HasFactory;

    protected $fillable = [
        'body',
        'title',
        'course',
        'variant',
        'level',
        'location',
        'start_date',
        'end_date',
        'learn',
        'demands',
        'offer',
    ];

    public function company()
    {
        return $this->belongsTo(Company::class, 'company_id');
    }

}
