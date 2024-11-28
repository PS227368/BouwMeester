<?php
namespace Database\Seeders;
use App\Models\Employee;
use Illuminate\Database\Seeder;
class EmployeeSeeder extends Seeder
{
    public function run()
    {
        Employee::create([
            'name' => 'Henk van de pas',
            'available_days' => ['Monday', 'Tuesday', 'Wednesday'],
            'certificates' => ['Machine A', 'Machine B'],
            'role' => 'Employee'
        ]);
        Employee::create([
            'name' => 'Jan Janssen',
            'available_days' => ['Monday', 'Thursday', 'Friday'],
            'certificates' => ['Machine C'],
            'role' => 'Employee'
        ]);
        Employee::create([
            'name' => 'Piet Peters',
            'available_days' => ['Tuesday', 'Wednesday', 'Thursday'],
            'certificates' => ['Machine A', 'Machine D'],
            'role' => 'Employee'
        ]);
    }
}