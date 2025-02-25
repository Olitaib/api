<?php

namespace App\Traits\Company;

use Illuminate\Database\Eloquent\Builder;

trait FilterCompanyEloquentTrait
{

    protected Builder $builder;

    public function filterCompany($builder, array $filters): Builder
    {
        $this->builder = $builder;

        foreach ($filters as $field => $value) {
            $this->{"filter_{$field}"}($value);
        }

        return $this->builder;
    }

    public function filter_address(string $value): void
    {
        $this->builder->where('b.address', 'ilike', "%$value%");
    }

    public function filter_name(string $value): void
    {
        $this->builder->where('c.name', 'ilike', "%$value%");
    }

    public function filter_building_id(string $value): void
    {
        $this->builder->where('c.building_id', $value);
    }

    public function filter_activity_category_id(string $value): void
    {
        $this->builder->join('company_activity_categories as cac', 'cac.company_id', '=', 'c.id')
            ->where('cac.activity_category_id', $value);
    }

    public function filter_activity_type_id(string $value): void
    {
        $this->builder->join('company_activity_types as cat', 'cat.company_id', '=', 'c.id')
            ->where('cat.activity_type_id', $value);
    }

    public function filter_activity_id(string $value): void
    {
        $this->builder->join('company_activities as ca', 'ca.company_id', '=', 'c.id')
            ->where('ca.activity_id', $value);
    }
}
