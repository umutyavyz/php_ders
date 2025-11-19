<?php
session_start();


if(!isset($_SESSION["girisyapti"]) || $_SESSION["girisyapti"]!=1){
     header("location:login.php?hata=2");
     exit;
}

echo "Merhaba ". $_SESSION["kad"].", Hoşgeldin";
?>
<br>

<a href="users.php">Kullanıcılar </a>
<a href="cik.php">Güvenli Çıkış </a>