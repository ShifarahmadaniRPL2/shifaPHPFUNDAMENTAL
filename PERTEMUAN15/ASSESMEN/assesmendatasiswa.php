<?php
// Soal 3: Membuat file datasiswa.php dan menyimpan data menggunakan Indexed Array
$data_siswa = [
    "Ahmadi Muslim",
    "Ahmad Fauzi",
    "Muhammad Rizki",
    "Nurhaliza",
    "Siti Rahma"
];

// Menampilkan seluruh data menggunakan perulangan foreach
echo "<h3>Daftar Nilai / Data Siswa:</h3>";
echo "<ul>";
foreach ($data_siswa as $siswa) {
    echo "<li>" . $siswa . "</li>";
}
echo "</ul>";
?>
