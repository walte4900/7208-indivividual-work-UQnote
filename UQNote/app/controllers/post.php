<?php
//include(ROOT_PATH . "\app\databse\db.php");

$all = selectAll('posts');

if(isset($_GET['id'])){
    $posts = selectOne('posts',['id'=>$_GET['id']]);
}

if (isset($_POST['post-btn'])) {

    //$errors = valide($_POST);
    //dd($_POST);
    $id = 0;
    unset($_POST['post-btn']);
    if($_POST['title']&&$_POST['subject']&&$_POST['content']){
        $_POST['uname'] = $_SESSION['name'];
        //dd($_POST);
        $id = insert('posts',$_POST);
    }
    return $id;
}