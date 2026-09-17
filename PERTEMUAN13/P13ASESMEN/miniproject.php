<?php
// ==========================================
// 1. JUDUL PROGRAM
// ==========================================
echo "=== SISTEM LOGIN SEDERHANA ===<br>";
echo "------------------------------<br>";

// ==========================================
// 2. DATA INPUT (Minimal 5 Variabel)
// ==========================================
$username_simpan = "budi123";
$password_simpan = "rahasia";
$role_user       = "Siswa";

$username_input  = "budi123";
$password_input  = "rahasia";

echo "Username Input: " . $username_input . "<br>";
echo "Password Input: " . $password_input . "<br>";
echo "------------------------------<br>";

// ==========================================
// 3 & 4. PROSES PENCABANGAN & OUTPUT KEPUTUSAN
// (Menggunakan IF ELSE, IF ELSEIF ELSE, Operator Perbandingan)
// ==========================================

// Kondisi 1: Cek jika input masih kosong
if ($username_input == "" || $password_input == "") {
    echo "Hasil Login: Gagal!<br>";
    echo "Keterangan: Username atau password tidak boleh kosong.";
} 
// Kondisi 2: Cek jika username dan password cocok dengan yang disimpan
elseif ($username_input == $username_simpan && $password_input == $password_simpan) {
    echo "Hasil Login: Berhasil!<br>";
    echo "Keterangan: Selamat datang kembali, Anda login sebagai " . $role_user . ".";
} 
// Kondisi 3: Jika data tidak cocok
else {
    echo "Hasil Login: Gagal!<br>";
    echo "Keterangan: Username atau password salah. Silakan coba lagi.";
}
?>
