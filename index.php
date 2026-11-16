<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Formulir Data Diri</title>
<style>
  * { box-sizing: border-box; }
  body { font-family: Arial, Helvetica, sans-serif; background: #f5f5f5; margin: 0; padding: 40px 16px; }
  .card { max-width: 420px; margin: 0 auto; background: #fff; padding: 24px; border-radius: 6px; box-shadow: 0 1px 6px rgba(0,0,0,.15); }
  h1 { font-size: 22px; margin: 0 0 20px; }
  label.judul { display: block; font-weight: bold; font-size: 14px; margin-bottom: 6px; }
  input[type=text], input[type=date] { width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px; font-size: 13px; margin-bottom: 16px; }
  .hobi label { display: block; font-size: 13px; margin-bottom: 4px; }
  button { margin-top: 12px; background: #007bff; color: #fff; border: 0; padding: 9px 16px; border-radius: 4px; font-size: 14px; cursor: pointer; }
  button:hover { background: #0069d9; }
</style>
</head>
<body>
<div class="card">
  <h1>Formulir Data Diri</h1>
  <form action="hasil.php" method="post">
    <label class="judul" for="nama">Nama Lengkap:</label>
    <input type="text" id="nama" name="nama" required>

    <label class="judul" for="tanggal">Tanggal Lahir:</label>
    <input type="date" id="tanggal" name="tanggal" required>

    <label class="judul">Hobi:</label>
    <div class="hobi">
      <label><input type="checkbox" name="hobi[]" value="Membaca"> Membaca</label>
      <label><input type="checkbox" name="hobi[]" value="Olahraga"> Olahraga</label>
      <label><input type="checkbox" name="hobi[]" value="Musik"> Musik</label>
      <label><input type="checkbox" name="hobi[]" value="Lainnya"> Lainnya</label>
    </div>

    <button type="submit">Kirim</button>
  </form>
</div>
</body>
</html>