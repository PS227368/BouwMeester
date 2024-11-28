<?php
namespace Database\Seeders;
use App\Models\SickReports;
use Illuminate\Database\Seeder;
class SickReportSeeder extends Seeder
{
    public function run()
    {
        SickReports::create([
            'employee_name' => 'Henk van de pas',
            'start_date' => '2024-03-15'
        ]);
        SickReports::create([
            'employee_name' => 'Piet Peters',
            'start_date' => '2024-03-20'
        ]);
    }
}