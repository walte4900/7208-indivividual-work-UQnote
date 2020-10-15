<?php
include('path.php');
session_start();
session_destroy();
setcookie(session_name() , "", time()-3600);
$_SESSION = array();

header('location:' . BASE_URL . 'index.php');
exit();