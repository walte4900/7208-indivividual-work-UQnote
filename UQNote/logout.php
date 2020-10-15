<?php
include('path.php');
session_start();

unset($_SESSION['id']);
unset($_SESSION['name']);
unset($_SESSION['msg']);
unset($_SESSION['type']);

header('location:' . BASE_URL . 'index.php');
exit();