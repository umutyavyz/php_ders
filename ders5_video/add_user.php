<form action="kaydet.php?i=add_user" method="post">
<table>
   <tr>
    <td>Ad Soyad</td>
    <td>: <input required type="text" name="name"> </td>
   </tr>

   <tr>
    <td>Kullanıcı Adı</td>
    <td>: <input required type="text" name="user_name"> </td>
   </tr>

   <tr>
    <td>Parola</td>
    <td>: <input required type="password" name="password"> </td>
   </tr>

   <tr>
    <td>Yetki</td>
    <td>: 
        <select name="role_id" required >
            <option value="">Role Seçiniz</option>
            <?php 
            include "connection.php";
            $sql = "select * from roles";
            $result = $conn->query($sql);
            if($result->num_rows>0){
                while($rs = $result->fetch_object()){
                    echo '<option value="'.$rs->id.'">'.$rs->name.'</option>';
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
