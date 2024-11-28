<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            UserSeeder::class,
            EmployeeSeeder::class,
            VacationSeeder::class,
            SickReportSeeder::class,
            RoleSeeder::class,
        ]);
    }
}