<?php 
// Deklarasi Konstanta
define("PHI", 3.14); 

// 1. Input komponen tabung
$jari_jari = 45; 
$tinggi = 12; 

// 2. Hitung luas permukaan tabung
$luas = 2 * PHI * $jari_jari * ($jari_jari + $tinggi); 

// 3. Pengondisian kategori
if ($luas < 100) { 
    $kategori = "Kecil"; 
} else if ($luas >= 100 && $luas <= 1000) { 
    $kategori = "Sedang"; 
} else { 
    $kategori = "Besar"; 
} 

// 4. Tampilkan hasil
echo "Jari-jari Tabung = " . $jari_jari . " cm<br>";
echo "Tinggi Tabung = " . $tinggi . " cm<br>";
echo "Luas Tabung = " . $luas . "<br>"; 
echo "Kategori Ukuran = " . $kategori . "<br>"; 
echo "Hasilnya didapat menggunakan rumus: 2 * PHI * " . $jari_jari . " * (" . $jari_jari . " + " . $tinggi . ") = " . $luas; 
?>
