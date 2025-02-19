<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CompanyActivityCategory extends Model
{

    protected $table = 'company_activity_categories';
    protected $fillable =
        [
            'company_id',
            'activity_category_id',
        ];
}
