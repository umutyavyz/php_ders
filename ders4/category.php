<?php
include "loginControl.php";
include "yetkiControl.php";
include "menu.php";

?>
<h1>Bu sayfa kategori sayfasıdır.</h1>

<?php
    echo "<h2>".$_GET["id"]."</h2>";
    if($_GET["id"]=="spor"){
        echo "
        <ul>
            <li>Futbol</li>
            <li>Basketbol</li>
            <li>Avcılar</li>
            <li>Tenis</li>
        </ul>
        ";
    }else{
        echo"Kategori Bulunamadı";
    }
?>