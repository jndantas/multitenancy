<?php

namespace App;

use App\Tenant\TenantModels;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use TenantModels;

    protected $fillable = ['name'];

}
