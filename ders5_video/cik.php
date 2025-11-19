<?php
// Oturumu başlat
session_start();

// Tüm oturum değişkenlerini temizle
$_SESSION = array();

// Oturumu sonlandır
session_destroy();

// Eğer "kontrol.php" dosyasında ayarlanan bir "giris" çerezi varsa, onu sil
if (isset($_COOKIE['giris'])) {
    // Çerezi, geçmiş bir tarih belirleyerek siler
    setcookie('giris', '', time() - 3600, "/");
}

// Kullanıcıyı giriş sayfasına yönlendir
header("location:login.php");
exit;
?>