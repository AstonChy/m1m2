<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class TaskSeeder extends Seeder
{
    public function run()
    {
        $today = date('Y-m-d');
        $yesterday = date('Y-m-d', strtotime('-1 day'));
        $tomorrow = date('Y-m-d', strtotime('+1 day'));

        $this->db->table('tasks')->truncate();
        $this->db->table('users')->truncate();

        $this->db->table('tasks')->insertBatch([
            ['title' => 'Review project requirements', 'status' => 'completed', 'task_date' => $yesterday, 'created_at' => "$yesterday 08:00:00"],
            ['title' => 'Prepare database schema', 'status' => 'completed', 'task_date' => $yesterday, 'created_at' => "$yesterday 10:30:00"],
            ['title' => 'Set up CodeIgniter routes', 'status' => 'pending', 'task_date' => $today, 'created_at' => "$today 08:00:00"],
            ['title' => 'Build the Welcome dashboard', 'status' => 'in progress', 'task_date' => $today, 'created_at' => "$today 09:30:00"],
            ['title' => 'Test task date filtering', 'status' => 'pending', 'task_date' => $today, 'created_at' => "$today 13:00:00"],
            ['title' => 'Write project README', 'status' => 'pending', 'task_date' => $tomorrow, 'created_at' => "$tomorrow 08:30:00"],
            ['title' => 'Review page responsiveness', 'status' => 'pending', 'task_date' => $tomorrow, 'created_at' => "$tomorrow 11:00:00"],
            ['title' => 'Prepare deployment checklist', 'status' => 'pending', 'task_date' => $tomorrow, 'created_at' => "$tomorrow 15:00:00"],
        ]);

        $this->db->table('users')->insert([
            'username' => 'ashtonchy',
            'full_name' => 'Ashton Jacob Felix Chy',
            'email' => 'ashtonchy@example.com',
            'created_at' => "$today 07:30:00",
        ]);
    }
}
