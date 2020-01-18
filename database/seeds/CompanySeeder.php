<?php

use App\Company;
use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Company::create([
            'name' => 'Empresa 1'
        ]);

        Company::create([
            'name' => 'Empresa 2'
        ]);
    }
}
