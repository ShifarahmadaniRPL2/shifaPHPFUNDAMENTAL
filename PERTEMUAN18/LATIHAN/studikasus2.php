<form method="post">
    Nama : <input type="text" name="nama"><br>
    Alat : <input type="text" name="alat"><br>
    <input type="submit" name="simpan" value="simpan">
</form>
<?php
if (isset($_POST['simmpan'])) {
    if (empty($_POST['nama'])) {
        echo "Nama wajib di isi";
    } elseif (empty($_POST['kelas'])) {
        echo "Kelas wajib diisi";
    } else {
        echo "Data berhasil disimpan";
    }
}
