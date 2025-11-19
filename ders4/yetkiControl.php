<?php
if($_SESSION["yetki"]!="1"){
    echo"Bu sayfayı görmeye yetkiniz bulunmamaktadır."; //Hata mesajını göster
    echo "<br><a href='index.php'>Geri Dön </a>";
    exit; // sayfanın daha fazla çalışmasını durdurur
}
?>