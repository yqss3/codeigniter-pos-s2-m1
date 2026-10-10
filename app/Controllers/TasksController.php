<?php

namespace App\Controllers;

use App\Models\TaskModel;
use App\Models\UserModel;

class TasksController extends BaseController
{
    public function index()
    {
        $taskModel = new TaskModel();

        $data['tasks'] = $taskModel->getTodayTasks();

        return view('welcome_tasks', $data);
    }

    public function tasks()
    {
        $taskModel = new TaskModel();

        $data['tasks'] = $taskModel->getAllTasks();

        return view('tasklist', $data);
    }

    public function profile()
    {
        $userModel = new UserModel();

        $data['user'] = $userModel->first();

        return view('profile', $data);
    }

    public function about()
    {
        return view('about');
    }
}