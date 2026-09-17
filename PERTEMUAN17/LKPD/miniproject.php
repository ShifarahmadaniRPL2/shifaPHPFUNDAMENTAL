<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Biodata Siswa XI RPL 2</title>
</head>
<body>

    <h2>Form Biodata Siswa XI RPL 2</h2>
    
    <form method="POST" action="">
        <label>Nama Siswa:</label><br>
        <input type="text" name="nama" required><br><br>

        <label>Kelas:</label><br>
        <input type="text" name="kelas" value="XI" required><br><br>

        <label>Jurusan:</label><br>
        <input type="text" name="jurusan" value="RPL 2" readonly><br><br>

        <button type="submit" name="submit">Tampilkan Biodata</button>
    </form>

    <hr>

    <?php
    if (isset($_POST['submit'])) {
        
        // Mengambil data menggunakan $_POST
        $nama = $_POST['nama'];
        $kelas = $_POST['kelas'];
        $jurusan = $_POST['jurusan'];

        echo "<h3>Hasil Biodata Siswa:</h3>";
        echo "✅ Nama Siswa: " . $nama . "<br>";
        echo "✅ Kelas: " . $kelas . "<br>";
        echo "✅ Jurusan: " . $jurusan . "<br>";
    }
    ?>

</body>
</html>
