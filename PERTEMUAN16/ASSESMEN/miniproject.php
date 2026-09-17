<?php
// ====== 1. DEKLARASI 3 FUNCTION ======
function cetakInfoProgram($judul, $info)
{
    echo "=== " . $judul . " ===<br>";
    echo "Keterangan: " . $info . "<br><br>";
}

function tampilDataUtama($id, $nama, $status)
{
    echo "--- DATA UTAMA PELANGGAN ---<br>";
    echo "1. ID Pelanggan  : " . $id . "<br>";
    echo "2. Nama Lengkap : " . $nama . "<br>";
    echo "3. Status Member : " . $status . "<br>";
}

function hitungTotalBayar($totalBelanja, $diskon)
{
    $potongan = $totalBelanja * ($diskon / 100);
    $totalAkhir = $totalBelanja - $potongan;

    return $totalAkhir;
}
// ====== 2. EKSEKUSI PROGRAM ======
cetakInfoProgram("SISTEM DATA & KASIR PELANGGAN", "Aplikasi pencatatan transaksi member toko.");
tampilDataUtama("CUST-001", "SHIFA RAHMADANI", "Premium");
$belanjaAwal = 500000;
$persenDiskon = 10;
$yangHarusDibayar = hitungTotalBayar($belanjaAwal, $persenDiskon);
echo "<br>--- HASIL PENGOLAHAN DATA ---<br>";
echo "4. Total Belanja Awal  : Rp " . number_format($belanjaAwal) . "<br>";
echo "5. Total Harus Dibayar : Rp " . number_format($yangHarusDibayar) . " (Diskon " . $persenDiskon . "%)<br>";
