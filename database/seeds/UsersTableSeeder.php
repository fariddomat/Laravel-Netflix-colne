<?php

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
        $user=User::create([
            'name'=>'super admin',
            'email'=>'admin@test.com',
            'password'=>bcrypt('admin'),
        ]);
        $user->attachRole('super_admin');
    }
}
