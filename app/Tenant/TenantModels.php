<?php

namespace App\Tenant;

use App\Company;
use App\Tenant\TenantScope;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

trait TenantModels
{
    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope(new TenantScope());

        static::creating(function (Model $obj) {
            $company = \Tenant::getTenant();
            if($company){
            $obj->company_id = $company->id;
            }
        });
    }

    public function company()
    {
        return $this->belongsTo(Company::class);
    }
}
