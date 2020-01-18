<?php

use App\Company;
use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Tenant::setTenant(Company::find(1));
        factory(User::class, 1)
            ->create([
                'email' => 'user1@user.com',
            ]);

        \Tenant::setTenant(Company::find(2));
        factory(User::class, 1)
            ->create([
                'email' => 'user2@user.com',
            ]);
    }
}
