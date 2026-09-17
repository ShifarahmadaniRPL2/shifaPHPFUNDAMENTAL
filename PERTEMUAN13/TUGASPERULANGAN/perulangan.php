<?php
// Program: Cetak Nama Berulang (versi seperti "smash" - tidak pakai STDIN)

// Deklarasi / inisialisasi
$nama = "SHIFA RAHMADANI"; // ubah sesuai nama yang diinginkan

// Simpan kondisi awal
$awalNama = $nama;

// Tampilkan kondisi awal
echo "Nama yang akan dicetak: " . $awalNama . "<br>";

// Perulangan 1 sampai 10
for ($i = 1; $i <= 10; $i++) {
    echo $nama . " ke " . $i . "<br>";
}

// Hitung jumlah perulangan yang sebenarnya (karena $i sekarang 11)
$total = $i - 1;

// Pesan setelah selesai
echo "Selamat kamu selesai karena sudah mencetak berulang sebanyak " . $total . " kali<br>";
?>
