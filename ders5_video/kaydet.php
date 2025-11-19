<?php
if(!isset($_GET["i"])){
    header("location:index.php"); exit;}
// 1.Adım
include "connection.php";

if($_GET["i"] == "add_user"){
    $name = $_POST["name"];
    $user_name = $_POST["user_name"];
    $password = $_POST["password"];
    $role_id = $_POST["role_id"];


    //2.adım 
    $sql = "insert into users set name='".$name."', username='".$user_name."',password='".$password."',role_id='".$role_id."'";

    //3.adım

    $conn->query($sql);
    header('location:users.php?i=1');


}elseif($_GET["i"] == "update_user"){
    $name = $_POST["name"];
    $user_name = $_POST["user_name"];
    $password = $_POST["password"];
    $role_id = $_POST["role_id"];


    //2.adım 
    if($password == "") {
        $sql = "update users set name='".$name."', username='".$user_name."',role_id='".$role_id."' where id=".$_GET["id"];
    }else{
        $sql = "update users set name='".$name."', username='".$user_name."',password='".$password."',role_id='".$role_id."' where id=".$_GET["id"];
    }
    //3.adım

    $conn->query($sql);
    header('location:users.php?i=2');
}
?>