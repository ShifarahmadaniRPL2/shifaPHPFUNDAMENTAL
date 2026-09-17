<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Pendataan Peserta Pelatihan</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; background-color: #f4f7f6; }
        .container { max-width: 500px; background: white; padding: 20px; border-radius: 8px; box-shadow: 0 4px 8px rgba(0,0,0,0.1); }
        h2 { color: #333; text-align: center; }
        .form-group { margin-bottom: 15px; }
        label { display: block; margin-bottom: 5px; font-weight: bold; }
        input, select { width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box; }
        button { width: 100%; padding: 10px; background-color: #2ecc71; color: white; border: none; border-radius: 4px; font-size: 16px; cursor: pointer; }
        button:hover { background-color: #27ae60; }
        .result-box { margin-top: 20px; padding: 15px; background-color: #e8f8f5; border-left: 5px solid #2ecc71; border-radius: 4px; }
        .status { font-weight: bold; color: #27ae60; }
    </style>
</head>
<body>

<div class="container">
    <h2>Sistem Pendataan Peserta Pelatihan</h2>
    
    <form action="" method="POST">
        <div class="form-group">
            <label for="nama">Nama Lengkap:</label>
            <input type="text" id="nama" name="nama" required placeholder="Masukkan nama lengkap">
        </div>

        <div class="form-group">
            <label for="email">Alamat Email:</label>
            <input type="email" id="email" name="email" required placeholder="contoh@email.com">
        </div>

        <div class="form-group">
            <label for="pelatihan">Pilih Kelas Pelatihan:</label>
            <select id="pelatihan" name="pelatihan" required>
                <option value="">-- Pilih Kelas --</option>
                <option value="Web Development">Web Development</option>
                <option value="Data Science">Data Science</option>
                <option value="Digital Marketing">Digital Marketing</option>
            </select>
        </div>

        <div class="form-group">
            <label for="institusi">Asal Sekolah / Instansi:</label>
            <input type="text" id="institusi" name="institusi" required placeholder="Masukkan nama instansi">
        </div>

        <button type="submit" name="submit">Daftarkan Peserta</button>
    </form>

    <?php
    if (isset($_POST['submit'])) {
        // Mengambil data dari form
        $nama = htmlspecialchars($_POST['nama']);
        $email = htmlspecialchars($_POST['email']);
        $pelatihan = htmlspecialchars($_POST['pelatihan']);
        $institusi = htmlspecialchars($_POST['institusi']);
        
        echo "<div class='result-box'>";
        echo "<h3>Hasil Pendataan Data Peserta:</h3>";
        echo "<p><strong>Nama:</strong> " . $nama . "</p>";
        echo "<p><strong>Email:</strong> " . $email . "</p>";
        echo "<p><strong>Kelas Pelatihan:</strong> " . $pelatihan . "</p>";
        echo "<p><strong>Asal Instansi:</strong> " . $institusi . "</p>";
        
        echo "<hr>";
        echo "<p class='status'>✔ Keterangan: Data peserta atas nama <strong>$nama</strong> berhasil disimpan ke sistem untuk kelas <strong>$pelatihan</strong>.</p>";
        echo "</div>";
    }
    ?>
</div>

</body>
</html>
