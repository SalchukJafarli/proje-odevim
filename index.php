<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Doğru giriş bilgileri
    $dogruEmail = "b251210565@sakarya.edu.tr"; 
    $dogruSifre = "b251210565"; 

    $gelenEmail = isset($_POST['email']) ? trim($_POST['email']) : '';
    $gelenSifre = isset($_POST['password']) ? trim($_POST['password']) : '';

    // Boş alan veya yanlış bilgi kontrolü
    if (empty($gelenEmail) || empty($gelenSifre) || $gelenEmail !== $dogruEmail || $gelenSifre !== $dogruSifre) {
        header("Location: index.html?error=1");
        exit();
    } else {
        ?>
        <!DOCTYPE html>
        <html lang="tr">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Giriş Başarılı</title>
            
            <meta http-equiv="refresh" content="3;url=hakkimda.html">
            
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
            <style>
                body { background: #f0e6ff; height: 100vh; display: flex; align-items: center; justify-content: center; text-align: center; font-family: 'Segoe UI', sans-serif; }
                .success-card { background: white; padding: 60px; border-radius: 30px; box-shadow: 0 15px 35px rgba(0,0,0,0.1); border-bottom: 8px solid #7d3edb; max-width: 600px; width: 90%; }
                h2 { font-size: 3rem; font-weight: bold; color: #333; margin-top: 20px; }
                .student-id { color: #7d3edb; }
            </style>
        </head>
        <body>
            <div class="success-card">
                <div style="font-size: 6rem;">✅</div>
                <h2>Hoşgeldiniz <span class="student-id">b251210565</span></h2>
                <p class="fs-4 text-muted mt-3">Giriş işleminiz başarıyla tamamlandı.</p>
                <p class="text-secondary mt-2">3 saniye içinde yönlendiriliyorsunuz...</p>
                <hr class="my-4">
                <a href="hakkimda.html" class="btn btn-dark btn-lg px-5 py-3 fw-bold">Beklemeden Devam Et</a>
            </div>
        </body>
        </html>
        <?php
        exit(); 
    }
} else {
    header("Location: index.html");
    exit();
}
?>