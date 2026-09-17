<form method="POST">

    Nama :
    <input type="text" name="nama">

    <br><br>

    Kelas :
    <input type="text" name="kelas">

    <br><br>

    <button type="submit">
        Simpan
    </button>

</form>
<?php

if (isset($_POST['nama'])) {
    echo $_POST['nama'];
    echo "<br>";
    echo $_POST['kelas'];
}

?>