<?php
namespace Test\Controllers;

use Test\Models\Task;
use Test\Core\Controller;

class tasksController extends Controller
{
    function index()
    {
        //require(ROOT . 'Models/Task.php');
        $tasks = new Task();

        $d['tasks'] = $tasks->showAllTasks();
        $this->set($d);
        $this->render("index");
    }

    //create new task
    function create()
    {
        if (isset($_POST["title"]))
        {
            // require(ROOT . 'Models/Task.php');
            $task= new Task();

            if ($task->create($_POST["title"], $_POST["description"]))
            {
                header("Location: " . WEBROOT . "/tasks/index");
            }
        }

        $this->render("create");
    }
    
    function edit($id)
    {
        // require(ROOT . 'Models/Task.php');
        $task= new Task();

        $d["task"] = $task->showTask($id);

        if (isset($_POST["title"]))
        {
            if ($task->edittask($id, $_POST["title"], $_POST["description"]))
            {
                header("Location: " . WEBROOT . "/tasks/index");
            }
        }
        $this->set($d);
        $this->render("edit");
    }

    function delete($id)
    {
        // require(ROOT . 'Models/Task.php');
        $task = new Task();
        if ($task->delete($id))
        {
            header("Location: " . WEBROOT . "/tasks/index");
        }
    }
}
?>