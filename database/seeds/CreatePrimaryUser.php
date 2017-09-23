<?php

use App\Role;
use App\User;
use Illuminate\Database\Seeder;

class CreatePrimaryUser extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = Role::firstOrFail();

        $user = User::create([
            'name' => 'Zeeshan Yousuf',
            'email' => 'zeeshan@example.com',
            'password' => 'admin0101',
        ]);

        $user->roles()->save($role);
    }
}
