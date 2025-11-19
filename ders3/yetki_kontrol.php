<?php
session_start();

//Giriş Bileti (isLogin) yoksa kov!
if(!isset($_SESSION["isLogin"])){
    header('location:login.php');
    exit();
}
?>