<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Primer usuario
        $user = new User();
        $user->name = 'member1';
        $user->email = 'member1@piopio.com';
        $user->password = Hash::make('secret');
        $role_member = Role::where('name', 'member')->first();
        $user->save();
        $user->roles()->attach($role_member);

        // Segundo usuario
        $user = new User();
        $user->name = 'admin1';
        $user->email = 'admin1@piopio.com';
        $user->password = Hash::make('secret');
        $role_member = Role::where('name', 'admin')->first();
        $user->save();
        $user->roles()->attach($role_member);
    }
}
