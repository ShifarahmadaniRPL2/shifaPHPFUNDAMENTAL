<?php
// Soal 5: Membuat program biodata siswa menggunakan Associative Array
$biodata_siswa = [
    "Nama"    => "Ahmadi Muslim",
    "Kelas"   => "XI RPL 2",
    "Sekolah" => "SMKN 1 Karang Baru",
    "Jurusan" => "RPL"
];

// Menampilkan data biodata ke layar
echo "<h3>Biodata Siswa</h3>";
echo "<table border='1' cellpadding='5' cellspacing='0'>";
foreach ($biodata_siswa as $key => $value) {
    echo "<tr>";
    echo "<td><strong>" . $key . "</strong></td>";
    echo "<td>: " . $value . "</td>";
    echo "</tr>";
}
echo "</table>";
?>
