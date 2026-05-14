<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="5;url=hakkimda.html">
    <title>Mesaj Alındı - Salchuk Jafarlı</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #1a1a2e;
            background-image: url('https://www.transparenttextures.com/patterns/circuit-board.png');
            color: white;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Segoe UI', sans-serif;
        }
        .glass-card {
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(10px);
            border-radius: 25px;
            padding: 40px;
            border: 1px solid rgba(255, 255, 255, 0.1);
            box-shadow: 0 20px 50px rgba(0,0,0,0.4);
            width: 100%;
            max-width: 550px;
        }
        .info-table { width: 100%; margin-top: 25px; border-collapse: separate; border-spacing: 0 8px; }
        .info-table th { background: #7d3edb; padding: 12px; border-radius: 10px 0 0 10px; font-size: 0.9rem; }
        .info-table td { background: rgba(255,255,255,0.1); padding: 12px; border-radius: 0 10px 10px 0; }
        .btn-back { border: 1px solid #7d3edb; color: white; text-decoration: none; padding: 10px 20px; border-radius: 10px; display: inline-block; margin-top: 20px; transition: 0.3s; }
        .btn-back:hover { background: #7d3edb; }
    </style>
</head>
<body>

<div class="glass-card text-center">
    <h2 class="fw-bold mb-1">Mesajınız İletildi!</h2>
    <p class="opacity-50 small">5 saniye içinde hakkında sayfasına döneceksiniz.</p>

    <table class="info-table text-start">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nereden = isset($_POST['nereden']) ? implode(", ", $_POST['nereden']) : 'Belirtilmedi';
            
            $fields = [
                "Ad Soyad" => ($_POST['ad'] ?? '') . " " . ($_POST['soyad'] ?? ''),
                "E-posta"  => $_POST['email'] ?? '-',
                "Telefon"  => $_POST['telefon'] ?? '-',
                "Konu"     => $_POST['konu'] ?? '-',
                "Cinsiyet" => $_POST['cinsiyet'] ?? 'Belirtilmedi',
                "Kaynak"   => $nereden,
                "Mesaj"    => $_POST['mesaj'] ?? '-'
            ];

            foreach ($fields as $label => $val) {
                echo "<tr><th>$label</th><td>" . htmlspecialchars($val) . "</td></tr>";
            }
        }
        ?>
    </table>

    <a href="hakkimda.html" class="btn-back">Hakkımda Sayfasına Dön</a>
</div>

</body>
</html>