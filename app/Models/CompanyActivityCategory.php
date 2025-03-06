<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyActivityCategory extends Model
{
    use HasFactory;

    protected $table = 'company_activity_categories';
    protected $fillable =
        [
            'company_id',
            'activity_category_id',
        ];
}
