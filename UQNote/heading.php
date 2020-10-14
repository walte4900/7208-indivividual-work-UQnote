<?php
include("path.php");
include("app/controllers/users.php");

if(isset($_SESSION['id'])){
    header('location:' . BASE_URL . 'admin/create.php');
    exit();
} else{
    header('location:' . BASE_URL . 'login.php');
    exit();
}