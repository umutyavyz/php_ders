<?php
        session_start(); // oturumu başlatır
        $username = $_POST["username"];
        $pass = $_POST["pass"];

        if($username=="admin" && $pass=="123123"){
            $_SESSION["login"]=1; //Giriş yapıldığını ifade eder.
            $_SESSION["user"] = $username; //Kullanıcı adını kaydeder.
            $_SESSION["yetki"] = 1; //Yetki seviyesini kontrol eder (1:Admin)

            header('location:index.php');
        }elseif($username=="yazar" && $pass=="123123"){ //Yeni kullanıcı (yazar) eklendi
            $_SESSION["login"]=1;
            $_SESSION["user"] = $username;
            $_SESSION["yetki"] =2; // Yetki seviyesini kaydeder (2: Yazar).

            header('location:index.php');
        }else{
            header('location:login.php?hata=1');
        }
?>