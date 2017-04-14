<?php

use Illuminate\Database\Seeder;

class TaskTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

         $now = date('Y-m-d H:i:s');

        DB::table('tasks')->insert(
            [
                'title' => 'Task 1',
                'description' => 'wided',
                'created_at' => $now,
                'updated_at' => $now,
            ]
        );
        DB::table('tasks')->insert(
            [
                'title' => 'Task 2',
                'description' => 'Roua',
                'created_at' => $now,
                'updated_at' => $now,
            ]
        );
        DB::table('tasks')->insert(
            [
                'title' => 'Task 3',
                'description' => 'Sahar',
                'created_at' => $now,
                'updated_at' => $now,
            ]
        );
    }
}
