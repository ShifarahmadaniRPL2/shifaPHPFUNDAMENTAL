<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Sistem Data Siswa - SMKN 1 Karang Baru</title>
</head>

<body>

    <h2>Form Input Data Siswa</h2>

    <form method="POST" action="">
        <label>Nama:</label><br>
        <input type="text" name="nama" required><br><br>

        <label>Kelas:</label><br>
        <input type="text" name="kelas" required><br><br>

        <label>Jurusan:</label><br>
        <input type="text" name="jurusan" required><br><br>

        <button type="submit">Tampilkan Data</button>
    </form>

    <hr>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $nama = $_POST['nama'];
        $kelas = $_POST['kelas'];
        $jurusan = $_POST['jurusan'];

        echo "<h3>Hasil Input Data:</h3>";
        echo "Nama: " . $nama . "<br>";
        echo "Kelas: " . $kelas . "<br>";
        echo "Jurusan: " . $jurusan . "<br>";
    }
    ?>

</body>

</html>