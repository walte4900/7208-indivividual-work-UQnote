<?php

ini_set("session.save_handler", "redis");
ini_set("session.save_path", "myredis-master:6379?auth=my_master_password");
session_start();
use function PHPSTORM_META\type;

require("connect.php");

function dd($value){
    echo '<pre>', print_r($value), '</pre>';
}

function executeQuery($sql, $data){
    global $conn;
    $stmt = $conn->prepare($sql);
    // avoid injection
    $values = array_values($data);
    $types = str_repeat('s', count($values));
    $stmt->bind_param($types, ...$values);
    $stmt->execute();
    return $stmt;
}

// the second is conditional para
function selectAll($table, $conditions = []){
    global $conn;
    $sql="SELECT * FROM $table";
    if (empty($conditions)){
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
        return $records;
    } else{
        $i=0;
        foreach($conditions as $key=>$value){
            if($i == 0){
                $sql = $sql . " WHERE $key=?";
            }else {
                $sql = $sql . " AND $key=?";
            }
            $i++;
        }
        $stmt = executeQuery($sql,$conditions);
        $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
        return $records;
    }
}


function selectOne($table, $conditions){

    $sql="SELECT * FROM $table";
    $i=0;
    foreach($conditions as $key=>$value){
        if($i == 0){
            $sql = $sql . " WHERE $key=?";
        }else {
            $sql = $sql . " AND $key=?";
        }
        $i++;
    }

    $sql = $sql . " LIMIT 1";
    $stmt = executeQuery($sql,$conditions);
    $records = $stmt->get_result()->fetch_assoc();
    return $records;
}


function insert($table, $data){

    $sql="INSERT INTO $table SET";
    $i=0;
    foreach($data as $key=>$value){
        if($i == 0){
            $sql = $sql . " $key=?";
        }else {
            $sql = $sql . ", $key=?";
        }
        $i++;
    }
    $stmt = executeQuery($sql, $data);
    $id = $stmt->insert_id;
    return $id;
}


function update($table, $id, $data){
    $sql="UPDATE $table SET";
    $i=0;
    foreach($data as $key=>$value){
        if($i == 0){
            $sql = $sql . " $key=?";
        }else {
            $sql = $sql . ", $key=?";
        }
        $i++;
    }

    $sql = $sql . " WHERE id=?";
    $data['id'] = $id;
    $stmt = executeQuery($sql, $data);
    $id = $stmt->insert_id;
    return $stmt;
}

function delete($table, $id){
    $sql="DELETE FROM $table WHERE id=?";

    $stmt = executeQuery($sql, ['id'=>$id]);
    return $stmt;
}