<?php
$nama = "Ahmad Fauzi";
$kelas = "XI RPL 2";
$nilai = 85;

// Penentuan Predikat dengan IF ELSEIF ELSE
if ($nilai >= 90) {
    $predikat = "A";
} elseif ($nilai >= 80) {
    $predikat = "B";
} elseif ($nilai >= 70) {
    $predikat = "C";
} else {
    $predikat = "D"; 
}

echo "Nama Siswa: " . $nama . "<br>";
echo "Kelas: " . $kelas . "<br>";
echo "Nilai: " . $nilai . "<br>";
echo "Predikat: " . $predikat . "<br>";
?>
