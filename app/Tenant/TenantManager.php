<?php
declare(strict_types=1);

namespace App\Tenant;

use App\Company;

class TenantManager
{
    private $tenant;

    public function getTenant(): ?Company
    {
        return $this->tenant;
    }

    public function setTenant(?Company $tenant): void
    {
        $this->tenant = $tenant;
    }
}
