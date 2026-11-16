<?php
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: index.php');
    exit;
}

$bulan = [1 => 'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni',
          'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];

$nama    = htmlspecialchars(trim($_POST['nama'] ?? ''));
$tanggal = $_POST['tanggal'] ?? '';
$hobi    = $_POST['hobi'] ?? [];

// 2006-01-07 -> 7 Januari 2006
$tanggalTampil = '-';
if ($tanggal !== '') {
    $d = DateTime::createFromFormat('Y-m-d', $tanggal);
    if ($d) {
        $tanggalTampil = $d->format('j') . ' ' . $bulan[(int)$d->format('n')] . ' ' . $d->format('Y');
    }
}

// Membaca, Musik, Lainnya
$hobiTampil = $hobi ? htmlspecialchars(implode(', ', $hobi)) : '-';
?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Tampilan Data Anda</title>
<style>
  * { box-sizing: border-box; }
  body { font-family: Arial, Helvetica, sans-serif; background: #f5f5f5; margin: 0; padding: 40px 16px; }
  .card { max-width: 580px; margin: 0 auto; background: #fff; padding: 24px; border-radius: 10px; box-shadow: 0 2px 8px rgba(0,0,0,.2); }
  h1 { font-size: 28px; margin: 0 0 20px; padding-bottom: 16px; border-bottom: 2px solid #eee; }
  table { border-collapse: collapse; margin-bottom: 24px; }
  td { padding: 12px 8px 12px 0; vertical-align: top; font-size: 18px; }
  td.label { font-weight: bold; width: 160px; }
  a { color: #007bff; text-decoration: none; font-size: 16px; }
  a:hover { text-decoration: underline; }
</style>
</head>
<body>
<div class="card">
  <h1>Tampilan Data Anda</h1>
  <table>
    <tr><td class="label">Nama Lengkap:</td><td><?= $nama ?></td></tr>
    <tr><td class="label">Tanggal Lahir:</td><td><?= $tanggalTampil ?></td></tr>
    <tr><td class="label">Hobi:</td><td><?= $hobiTampil ?></td></tr>
  </table>
  <a href="index.php">&laquo; Kembali ke Form</a>
</div>
</body>
</html>