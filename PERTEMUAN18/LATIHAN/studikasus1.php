<form method="post">
   Nama : <input type="text" name="nama"><br>
   Alat : <input type="text" name="alat"><br>
   Jumlah : <input type="number" name="jumlah"><br>
   <input type="submit" name="simpan" value="simpan">
</form>

<?php
if (isset($_POST['simpan'])) {
    if (empty($_POST['nama']) || empty($_POST['alat']) || empty($_POST['jumlah']))
        echo "form gagal disimpan";
}else{
    echo "form berhasil disimpan";
}

if (empty($_POST['nama'])) {
    echo "<br> form Nama tidak boleh kosong";
}
if (empty($_POST['alat'])) {
    echo "<br> form alat tidak boleh kosong";
}
if (empty($_POST['jumlah'])) {
    echo "<br> form jumlah tidak boleh kosong";
}
