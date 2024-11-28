<?php
namespace Database\Seeders;
use App\Models\Role;
use Illuminate\Database\Seeder;
class RoleSeeder extends Seeder
{
    public function run()
    {
        Role::create([
            'name' => 'beheerder',
            'description' => 'Administrator role'
        ]);
        Role::create([
            'name' => 'projectmanager',
            'description' => 'Project Manager role'
        ]);
        Role::create([
            'name' => 'medewerker',
            'description' => 'Employee role'
        ]);
    }
}