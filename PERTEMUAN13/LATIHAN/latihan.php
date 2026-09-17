<?php
$nilai = 30;

if ($nilai >=75) {
    echo "Selamat, Anda Lulus! karena nilai anda $nilai";
}else {
    echo "Maaf, Anda Tidak Lulus! karena nilai anda $nilai";
}

$usia=16;
if ($usia >= 17) {
    echo "<br>Selamat, Anda sudah bisa ikut PEMILU! karena usia anda $usia";
}else {
    echo "<br>Maaf, Anda belum bisa ikut PEMILU! karena usia anda $usia";
}

$hasil = 80;
if ($hasil >= 90) {
    echo "<br>Nilai A";
} elseif ($hasil >= 80) {
    echo "<br>Nilai B";
} elseif ($hasil >= 70) {
    echo "<br>Nilai C";
} elseif ($hasil >= 60) {
    echo "<br>Nilai D";
}
else {
    echo "<br>Nilai E";
}
