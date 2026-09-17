<?php
echo "<br>"; 
echo "<hr>Function Dengan Return<hr>"; 
function jumlah ()
{
    return 10 + 5;
}
echo jumlah();
//TINGKAT LANJUT
echo "<br>"; 
echo "<hr>Function Dengan Return TINGGKAT LANJUT<hr>"; 
function penjumlahan ($angka1, $angka2)
{
    return "hasil dari ".$angka1." + ".$angka2."=".($angka1 + $angka2); 
}
echo penjumlahan(10, 5)."<br>";
echo penjumlahan(2, 1)."<br>";
echo penjumlahan(3, 2)."<br>";
echo penjumlahan(4, 3)."<br>";
echo penjumlahan(5, 4)."<br>";