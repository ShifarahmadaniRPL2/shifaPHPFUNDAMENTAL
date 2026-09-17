<?php
// ARRAY UMUM=================>
echo "array tanpa perulangan for<hr>";
$nama = [
    "Ahmadi Muslim",
    "Ahmad Fauzi",
    "Nurhaliza",
    "Siti Rahma"
];
echo $nama[0]."<br>";
print_r($nama);

// ARRAY DENGAN FOR ======================>
echo "<br><br>array dengan perulangan for<hr>";
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
var_dump($siswa);

// MENAMBAHKAN ARRAY ======================>
echo "<br><br>Menambahkan isi array<hr>";
$siswa = [
    "Ahmadi Muslim",
    "Ahmad Fauzi",
];
$siswa[0] = "Muhammad Rizki";
print_r ($siswa);

// MENGUBAH ARRAY ======================>
echo "<br><br>Menambahkan isi array<hr>";
$siswa = [
    "Ahmadi Muslim",
    "Ahmad Fauzi",
];
$siswa[2] = "Nurhalizah";
print_r ($siswa);

// MENGHITUNG ARRAY ======================>
echo "<br><br>Menambahkan isi array<hr>";
$siswa = [
    "Shifa Rahmadani",
    "Adinda Aprilia",
    "Nurul aini",
    "Nur Haliza",
    "tasya",
    "gela",
];
echo count($siswa)."<br>";
var_dump($siswa);

// ARRAY ASSOSIATIF ======================>
echo "<br><br>Array assosiatif<hr>";
$siswa = [
    "nama" => "Shifa Rahmadani",
    "kelas" => "XI RPL 2",
    "sekolah" => "SMKN 1 Karang Baru"
];

echo $siswa["nama"]."<br>";
echo $siswa["kelas"]."<br>";
echo $siswa["sekolah"]."<br>";

// MULTIDIMENSIAL ARRAY  ======================>
echo "<br><br>Array assosiatif<hr>";
$siswa = [
    [
        "nama" => "Ahmadi Muslim",
        "nilai" => 90
    ],
    [
        "nama" => "SHifa Rahmadani",
        "nilai" => 95
    ],
    [
        "nama" => "Ahmad Fauzi",
        "nilai" => 85
    ]
];

echo $siswa[0]["nama"]."<br>";
echo $siswa[0]["nilai"]."<br>";
echo $siswa[1]["nama"]."<br>";
echo $siswa[1]["nilai"]."<br>";
echo $siswa[2]["nama"]."<br>";
echo $siswa[2]["nilai"]."<br>";
?>
