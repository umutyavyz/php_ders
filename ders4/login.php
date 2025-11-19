<html>
<head>
    <title> Giriş Sayfası </title>
    <style>
        body{background:#f0f0f0;}
        .formArea{
            background:White;
            width:200px;
            margin:20px auto;
            padding: 20px;
            border: 1px solid #d0d0d0;
            border-radius: 10px;
        }
        .logo img{width:150px}
        .btn{margin-top:20px}
        .error{
            background:#ffd3d3;
            border:1px solid red;
            padding: 5px
        }
    </style>
</head>
<body>
    <div class="formArea">
        <form method="POST" action="kontrol.php" name="loginForm">
            <div class="logo">
                <img src="logo.png" />
            </div>
            <?php
            if(isset($_GET["hata"])){
                if($_GET["hata"]==1){
                echo'
                <div class="error">
                Kullanıcı Adı veya parola hatalı
                </div>
                ';
            }
        }
        ?>

        <div class="inputArea">
            <label>Kullanıcı Adı : </label><br>
            <input type="text" name="username"/>
        </div>
        <div class="inputArea">
            <label>Parola : </label><br>
            <input type="password" name="pass" />
        </div>
        <input class="btn" type="submit" value="Giriş Yap" />
        </form>
    </div>
</body>
</html>