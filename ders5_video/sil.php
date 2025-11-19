<?php
if(!isset($_GET["i"])){
    header("location:index.php"); exit;}
// 1.Adım
include "connection.php";

if($_GET["i"] == "delete_user"){
    //2.adım 
    $sql = "delete from users where id= ". $_GET["id"];

    //3.adım

    $conn->query($sql);
    header('location:users.php?i=3');
}
?>