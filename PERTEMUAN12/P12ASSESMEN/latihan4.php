<?php
// ==========================================
// 1. DEKLARASI VARIABEL (Sesuai Ketentuan)
// ==========================================

// 5 Variabel String
$judulProgram   = "SISTEM PEMINJAMAN ALAT - LAB RPL";
$namaPeminjam   = "Shifa Rahmadani";
$kelas          = "XI RPL 2";
$namaAlat       = "Proyektor Epson X500";
$deskripsi      = "Program ini digunakan untuk mencatat data transaksi peminjaman barang inventaris di dalam laboratorium jurusan Rekayasa Perangkat Lunak.";

// 2 Variabel Integer
$jumlahPinjam   = 2;
$durasiHari     = 3;

// 1 Variabel Float
$dendaPerHari   = 5000.00;

// 1 Variabel Boolean
$isSudahKembali = false;


// ==========================================
// 2. MENAMPILKAN DATA (Menggunakan Echo)
// ==========================================

// Menampilkan Judul Program (Syarat 1)
echo "<h1>" . $judulProgram . "</h1>";
echo "<hr>";

// Menampilkan Deskripsi Singkat Program (Syarat 4)
echo "<h3>Deskripsi Program:</h3>";
echo "<p>" . $deskripsi . "</p>";
echo "<hr>";

// Menampilkan Seluruh Data Variabel (Syarat 2)
echo "<h3>Detail Data Peminjaman:</h3>";
echo "Nama Peminjam: " . $namaPeminjam . "<br>";
echo "Kelas: " . $kelas . "<br>";
echo "Alat yang Dipinjam: " . $namaAlat . "<br>";
echo "Jumlah Alat: " . $jumlahPinjam . " unit<br>";
echo "Durasi Peminjaman: " . $durasiHari . " hari<br>";
echo "Tarif Denda Keterlambatan: Rp " . number_format($dendaPerHari, 2, ',', '.') . " / hari<br>";

// Menampilkan Informasi Status Menggunakan Boolean (Syarat 3)
echo "Status Pengembalian Alat: ";
if ($isSudahKembali) {
    echo "<b>Sudah Dikembalikan</b>";
} else {
    echo "<b>Masih Dipinjam (Belum Kembali)</b>";
}

echo"<br><br> <p>Shifa Rahmadani🤍</p>";
?>
