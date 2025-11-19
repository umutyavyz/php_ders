<?php
session_start(); // Oturumu başlat


if(isset($_SESSION["role_id"]) && $_SESSION["role_id"] == 2) {
    echo "<h1>Bu sayfayı görüntülemek için yeterli yetkiye sahip değilsiniz.</h1>";
    exit; 
}
?>
<style>
table, th, td{
    border:1px solid black;
}
.mb-10{margin-bottom:20px}
</style>
<div class="mb-10">
    <a href="add_user.php">Yeni Kullanıcı Ekle </a>
</div>

<?php
if(isset($_GET["i"])){
    if($_GET["i"]==1)
        echo "<div class='md-10'> Kullanıcı başarıyla kaydedildi. </div>";
    elseif($_GET["i"]==2)
        echo "<div class='md-10'> Kullanıcı başarıyla güncellendi. </div>";
    elseif($_GET["i"]==3)
        echo "<div class='md-10'> Kullanıcı başarıyla silindi. </div>";
}

//1.Adım Veritanabı bağlantısı

include "connection.php";

//2.adım sql cümleni yaz
$sql = "select users.*,roles.name as role_name from users inner join roles on users.role_id=roles.id order by users.name";

//3.adım SQL CÜMLENİNİ SUNUCUYA GÖNDER
$result = $conn->query($sql);

// 4.Adım Sonuçları Kontrol Et dönen değer var mı
if($result->num_rows>0){ // kayıt var ise, dönen değer en az 1 ise
?>

    <table>
      <thead>
        <tr>
            <th>#</th>
            <th>Adı Soyadı</th>
            <th>Yetki</th>
            <th>İşlemler</th>
      </thead>
      <tbody>
        <?php
        // 5.Adım Kayıt Kümesini Oku
        while($rs = $result->fetch_object()){
        
            echo '<tr>
            <td>' . $rs->ID . '</td>
            <td>' . $rs->name . '</td>
            <td>' . $rs->role_name . '</td>
            <td><a href="update_user.php?id='.$rs->ID.'">Düzenle</a> &nbsp; <a href="sil.php?id=' .$rs->ID. '&i=delete_user"> Sil </a></td>
        </tr>';
        }
        ?>
      </tbody>
    </table>


<?php
}else {
    echo "tabloda kayıt yok";
}