<?php
session_set_cookie_params(8000, "/");
session_start();
include("top.php");
require("model.php");

$create = $_POST ['create'] ?? NULL;
$login = $_POST ['login'] ?? NULL;

if($_SERVER['REQUEST_METHOD'] == 'GET'){
    $action = $_GET['action'] ?? NULL;
    if($action == "create"){
    include('create.php');
    }else if($action == "login"){
        include('login.php');
    }else if($action == "logout"){
        logout();
        header("Location: controller.php");
    }

}else{
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $action = $_POST['action'] ?? NULL;
        if($action == 'create'){
            if (isset($_POST['user'])){ 
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                create($user,$pass);
            }
        }
        if($action == 'login'){
            if (isset($_POST['user'])){ 
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                login($user,$pass);
                header("Location: controller.php");
            }
        }
    }
}
?>