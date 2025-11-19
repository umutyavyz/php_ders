<?php
// Oturumu başlat
session_start();

// Kullanıcı zaten giriş yapmışsa (index.php'deki kontrol mantığına göre), ana sayfaya yönlendir
if(isset($_SESSION["girisyaptimi"]) && $_SESSION["girisyaptimi"]==1){
     header("location:index.php");
     exit;
}
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Kullanıcı Girişi</title>
    <style>
        .hata-mesaji { 
            color: red; 
            font-weight: bold; 
            border: 1px solid red; 
            padding: 10px; 
            margin-bottom: 15px;
        }
    </style>
</head>
<body>

    <h2>Kullanıcı Girişi</h2>

    <?php
    // URL'den gelen 'hata' parametresini kontrol et
    if (isset($_GET['hata'])) {
        $hata_kodu = $_GET['hata'];
        
        if ($hata_kodu == 1) {
            // Hata kodu 1, kontrol.php'den gelen hatalı giriş denemesi
            echo '<p class="hata-mesaji">HATA: Kullanıcı Adı veya Parola Hatalı!</p>'; 
        } elseif ($hata_kodu == 2) {
            // Hata kodu 2, index.php'den gelen oturum yok uyarısı
            echo '<p class="hata-mesaji" style="color: blue; border-color: blue;">UYARI: Sisteme giriş yapmak için yetkiniz yok veya oturumunuz sona erdi.</p>'; 
        }
    }
    ?>

    <form action="kontrol.php" method="POST">
        <div>
            <label for="kullanici_adi">Kullanıcı Adı:</label>
            <input type="text" id="kullanici_adi" name="kad" required>
        </div>
        <br>
        <div>
            <label for="parola">Parola:</label>
            <input type="password" id="parola" name="parola" required>
        </div>
        <br>
        <div>
            <input type="checkbox" id="hatirla" name="hatirla" value="1">
            <label for="hatirla">Beni Hatırla (30 gün)</label>
        </div>
        <br>
        <button type="submit">Giriş Yap</button>
    </form>

</body>
</html>