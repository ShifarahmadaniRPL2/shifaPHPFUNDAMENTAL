<?php
// Membuat Indexed Array=======>
echo "<br>";
echo "<hr>Membuat Indexed Array<hr>";
$siswa = [
    "Ahmadi Muslim",
    "Ahmad Fauzi",
    "Muhammad Rizki"
];
print_r($siswa);
echo "<br>";

// Mengakses Data Array=======>
echo "<br>";
echo "<hr>Mengakses Data Array<hr>";
$siswa = [
    "Ahmadi Muslim",
    "Ahmad Fauzi",
    "Muhammad Rizki"
];

echo $siswa[0]."<br>";

//Menampilkan Seluruh Data Array=======>
echo "<br>";
echo "<hr>Menampilkan Seluruh Data Array<hr>";
$siswa = [
    "Ahmadi Muslim",
    "Ahmad Fauzi",
    "Nurhaliza",
    "Siti Rahma"
];

for($i=0; $i<count($siswa); $i++)
{
    echo $siswa[$i]."<br>";
}

// Menambahkan Data Array=======>
echo "<br>";
echo "<hr>Menambahkan Data Array<hr>";
$siswa = [
    "Ahmadi Muslim",
    "Ahmad Fauzi"
];

$siswa[] = "Muhammad Rizki";

print_r($siswa);
echo "<br>";

// Mengubah Isi Array=======>
echo "<br>";
echo "<hr>Mengubah Isi Array<hr>";
$siswa = [
    "Ahmadi Muslim",
    "Ahmad Fauzi"
];

$siswa[1] = "Nurhaliza";

print_r($siswa);
echo "<br>";

// Menggunakan Fungsi count()=======>
echo "<br>";
echo "<hr>Menggunakan Fungsi count()<hr>";
$alat = [
    "Laptop",
    "Printer",
    "Scanner",
    "Router",
    "Proyektor"
];

echo count($alat);
echo "<br>";

//Associative Array=======>
echo "<br>";
echo "<hr>Associative Array<hr>";
$siswa = [

"nama" => "Ahmadi Muslim",
"kelas" => "XI RPL 2",
"sekolah" => "SMKN 1 Karang Baru"

];

echo $siswa["nama"];
echo "<br>";

//Multidimensional Array=======>
echo "<br>";
echo "<hr>Multidimensional Array<hr>";
?>

