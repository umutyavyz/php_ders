<?php
       session_start(); // Oturumu yeniden başlatır ki daha önce kaydedilen verilere ulaşabilelim
       if(isset($_SESSION["login"]) && $_SESSION["login"]==1){ //oturumda login=1 var ise
        $username = $_SESSION["user"]; // Kullanıcı adını değişkene atar
       }else{
            header('location:login.php'); //Yoksa kullanıcıyı giriş yapmaya zorla.
       }
?>