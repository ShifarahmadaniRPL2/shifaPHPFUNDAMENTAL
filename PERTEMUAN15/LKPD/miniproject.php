<?php
// 1. Variabel Nama Kelas======>
$nama_kelas = "XI RPL 2"; 
// 2. Array Daftar Nama Siswa======>
$siswa = [
    "Ahmadi Muslim",
    "Ahmad Fauzi",
    "Muhammad Rizki",
    "Nurhaliza",
    "Siti Rahma"
];

// 3. Menggunakan fungsi count() untuk menghitung jumlah siswa======>
$jumlah_siswa = count($siswa);

// Menampilkan output
echo "<h2>Sistem Daftar Siswa SMKN 1 Karang Baru</h2>";
echo "<strong>Nama Kelas:</strong> " . $nama_kelas . "<br><br>";

echo "<strong>Daftar Nama Siswa:</strong><br>";
echo "<ol>";
// Perulangan FOR untuk menampilkan daftar siswa=====>
for ($i = 0; $i < $jumlah_siswa; $i++) {
    echo "<li>" . $siswa[$i] . "</li>";
}
echo "</ol>";

echo "<strong>Jumlah Siswa:</strong> " . $jumlah_siswa . " orang";
?>
