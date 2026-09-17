<?php

// STUDIKASUS 1 =========================>
echo "<br>";
echo "<hr>STUDI KASUS 1 <hr>";
$alat = [
    "Laptop",
    "Printer",
    "Scanner",
    "Router",
    "Proyektor"
];

for($i=0; $i<count($alat); $i++)
{
    echo $alat[$i]."<br>";
}

// STUDIKASUS 1 dengan FOREACH=========================>
echo "<br>";
echo "<hr>STUDI KASUS 1 dengan FOREACH <hr>";
$alat = [
    "Laptop",
    "Printer",
    "Scanner",
    "Router",
    "Proyektor"
];

foreach ($alat as $item) {
    echo $item . "<br>";
}
// STUDIKASUS 2 DATA SISWA=========================>
echo "<br>";
echo "<hr>STUDIKASUS 2 DATA SISWA<hr>";
$siswa = [
    "Ahmadi Muslim",
    "Ahmad Fauzi",
    "Nurhaliza",
    "Muhammad Rizki"
];

echo "Jumlah Siswa : ".count($siswa);
echo "<br>";

// STUDIKASUS 3 BIODATA SISWA=========================>
echo "<br>";
echo "<hr>STUDIKASUS 2 BIODATA SISWA<hr>";
$biodata = [

"nama" => "Ahmadi Muslim",
"kelas" => "XI RPL 2",
"sekolah" => "SMKN 1 Karang Baru",
"jurusan" => "RPL"

];

echo $biodata["nama"];
echo "<br>";
echo $biodata["kelas"];



?>
