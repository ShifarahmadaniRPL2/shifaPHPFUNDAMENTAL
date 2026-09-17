<?php
//WHILE ==================>
echo "<br>while <hr>";
$angka = 1;

while($angka <= 5)
{
    echo $angka."<br>";
    $angka++;
}

//do while =======================>
echo "<br>do while <hr>";
$angka = 1;
do {
    echo $angka . "<br>";
    $angka++;
} while ($angka <= 5);

//for =======================>
echo "<br>for <hr>";
$for = "XIRPL2-shifa rahmadani -";
for ($i=1; $i<=10; $i++)
{
    echo $for . $i."<br>";
}

//for menurun =======================>
echo "<br>for menurun<hr>";
$for = "Shifa Rahmadani - XIRPL2-";
for ($i=10; $i>=1; $i--)
{
    echo $for . $i."<br>";
}

///foreach ========================>
echo "<br>foreach<hr>";
$buah = array("Apel", "Jeruk", "Mangga", "Pisang");
foreach ($buah as $item) {
    echo $item . "<br>";
}

//foreach index tertentu ========================>
echo "<br>foreach index tertentu<hr>";
$buah = array("Apel", "Jeruk", "Mangga", "Pisang");
foreach ($buah as $index => $item) {
    if ($index == 3)
        echo $item . "<br>";
}

//atau foreach index tertentu ========================>
echo "<br>foreach index tertentu<hr>";
$buah = array("Apel", "Jeruk", "Mangga", "Pisang");
echo $buah[3] . "<br>";

//membuat kolom bintang ========================>
echo "<br>membuat kolom bintang<hr>";
for($baris=1; $baris<=3; $baris++)
{
    for($kolom=1; $kolom<=4; $kolom++)
    {
        echo "_* ";
    }

    echo "<br>";
}
//membuat pola bintang========================>
echo "<br>membuat pola bintang<hr>";
for($i=1; $i<=5; $i++)
{
    for($j=1; $j<=$i; $j++)
    {
        echo "* ";
    }

    echo "<br>";
}
//perintah break========================>
echo "<br>perintah break<hr>";
for($i=1; $i<=10; $i++)
{
    if($i==6)
    {
        break;
    }
    echo $i."<br>";
}
//perintah continue========================>
echo "<br>perintah continue<hr>";
for($i=1; $i<=10; $i++)
{
    if($i==5)
    {
        continue;
    }

    echo $i."<br>";
}

?>