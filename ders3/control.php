<?php
session_start(); //Oturum işlemleri için şart!

$userName = $_POST["username"];
$pass = $_POST["pass"];

if($userName=="admin" && $pass=="123456"){
    //Giriş Başarılı!
    $_SESSION["userName"]=$userName;
    $_SESSION["isLogin"] = "1";

    //Beni hatırla kutusu seçili mi?
    if(isset($_POST["remember"])){
        // 30 GÜNLÜK ÇEREZ OLUŞTUR (86400 SANİYE = 1 GÜN)
        setcookie('userName',$userName,time() + (86400*30), "/");
    }
    
    header('location:index.php'); //Panele Gönder

}else{
    // Giriş Başarısız!
    header('location:login.php?hata=1');
}
?>