<?php
$stok = 10;
if ($stok > 0)
{
    echo "Stok Tersedia <br>";
} else
{
    echo "Stok Habis <br>";
}

$username = "admin";
$password = "1234";
if ($username == "admin" && $password == "1234")
{
    echo "Login Berhasil <br>";
} else
{
    echo "Login Gagal <br>";
}

$nilai = 95;
if ($nilai >= 90)
{
    echo "Sangat Baik <br>";
}
elseif ($nilai >= 80)
{
    echo "Baik <br>";
}
elseif ($nilai >= 70)
{
    echo "Cukup <br>";
}
else
{
    echo "Perlu Bimbingan <br>";
}
?>
