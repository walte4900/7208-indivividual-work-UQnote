<?php
//include("path.php");
$_SESSION['id'] = null;
$_SESSION['name'] = null;

include(ROOT_PATH . "\app\databse\db.php");
include(ROOT_PATH . "/app/msgs/valide.php");

$username = '';
$student_number = '';
$password = '';
$passwordConf = '';
$errors = array();

if (isset($_POST['register-btn'])) {
    $errors = valide($_POST);
    //dd($_POST);
    $name = $_POST['name'];
    
    $student_number = $_POST['student_number'];
    $pwd = password_hash($_POST['password'], PASSWORD_DEFAULT);


    if (count($errors) == 0) {
        unset($_POST['register-btn'], $_POST['passwordConf']);
        $user_id = insert('users', $_POST);
        $user = selectOne('users',['id'=> $user_id]);

        // log in
        $_SESSION['id'] = $user['id'];
        $_SESSION['name'] = $user['name'];
        $_SESSION['msg'] = "Logged in!";
        $_SESSION['type'] = 'success';
        header('location:'. BASE_URL . 'index.php');
        exit();
    }
}

if (isset($_POST['login-btn'])) {
    //dd($_POST);
    $errors = valideLogin($_POST);
    if (count($errors) == 0) {
        $user = selectOne('users',['name'=> $_POST['name']]);
        $_SESSION['id'] = $user['id'];
        $_SESSION['name'] = $user['name'];
        $_SESSION['msg'] = "Logged in!";
        $_SESSION['type'] = 'success';
        $_SESSION['status'] = 'logged in';
        header('location:'. BASE_URL . 'index.php');
        exit();
    }
}