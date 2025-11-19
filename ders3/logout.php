<?php
session_start();

session_unset(); // Tüm session değişkenlerini sil
session_destroy(); // Oturumu tamamen yok et


if(isset($_COOKIE["userName"])){
    setcookie("userName", "", time() - 3600, "/");
}

header('location:login.php');

?>