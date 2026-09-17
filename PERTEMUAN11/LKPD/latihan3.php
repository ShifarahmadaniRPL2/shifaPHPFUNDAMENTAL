<?php
// Judul aplikasi
echo "<h1>Sistem Peminjaman Alat Laboratorium RPL</h1>";

// Simulasi data status alat (misal: Obeng, Solder, atau Tang)
$nama_alat = "Solder Listrik";
$status_alat = "Tersedia"; 

echo "<p>Anda sedang membuka website peminjaman alat...</p>";
echo "<p>Alat yang dipilih: <b>$nama_alat</b></p>";

// Logika pemrosesan peminjaman berdasarkan algoritma sebelumnya
if ($status_alat == "Tersedia") {
    echo "<p style='color: green;'><b>Peminjaman Sukses!</b> Alat berhasil dipesan.</p>";
} else {
    echo "<p style='color: red;'><b>Peminjaman Gagal!</b> Maaf, alat sedang digunakan.</p>";
}
?>
