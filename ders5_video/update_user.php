<?php
  include "connection.php";
  $sql = "select * from users where id=".$_GET["id"];
  $result = $conn->query($sql);
  $rs = $result->fetch_object();

?>

<form action="kaydet.php?i=update_user&id=<?php echo $_GET['id'] ?>" method="post">
<table>
   <tr>
    <td>Ad Soyad</td>
    <td>: <input required type="text" name="name" value="<?php echo $rs->name ?>"> </td>
   </tr>

   <tr>
    <td>Kullanıcı Adı</td>
    <td>: <input required type="text" name="user_name"  value="<?php echo $rs->username ?>"> </td>
   </tr>

   <tr>
    <td>Parola</td>
    <td>: <input  type="password" name="password">  </td>
   </tr>

   <tr>
    <td>Yetki</td>
    <td>: 
        <select name="role_id" required >
            <option value="">Role Seçiniz</option>
            <?php 
            include "connection.php";
            $sql = "select * from roles";
            $resultRole = $conn->query($sql);
            if($resultRole->num_rows>0){
                while($rsRole = $resultRole->fetch_object()){
                    if($rsRole->id == $rs->role_id) $selected="selected";
                    else $selected = "";
                    echo '<option '.$selected.' value="'.$rsRole->id.'">'.$rsRole->name.'</option>';
                }
            }
            ?>
        </select>
    </td>
   </tr>

   <tr>
    <td colspan="2" style="text-align:right">
        <input type="submit" value="Kaydet">
    </td>
   </tr>

</table>
</form>
