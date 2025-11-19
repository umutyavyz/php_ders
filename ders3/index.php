<?php
//Önce güvenlik görevlisini çağır
include "yetki_kontrol.php";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Yönetim Paneli </title>
</head>
<body>
    <h1>Dashbord </h1>

    <p>Hoşgeldin, <?php echo $_SESSION["username"]; ?> </p>

    <p>Çerezdeki İsim: <?php echo isset($_COOKIE["userName"]) ? $_COOKIE["userName"]: "Çerez bulunamadı"; ?> </p>

    <a href="logout.php"> Güvenli Çıkış </a>
</body>
</html>