<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Sistem Peminjaman Alat Laboratorium RPL</title>
</head>
<body>

    <h2>Form Peminjaman Alat Laboratorium RPL</h2>
    
    <form method="POST" action="">
        <label>Nama Peminjam :</label><br>
        <input type="text" name="nama_peminjam" required><br><br>

        <label>Nama Alat :</label><br>
        <input type="text" name="nama_alat" required><br><br>

        <label>Jumlah Pinjam :</label><br>
        <input type="number" name="jumlah_pinjam" min="1" required><br><br>

        <button type="submit" name="btn_simpan">Simpan Data Peminjaman</button>
    </form>

    <hr>

    <?php
    if (isset($_POST['btn_simpan'])) {
        
        $nama_peminjam  = $_POST['nama_peminjam'];
        $nama_alat      = $_POST['nama_alat'];
        $jumlah_pinjam  = $_POST['jumlah_pinjam'];

        echo "<h3>Data Peminjaman Berhasil Disimpan:</h3>";
        echo "• Nama Peminjam : " . $nama_peminjam . "<br>";
        echo "• Nama Alat &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: " . $nama_alat . "<br>";
        echo "• Jumlah Pinjam &nbsp;: " . $jumlah_pinjam . " unit<br>";
    }
    ?>

</body>
</html>
