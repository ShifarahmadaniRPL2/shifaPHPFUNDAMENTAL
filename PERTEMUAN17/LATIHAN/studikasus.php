<form method="POST">
Nama Peminjam❤ :
<input type="text" name="nama">
<br><br>
Nama Alat🖤:
<input type="text" name="alat">
<br><br>
Jumlah 💢:
<input type="number" name="jumlah">
<br><br>
<button type="submit">
Simpan
</button>
</form>
<?php

if(isset($_POST['nama']))
{
echo "Nama : ".$_POST['nama'];
echo "<br>";
echo "Alat : ".$_POST['alat'];
echo "<br>";
echo "Jumlah : ".$_POST['jumlah'];
}

?>
