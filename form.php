<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="5;url=hakkimda.html">
    <title>Mesaj Alındı - Salchuk Jafarlı</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/form.css">
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