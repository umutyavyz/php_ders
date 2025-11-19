<!DOCTYPE HTML>
<html>
<head>
    <title> Giriş Ekranı </title>
</head>
<body>
    <?php
    //Daha önce session beni hatırla demiş mi kontrol et
    if(isset($_COOKIE["userName"])){
        session_start();
        $_SESSION["userName"]=$_COOKIE["userName"];
        $_SESSION["isLogin"] = "1";
        header('location:index.php');
    }
    ?>


    <form name="loginForm" method="POST" action="control.php">
        <h2>Giriş Ekranı</h2>

        <?php
        //Hata mesajı varsa göster
        if(isset($_GET["hata"])){
            if($_GET["hata"]=="1")
                echo '<p class="err"> Kullanıcı Adı ya da Parola hatalı </p>';
        }
        ?>


    <div>
        <label>Kullanıcı Adı </label><br>
        <input type="text" name="username" placeholder="Kullanı Adı" />
    </div>
    <br>
    <div>
        <label> Parola </label> <br>
        <input type="password" name="pass" placeholder="Şifre" />
    </div>
    <br>
    <div>
        <label>Beni Hatırla </label>
        <input type="checkbox" value="1" name="remember" />
    </div>
    <br>
    <input type="submit" value="Giriş Yap" />
    </form>
</body>
</html>

