<?php
// Function pertama: Mengolah data sekolah dan jurusan (Menggunakan Parameter & Return)
function dapatkanDetailSekolah($sekolah, $jurusan)
{
    return "Sekolah: " . $sekolah . "<br>Jurusan: " . $jurusan;
}

//  Function kedua: Menampilkan output biodata (Menggunakan Parameter)
function tampilkanBiodata($nama, $kelas)
{
    echo "=== BIODATA SISWA XI RPL 2 ===<br>";
    echo "Nama Siswa: " . $nama . "<br>";
    echo "Kelas: " . $kelas . "<br>";

    // Memanggil function pertama di dalam function kedua
    echo dapatkanDetailSekolah("SMKN 1 Karang Baru", "Rekayasa Perangkat Lunak (RPL)");
    echo "<br>==============================";
}

//  Memanggil function untuk menampilkan 1 Output Biodata
tampilkanBiodata("SHIFA RAHMADANI", "XI RPL 2");
