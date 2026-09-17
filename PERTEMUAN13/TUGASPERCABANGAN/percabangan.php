<?php
define("PHI", 3.14);

// 1. Input komponen tabung
$jari_jari = 5;
$tinggi = 10;

// 2. Hitung luas permukaan tabung
$luas = 2 * PHI * $jari_jari * ($jari_jari + $tinggi);

// 3. Tentukan kategori ukuran
if ($luas < 100) {
    $kategori = "Kecil";
} elseif ($luas <= 500) {
    $kategori = "Sedang";
} else {
    $kategori = "Besar";
}

// 4. Tampilkan hasil dan Penjelasan Rumus
echo "=== DATA INPUT ===<br>";
echo "Jari-jari (r) = " . $jari_jari . " cm<br>";
echo "Tinggi (t) = " . $tinggi . " cm<br>";
echo "Konstanta PHI (π) = " . PHI . "<br><br>";

echo "=== PENJELASAN RUMUS ===<br>";
echo "Rumus Luas Permukaan Tabung:<br>";
echo "<b>Luas = 2 × π × r × (r + t)</b><br><br>";

echo "Langkah Perhitungan:<br>";
echo "Luas = 2 × " . PHI . " × " . $jari_jari . " × (" . $jari_jari . " + " . $tinggi . ")<br>";
echo "Luas = 2 × " . PHI . " × " . $jari_jari . " × " . ($jari_jari + $tinggi) . "<br>";
echo "Luas = " . (2 * PHI * $jari_jari) . " × " . ($jari_jari + $tinggi) . "<br>";
echo "<b>Luas Tabung = " . $luas . " cm²</b><br><br>";

echo "=== KATEGORI UKURAN ===<br>";
echo "Kategori: <b>" . $kategori . "</b><br>";
echo "Alasan: Karena luas tabung (" . $luas . ") berada di rentang 100 sampai 500.";
?>
