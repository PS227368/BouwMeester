<?php
namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
class UserSeeder extends Seeder
{
    public function run()
    {
        // Create admin user
        User::create([
            'name' => 'Admin User',
            'email' => 'admin@bouwmeester.com',
            'password' => Hash::make('password'),
            'role' => 'beheerder',
        ]);
        // Create project manager
        User::create([
            'name' => 'Project Manager',
            'email' => 'pm@bouwmeester.com',
            'password' => Hash::make('password'),
            'role' => 'projectmanager',
        ]);
        // Create some employee users
        User::create([
            'name' => 'Employee One',
            'email' => 'employee1@bouwmeester.com',
            'password' => Hash::make('password'),
            'role' => 'medewerker',
        ]);
    }
}