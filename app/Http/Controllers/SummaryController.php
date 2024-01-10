<?php

namespace App\Http\Controllers;

// app/Http/Controllers/SummaryController.php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Support\Facades\DB;

class SummaryController extends Controller
{
    public function index()
    {
        $maleCount = Employee::where('gender', 'Male')->count();
        $femaleCount = Employee::where('gender', 'Female')->count();

        $averageAge = DB::table('employees')
            ->selectRaw('AVG(YEAR(NOW()) - YEAR(birthday)) as average_age')
            ->first()->average_age;

        $totalSalary = Employee::sum('monthly_salary');

        return view('summary.index', compact('maleCount', 'femaleCount', 'averageAge', 'totalSalary'));
    }
}
