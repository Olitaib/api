<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CompanyActivity extends Model
{

    protected $table = 'company_activities';
    protected $fillable =
        [
            'company_id',
            'activity_id',
        ];
}
