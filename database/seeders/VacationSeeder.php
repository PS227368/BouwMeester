<?php
namespace Database\Seeders;
use App\Models\VacationRecords;
use Illuminate\Database\Seeder;
class VacationSeeder extends Seeder
{
    public function run()
    {
        VacationRecords::create([
            'employee_name' => 'Henk van de pas',
            'end_date' => '2024-11-22',
            'type' => 'Vakantie'
        ]);
        VacationRecords::create([
            'employee_name' => 'Jan Janssen',
            'end_date' => '2024-12-15',
            'type' => 'Vakantie'
        ]);
    }
}