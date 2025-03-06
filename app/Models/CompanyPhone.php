<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyPhone extends Model
{
    use HasFactory;

    protected $table = 'company_phones';
    protected $fillable =
        [
            'country_code',
            'area_code',
            'phone_number',
            'company_id',
        ];
}
