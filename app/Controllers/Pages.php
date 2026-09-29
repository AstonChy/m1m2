<?php

namespace App\Controllers;

use App\Models\TaskModel;
use App\Models\UserModel;

class Pages extends BaseController
{
    private TaskModel $tasks;
    private UserModel $users;

    public function __construct()
    {
        $this->tasks = new TaskModel();
        $this->users = new UserModel();
    }

    public function welcome()
    {
        $today = date('Y-m-d');

        return view('pages/welcome', [
            'title' => 'Welcome',
            'today' => $today,
            'tasks' => $this->tasks->forDate($today),
        ]);
    }

    public function tasks()
    {
        return view('pages/tasks', [
            'title' => 'Task List',
            'tasks' => $this->tasks->orderBy('task_date', 'ASC')->orderBy('created_at', 'ASC')->findAll(),
        ]);
    }

    public function profile()
    {
        return view('pages/profile', [
            'title' => 'Profile',
            'user' => $this->users->first(),
        ]);
    }

    public function about()
    {
        return view('pages/about', ['title' => 'About']);
    }
}
