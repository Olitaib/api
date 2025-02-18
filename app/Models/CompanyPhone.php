<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CompanyPhone extends Model
{


    protected $table = 'company_phones';
    protected $fillable =
        [
            'country_code',
            'area_code',
            'phone_number',
            'company_id',
        ];
}
