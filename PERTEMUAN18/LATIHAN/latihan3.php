<form method="POST">
    Nama :
    <input type="text" name="nama">
    <br><br>
    Kelas :
    <input type="text" name="kelas">
    <br><br>
    <button type="submit" name="simpan">
        Simpan
    </button>
</form>


<?php
if (isset($_POST['simpan'])) {
    if (empty($_POST['nama']) || empty($_POST['kelas'])) {
        echo "form gagal disimpan" . "<br>";
    } else {
        echo "form berhasil disimpan";
    }
}

if (empty($_POST['nama'])) {
    echo "<br> form nama tidak boleh kosong";
}

if (empty($_POST['kelas'])) {
    echo "<br> form kelas tidak boleh kosong";
}
