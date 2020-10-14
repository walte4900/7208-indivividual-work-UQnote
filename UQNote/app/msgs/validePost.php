<?php

function valide($user){
    
    $errors = array();
    if (empty($_POST['name'])) {
        array_push($errors, 'Username is required.');
    } 
    if (empty($_POST['password'])) {
        array_push($errors, 'Password is required.');
    } 
    if (empty($_POST['student_number'])) {
        array_push($errors, 'StudentID is required.');
    } 
    if ($_POST['password'] != $_POST['passwordConf']) {
        array_push($errors, 'Passwords do not match.');
    }

    $existingUser = selectOne('users',['student_number'=>$_POST['student_number']]);
    if(isset($existingUser)){
        array_push($errors, 'StudentID already exists.');
    }
    $existingUser = selectOne('users',['name'=>$_POST['name']]);
    if(isset($existingUser)){
        array_push($errors, 'This name already exists.');
    }
    return $errors;
}

function valideLogin($user){

    $errors = array();
    if (empty($_POST['name'])) {
        array_push($errors, 'Username is required.');
    }
    if (empty($_POST['password'])) {
        array_push($errors, 'Password is required.');
    }


    $existingUser = selectOne('users',['name'=>$_POST['name']]);
    if(!$existingUser){
        array_push($errors, 'This name not exists.');
    }elseif($existingUser['password'] != $_POST['password']){
        array_push($errors, 'Wrong password.');
    }
    return $errors;
}