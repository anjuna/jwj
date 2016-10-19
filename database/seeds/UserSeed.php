<?php

use Illuminate\Database\Seeder;

use App\User; use App\Role;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'name' => 'minion'
        ]);

        Role::create([
            'name' => 'journeyman'
        ]);

        Role::create([
            'name' => 'overlord'
        ]);

        User::create([
            'name' => 'Jamie',
            'role_id' => 3,
            'email' => 'jamie@test.com',
            'password' => bcrypt('test')
        ]);
    }
}
