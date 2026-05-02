<?php

$gelenAd = $_POST['name'];
$gelenEmail = $_POST['email'];
$gelenSifre = $_POST['password'];
$gelenSifreTekrar = $_POST['confirm_password'];

if (empty($gelenAd) || empty($gelenEmail) || empty($gelenSifre) || empty($gelenSifreTekrar)) {
    header("Location: kayit.html?error=1");
    exit();
} else if ($gelenSifre != $gelenSifreTekrar) {
    header("Location: kayit.html?error=1");
    exit();
} else {
    
    echo "<!DOCTYPE html>
    <html lang='tr'>
    <head>
        <meta charset='UTF-8'>
        <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css' rel='stylesheet'>
        <title>Kayıt Başarılı</title>
    </head>
    <body class='bg-light d-flex align-items-center justify-content-center' style='height: 100vh;'>
        <div class='card p-5 shadow text-center'>
            <h1 class='text-success mb-3'>Kayıt Başarılı</h1>
            <p class='lead'>Hoşgeldiniz <strong>" . htmlspecialchars($gelenAd) . "</strong></p>
            <a href='index.html' class='btn btn-primary mt-3'>Ana Sayfaya Dön</a>
        </div>
    </body>
    </html>";
}
?>