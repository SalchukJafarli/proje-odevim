<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    
    $email = isset($_POST['email']) ? trim($_POST['email']) : '';
    $password = isset($_POST['password']) ? trim($_POST['password']) : '';

    if (empty($email) || empty($password)) {
        
        header("Location: login.html?error=1");
        exit();
    }

    $domain = "@sakarya.edu.tr";

    
    if (strpos($email, $domain) !== false) {
        
        
        $ogrenciNo = str_replace($domain, "", $email);

        
        if ($password === $ogrenciNo) {
            
            echo "<div style='font-family: Arial; text-align: center; margin-top: 50px;'>";
            echo "<h1 style='color: green;'>Başarılı Giriş!</h1>";
            echo "<h2>Hoşgeldiniz " . htmlspecialchars($ogrenciNo) . "</h2>";
            echo "<a href='index.html'>Ana Sayfaya Dön</a>";
            echo "</div>";
            exit();
        } else {
            
            header("Location: login.html?error=1");
            exit();
        }
    } else {
        
        header("Location: login.html?error=1");
        exit();
    }

} else {
    
    header("Location: login.html");
    exit();
}
?>