<?php
//Fungsi Variabel Lokal
echo "<br>"; 
echo "<hr>Fungsi Variabel Lokal<hr>"; 

function contoh ()
{
$nama= "SHIFA RAHMADANI<br>";
echo $nama;
}
contoh ();

//Variabel Global
echo "<br>"; 
echo "<hr>Variabel Global<hr>"; 

$nama= "SHIFA RAHMADANI<br>";
echo $nama;
function contoh2 ($nama)
{
    echo $nama;

}
contoh2 ("SHIFA RAHMADANI");