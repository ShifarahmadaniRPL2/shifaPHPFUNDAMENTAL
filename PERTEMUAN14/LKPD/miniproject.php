<?php
// Deklarasi variabel kelas dan jumlah siswa
$kelas = "XI RPL 2";
$jumlah_siswa = 36;

// Menampilkan nama kelas
echo "Kelas : " . $kelas . "<br><br>";

// Perulangan FOR untuk menampilkan nomor absen 1-36
for ($absen = 1; $absen <= $jumlah_siswa; $absen++) {
    echo "Absen " . $absen . "<br>";
}
?>
