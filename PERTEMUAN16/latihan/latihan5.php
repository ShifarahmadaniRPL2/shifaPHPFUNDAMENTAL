<?php
function hitungNilai($nilai1, $nilai2)
{
    return "hasil dari " .$nilai1." - ".$nilai2.
    "=".($nilai1 - $nilai2);
}

echo hitungNilai(10, 90)."<br>";
echo hitungNilai(20, 80)."<br>";
echo hitungNilai(30, 70)."<br>";
echo hitungNilai(40, 60)."<br>";
echo hitungNilai(50, 50)."<br>";
