<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $employees = [
            [
                'type'     => 'respondent',
                'priority' => 1,
            ],
            [
                'type'     => 'respondent',
                'priority' => 1,
            ],
            [
                'type'     => 'respondent',
                'priority' => 1,
            ],
            [
                'type'     => 'manager',
                'priority' => 2,
            ],
            [
                'type'     => 'director',
                'priority' => 3,
            ],
        ];

        \App\Employee::insert($employees);
    }
}
