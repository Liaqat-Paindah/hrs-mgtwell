<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    public function run(): void
    {
        $projects = [
            [
                'project_name' => 'SEVA Project',
                'project_code' => 'MGTWELL-EQIP-2024-001',
                'client' => 'UNHCR',
                'project_manager_id' => 55, // Nawidullah Assadzay - Head of M&E
                'start_date' => '2024-01-15',
                'end_date' => '2024-12-31',
                'status' => 'active',
                'description' => 'Monitoring and evaluation of education quality improvement initiatives across Afghanistan',
            ],
            [
                'project_name' => 'FAO LTA',
                'project_code' => 'MGTWELL-HAM-2024-002',
                'client' => 'FAO',
                'project_manager_id' => 55, // Dr. Wahidullah Gulabyar - MA Project Director
                'start_date' => '2024-02-01',
                'end_date' => '2024-11-30',
                'status' => 'active',
                'description' => 'Monitoring healthcare service delivery and access in rural areas',
            ],
            [
                'project_name' => 'MA Project',
                'project_code' => 'MGTWELL-ALA-2024-003',
                'client' => 'UNICEF',
                'project_manager_id' => 30, // Shah Mohmmad Kamawal - M&E Coordinator
                'start_date' => '2024-03-01',
                'end_date' => '2024-10-31',
                'status' => 'active',
                'description' => 'Assessment of agricultural livelihoods and food security situation',
            ],
            [
                'project_name' => 'Market Assessment',
                'project_code' => 'MGTWELL-IDM-2024-004',
                'client' => 'UN Women',
                'project_manager_id' => 59, // Mohammad Younus Didar - M&E Coordinator
                'start_date' => '2024-01-10',
                'end_date' => '2024-09-30',
                'status' => 'active',
                'description' => 'Monitoring infrastructure development projects in rural communities',
            ],
            [
                'project_name' => 'Women Empowerment Program Evaluation',
                'project_code' => 'MGTWELL-WEP-2024-005',
                'client' => 'UN Women',
                'project_manager_id' => 50, // Yalda Foladzada - Program Coordinator
                'start_date' => '2024-02-15',
                'end_date' => '2024-08-31',
                'status' => 'active',
                'description' => 'Evaluation of women empowerment and economic inclusion programs',
            ]
        ];

        foreach ($projects as $project) {
            Project::create($project);
        }
    }
}