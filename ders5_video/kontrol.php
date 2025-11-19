<?php
session_start();
include_once "connection.php";

$kad = $_POST["kad"] ?? '';
$parola = $_POST["parola"] ?? '';
$hatirla = isset($_POST["hatirla"]) ? 1 : 0;

// GÜVENLİ: Prepared Statements Kullanımı
$sql = "SELECT ID, username, role_id FROM users WHERE username = ? AND password = ?";
$stmt = $conn->prepare($sql);
// 'ss' -> iki string (kullanıcı adı ve parola) değişkeni bağlanıyor
$stmt->bind_param("ss", $kad, $parola);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $rs = $result->fetch_object();

    $_SESSION["girisyapti"] = 1;
    // Tablonuzdaki kolon adını kontrol edin (username veya user_name olmalı)
    $_SESSION["kad"] = $rs->username; 
    $_SESSION["user_id"] = $rs->ID;
    $_SESSION["role_id"] = $rs->role_id;

    if ($hatirla == 1) {
        setcookie('giris', $kad, time() + (86400 * 30), "/");
    }

    header("Location: index.php");
    exit;
} else {
    header("Location: login.php?hata=1");
    exit;
}
$stmt->close();
?>