<?php

//each page extends controller and the index.php?page=tasks causes the controller to be called
class tasksController extends http\controller
{
    public static function show()
    {
        $record = todos::findOne($_REQUEST['id']);
        self::getTemplate('show_task', $record);
    }

    public static function all()
    {
        session_start();
           if(key_exists('userID',$_SESSION)) {
               $userID = $_SESSION['userID'];
           } else {

               echo 'you must be logged in to view tasks';
           }
        $userID = $_SESSION['userID'];

        $records = todos::findTasksbyID($userID);

        self::getTemplate('all_tasks', $records);

    }

    public static function insertButton()
    {
        self::getTemplate('create_tasks');
    }

    public static function editTasks()
    {
        $record = todos::findOne($_REQUEST['id']);
        self::getTemplate('edit_task',$record);
    }

    public static function edit()
    {
        $task = new todo();
        $task->id = $_GET['id'];
        $task->createddate = $_POST['createddate'];
        $task->duedate = $_POST['duedate'];
        $task->message = $_POST['message'];
        $task->isdone = $_POST['isdone'];
        $task->save();
        //self::getTemplate('all_tasks', $user);

        header("Location: index.php?page=tasks&action=all");
    }

    public static function store()
    {
        session_start();
        $task = new todo();
        $task->createddate = $_POST['createddate'];
        $task->duedate = $_POST['duedate'];
        $task->message = $_POST['message'];
        $task->isdone = $_POST['isdone'];
        $resultset = accounts::findUser($_SESSION['userID']);
        $task->ownerid = $resultset->id;
        $task->owneremail = $resultset->email;
        $task->save();
        header('Location: index.php?page=tasks&action=all');
    }

    public static function save() {
        session_start();
        $task = new todo();

        //$task->body = $_POST['body'];
        $task->ownerid = $_SESSION['userID'];
        $task->all();

    }

    public static function delete()
    {
        $record = todos::findOne($_REQUEST['id']);
        $record->delete();
        header("Location: index.php?page=tasks&action=all");
    }

    public static function login()
    {
        //you will need to fix this so we can find users username.  YOu should add this method findUser to the accounts collection
        //when you add the method you need to look at my find one, you need to return the user object.
        //then you need to check the password and create the session if the password matches.
        //you might want to add something that handles if the password is invalid, you could add a page template and direct to that
        //after you login you can use the header function to forward the user to a page that displays their tasks.
        //        $record = accounts::findUser($_POST['email']);
        $user = accounts::findUserbyEmail($_REQUEST['email']);
        print_r($user);
        //$tasks = accounts::findTasksbyID($_REQUEST['ownerid']);
        // print_r($tasks);
        if ($user == FALSE) {
            echo 'user not found';
        } else {

            if($user->checkPassword($_POST['password']) == TRUE) {
                session_start();
                $_SESSION["userID"] = $user->id;
                header("Location: index.php?page=tasks&action=all");
            } else {
                echo 'password does not match';
            }
        }
    }
}