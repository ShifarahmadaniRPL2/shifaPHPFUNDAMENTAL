<?php

$stok = 5;

if($stok > 0)
{
    echo "Stok Tersedia"."<br>";
}
else
{
    echo "Stok Habis"."<br>";
}

$nilai = 88;

if($nilai >= 90)
{
    echo "Sangat Baik";
}
elseif($nilai >= 80)
{
    echo "Baik";
}
elseif($nilai >= 70)
{
    echo "Cukup";
}
else
{
    echo "Perlu Bimbingan";
}

?>