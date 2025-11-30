<?php

namespace Database\Seeders;

use App\Models\Department;
use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    public function run(): void
    {
        // Create Executive Leadership first and get its ID
        $executive = Department::create([
            'department' => 'Executive Leadership',
            'description' => 'Senior management and executive team',
        ]);

        $departments = [
            [
                'department' => 'HR',
                'parent_department_id' => $executive->id,
                'description' => 'Human Resources management and employee services',
            ],
            [
                'department' => 'Finance',
                'parent_department_id' => $executive->id,
                'description' => 'Financial management and accounting',
            ],
            [
                'department' => 'M&E',
                'parent_department_id' => $executive->id,
                'description' => 'Monitoring and Evaluation',
            ],
            [
                'department' => 'IT',
                'parent_department_id' => $executive->id,
                'description' => 'Information Technology infrastructure and development',
            ],
            [
                'department' => 'Health',
                'parent_department_id' => $executive->id,
                'description' => 'Health services and programs',
            ],
            [
                'department' => 'Business Development',
                'parent_department_id' => $executive->id,
                'description' => 'Business growth and strategic partnerships',
            ],
        ];

        foreach ($departments as $department) {
            Department::create($department);
        }
    }
}