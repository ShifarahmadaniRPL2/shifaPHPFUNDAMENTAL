<form action="" method="POST">
    <label for="nama">Nama Siswa :</label>
    <input type="text" name="nama">
    <br>
    <label for="kelas">kelas :</label>
    <input type="text" name="kelas">
    <br>
    <label for="usia">usia :</label>
    <input type="text" name="usia">
    <br>
    <label for="username">username :</label>
    <input type="text" name="username">
    <br>
    <label for="password">password :</label>
    <input type="text" name="password">
    <br>
    <label for="date">tanggal :</label>
    <input type="date" name="tanggal">
    <br>
    <label for="time">jam masuk :</label>
    <input type="time" name="jam masuk">
    <br>
    <button type="sumbit">kirim</button>
</form>

<?php
echo $_POST['nama'];
?>