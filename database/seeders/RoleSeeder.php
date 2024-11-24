<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Hash;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Role::insert([
            [
                "name"=>"admin"
            ],
            [
                "name"=>"member"
            ],
            [
                "name"=>"trainer"
            ],
        ]);
        $user = User::create([
            "name" => "zakaria",
            "email" => "admin@admin.com",
            "password" => bcrypt("admin"), 
        ]);

        $adminRole = Role::where('name', 'admin')->first();
        $user->roles()->attach($adminRole);
    }
}
