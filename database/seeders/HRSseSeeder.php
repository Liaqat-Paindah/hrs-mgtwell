<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class HRSseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $this->call([
            DepartmentSeeder::class,
            EmployeeSeeder::class,
            ProjectSeeder::class,
            ProjectAssignmentSeeder::class,
        ]);
    }
}
