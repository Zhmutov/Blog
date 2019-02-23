<?php
/**
 * Created by PhpStorm.
 * User: Витя
 * Date: 20.02.2019
 * Time: 21:34
 */

namespace App\Http\Controllers;

use App\Blog as Blog;
use Illuminate\Http\Request;

class BlogController
{

//На стартовою страницу
    public function CreateBlog()
    {
        Blog::PutBlog();
        echo 'Запись ' . $_POST['title'] . '. Добавлена!';
        return view('StartBlog');
    }
//Админ или Юзер меню
    public function Start()
    {
        $role = $_POST['role'];
        if ($role == 'Admin') {
            return redirect()->route('AdminBlog');
        } else {
            return redirect()->route('tasksList');
        }
    }

//Список задач
    public function getTasksList()
    {
        $allTask = Blog::GetAllTasks()->paginate(5);
        $allTask = ['allTask' => $allTask];
        return view('taskslist', $allTask);
    }
//Одна задача
    public function getOneTask($id)
    {
        $oneTask = Blog::GetOneTask($id);
        $oneTask = ['oneTask' => $oneTask];
        return view('oneTask', $oneTask);
    }

}