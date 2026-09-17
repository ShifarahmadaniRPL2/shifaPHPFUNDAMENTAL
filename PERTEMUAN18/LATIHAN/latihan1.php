<form action="" method="post">
    <input type="text" name="nama" placeholder="Nama">
    <input type="submit" name="simpan" value="simpan">
</form>

<?php
if (isset($_POST['simpan'])) 
{
    echo"form berhasil disimpan";
}