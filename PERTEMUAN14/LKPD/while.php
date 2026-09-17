<?php
// mengenal perulangan WHILE==========>
echo "<br>";
echo "<hr>mengenal perulangan WHILE<hr>";
$angka = 1;

while($angka <= 5)
{
    echo $angka."<br>";
    $angka++;
}

// perulangan DO WHILE===========>
echo "<br>";
echo "<hr>perulangan DO WHILE<hr>";
$angka = 1;

do
{
    echo $angka."<br>";
    $angka++;
}
while($angka <= 5);

// Mengenal Perulangan FOR===========>
echo "<br>";
echo "<hr>Mengenal Perulangan FOR<hr>";
for($i=1; $i<=10; $i++)
{
    echo "Alat Praktik Ke-".$i."<br>";
}

// Perulangan Menurun===========>
echo "<br>";
echo "<hr>Perulangan Menurun<hr>";
for($i=10; $i>=1; $i--)
{
    echo $i."<br>";
}

// Nested Loop (Perulangan Bersarang)===========>
echo "<br>";
echo "<hr>Nested Loop (Perulangan Bersarang)<hr>";
for($baris=1; $baris<=3; $baris++)
{
    for($kolom=1; $kolom<=4; $kolom++)
    {
        echo "* ";
    }

    echo "<br>";
}

// Perintah BREAK===========>
echo "<br>";
echo "<hr>Perintah BREAK<hr>";
for($i=1; $i<=10; $i++)
{
    if($i==6)
    {
        break;
    }

    echo $i."<br>";
}

// Perintah CONTINUE===========>
echo "<br>";
echo "<hr>Perintah CONTINUE<hr>";
for($i=1; $i<=10; $i++)
{
    if($i==5)
    {
        continue;
    }

    echo $i."<br>";
}

?>


