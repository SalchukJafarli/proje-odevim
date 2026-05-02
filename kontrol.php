<?php

$dogruEmail = "b251210565@sakarya.edu.tr"; 
$dogruSifre = "b251210565"; 


$gelenEmail = $_POST['email'];
$gelenSifre = $_POST['password'];


if (empty($gelenEmail) || empty($gelenSifre)) {
    
    header("Location: index.html?error=1");
    exit();
} 
else if ($gelenEmail == $dogruEmail && $gelenSifre == $dogruSifre) {
    
    echo "<!DOCTYPE html>
    <html lang='tr'>
    <head>
        <meta charset='UTF-8'>
        <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css' rel='stylesheet'>
        <title>Başarılı</title>
    </head>
    <body class='bg-light d-flex align-items-center justify-content-center' style='height: 100vh;'>
        <div class='card p-5 shadow text-center'>
            <h1 class='text-success mb-3'>Giriş Başarılı</h1>
            <p class='lead'>Hoşgeldiniz <strong>" . $dogruSifre . "</strong></p>
            <a href='hakkimda.html' class='btn btn-primary mt-3'>Sitede Devam Et</a>
        </div>
    </body>
    </html>";
} 
else {
    
    header("Location: index.html?error=1");
    exit();
}
?>