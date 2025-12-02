<?php

namespace Database\Seeders;

use App\Models\ProjectAssignment;
use Illuminate\Database\Seeder;

class ProjectAssignmentSeeder extends Seeder
{
    public function run(): void
    {
        // Clear existing assignments
        ProjectAssignment::truncate();

        $assignments = [
            // Education Quality Improvement Program (Project 1)
            [
                'employee_id' => 30,  // Shah Mohmmad Kamawal - M&E Coordinator
                'project_id' => 1,
                'role_in_project' => 'Field Coordinator',
                'start_date' => '2024-01-15',
                'end_date' => '2024-12-31',
                'assignment_status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'employee_id' => 35,  // Abdullah Zakhil - M&E Officer
                'project_id' => 1,
                'role_in_project' => 'Data Collector',
                'start_date' => '2024-01-20',
                'end_date' => '2024-12-31',
                'assignment_status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'employee_id' => 38,  // Rohullah Naseri - M&E Assistant
                'project_id' => 1,
                'role_in_project' => 'Field Assistant',
                'start_date' => '2024-02-01',
                'end_date' => '2024-12-31',
                'assignment_status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'employee_id' => 52,  // Ahmad Javid Stanikzai - M&E Assistant
                'project_id' => 1,
                'role_in_project' => 'Field Monitor',
                'start_date' => '2024-02-10',
                'end_date' => '2024-12-31',
                'assignment_status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Healthcare Access Monitoring (Project 2)
            [
                'employee_id' => 37,  // Mohammad Haris Shaiq - Consultant
                'project_id' => 2,
                'role_in_project' => 'Technical Advisor',
                'start_date' => '2024-02-01',
                'end_date' => '2024-11-30',
                'assignment_status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'employee_id' => 46,  // Hasibullah Najibi - MA Officer
                'project_id' => 2,
                'role_in_project' => 'Field Coordinator',
                'start_date' => '2024-02-01',
                'end_date' => '2024-11-30',
                'assignment_status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'employee_id' => 47,  // Sayed Hasibullah Shahidzai - MA Officer
                'project_id' => 2,
                'role_in_project' => 'Data Analyst',
                'start_date' => '2024-02-15',
                'end_date' => '2024-11-30',
                'assignment_status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'employee_id' => 29,  // Imran Nazar Mohmand - MA Officer
                'project_id' => 2,
                'role_in_project' => 'Health Coordinator',
                'start_date' => '2024-02-01',
                'end_date' => '2024-11-30',
                'assignment_status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Agricultural Livelihoods Assessment (Project 3)
            [
                'employee_id' => 44,  // Ahmad Shoib Zaheri - M&E Officer
                'project_id' => 3,
                'role_in_project' => 'Team Lead',
                'start_date' => '2024-03-01',
                'end_date' => '2024-10-31',
                'assignment_status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'employee_id' => 39,  // Ahmad Milad - Data Management Officer
                'project_id' => 3,
                'role_in_project' => 'Data Manager',
                'start_date' => '2024-03-01',
                'end_date' => '2024-10-31',
                'assignment_status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'employee_id' => 41,  // Abdul Waris Stanikzai - Data Management Officer
                'project_id' => 3,
                'role_in_project' => 'Field Data Collector',
                'start_date' => '2024-03-15',
                'end_date' => '2024-10-31',
                'assignment_status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'employee_id' => 48,  // Jamil Rahman Hassanzai - Data Analyst
                'project_id' => 3,
                'role_in_project' => 'Data Quality Officer',
                'start_date' => '2024-03-10',
                'end_date' => '2024-10-31',
                'assignment_status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Infrastructure Development Monitoring (Project 4)
            [
                'employee_id' => 45,  // Mohammad Naim - Data Management Officer
                'project_id' => 4,
                'role_in_project' => 'Monitoring Officer',
                'start_date' => '2024-01-10',
                'end_date' => '2024-09-30',
                'assignment_status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'employee_id' => 48,  // Jamil Rahman Hassanzai - Data Analyst
                'project_id' => 4,
                'role_in_project' => 'Data Analyst',
                'start_date' => '2024-01-10',
                'end_date' => '2024-09-30',
                'assignment_status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'employee_id' => 53,  // Liaqat Paindah - Data Analyst
                'project_id' => 4,
                'role_in_project' => 'Field Analyst',
                'start_date' => '2024-01-20',
                'end_date' => '2024-09-30',
                'assignment_status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'employee_id' => 63,  // Dadkhuda Ahmad Yar - Sr. Data Analyst
                'project_id' => 4,
                'role_in_project' => 'Senior Data Analyst',
                'start_date' => '2024-01-15',
                'end_date' => '2024-09-30',
                'assignment_status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ],

   
        ];

        foreach ($assignments as $assignment) {
            ProjectAssignment::create($assignment);
        }

        $this->command->info('Project assignments seeded successfully!');
        $this->command->info('Total assignments created: ' . count($assignments));
        
        // Display summary by project
        $this->displayAssignmentSummary();
    }

    private function displayAssignmentSummary(): void
    {
 $projects = [
    1 => 'SEVA Project',
    2 => 'FAO LTA', 
    3 => 'MA Project',
    4 => 'Market Assessment',
];

        $this->command->info("\nAssignment Summary by Project:");
        $this->command->info("==============================");

        foreach ($projects as $projectId => $projectName) {
            $count = ProjectAssignment::where('project_id', $projectId)->count();
            $this->command->info("Project {$projectId}: {$projectName} - {$count} assignments");
        }
    }
}