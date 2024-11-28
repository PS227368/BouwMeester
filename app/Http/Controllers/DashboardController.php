<?
namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\VacationRecord;
use App\Models\SickReport;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'role:beheerder,projectmanager']);
    }

    public function index()
    {
        return view('dashboard', [
            'employeeCount' => Employee::count(),
            'employees' => Employee::all(),
            'Vacation_Record' => VacationRecord::all(),
            'Sick_Record' => SickReport::all(),
        ]);
    }
}
