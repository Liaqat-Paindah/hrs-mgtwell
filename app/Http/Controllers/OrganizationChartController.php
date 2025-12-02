<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;
use App\Models\Employee;

class OrganizationChartController extends Controller
{
    /**
     * Display organization chart
     */
    public function organizationChart()
    {
        $departments = Department::with(['employees' => function($query) {
            $query->where('account_status', 'active')
                  ->orderBy('position');
        }])
        ->where('is_active', true)
        ->orderBy('sort_order')
        ->get();

        $managers = Employee::where('account_status', 'active')
            ->whereHas('subordinates')
            ->withCount('subordinates')
            ->get();

        return view('organization.chart', compact('departments', 'managers'));
    }
}