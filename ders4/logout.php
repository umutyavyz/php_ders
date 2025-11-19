<?php
      session_start(); //oturumu yeniden başlatır.
      session_destroy(); //Tüm oturum değişkenlerini ve oturumu sunucudan siler
      header('location:login.php');
?>