<?php

use App\Company;
use App\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Tenant::setTenant(Company::find(1));
        factory(Category::class, 50)->create();

        \Tenant::setTenant(Company::find(2));
        factory(Category::class, 50)->create();
    }
}
