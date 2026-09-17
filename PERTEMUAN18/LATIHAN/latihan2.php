<form action="" method="post">
    <input type="text" name="nama" placeholder="Nama">
    <input type="submit" name="simpan" value="simpan">
</form>

<?php
if(empty($_POST['nama'])) {
    echo "form gagal di simpan";
}else{
    echo "form berhasil disimpan";
}