<?php

namespace App\Http\Controllers;

use App\Models\department;
use App\Models\Employee;
use App\Models\project;
use App\Models\ProjectAssignment;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
        public function projectAllocations()
    {
        $projects = project::with(['projectManager', 'assignments.employee'])
            ->orderBy('project_name')
            ->get();

        $employees = Employee::where('account_status', 'active')->get();
        $departments = department::where('is_active', true)->get();

        return view('projects.allocations', compact('projects', 'employees', 'departments'));
    }

    /**
     * Get employees by project
     */
public function getProjectEmployees($projectId)
{
    $assignments = ProjectAssignment::with(['employee.department'])
        ->where('project_id', $projectId)
        ->where('assignment_status', 'active')
        ->get();

    $project = Project::findOrFail($projectId);
    $departments = Department::get();

    return view('projects.employee-list', compact('assignments', 'project', 'departments'));
}
}
