<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CompanyActivityType extends Model
{

    protected $table = 'company_activity_types';
    protected $fillable =
        [
            'company_id',
            'activity_type_id',
        ];
}
