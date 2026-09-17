<?php
// ==========================================
// 1. JUDUL PROGRAM
// ==========================================
echo "<h2>MINI PROJECT: SISTEM DAFTAR BUKU PERPUSTAKAAN</h2>";
echo "<hr>";

// ==========================================
// 2. DATA INPUT (5 Variabel Wajib)
// ==========================================
$nama_kategori    = "Teknologi dan Komputer"; // Variabel 1
$lokasi_rak       = "Rak A-05";               // Variabel 2
$total_stok_buku  = 15;                       // Variabel 3
$limit_tampilan   = 10;                       // Variabel 4
$buku_kosong_id   = 7;                        // Variabel 5

echo "<h3>[Data Input Sistem]</h3>";
echo "Kategori Buku &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: " . $nama_kategori . "<br>";
echo "Lokasi Penyimpanan : " . $lokasi_rak . "<br>";
echo "Total Stok Fisik &nbsp;&nbsp;&nbsp;: " . $total_stok_buku . " Buku<br>";
echo "Limit Maksimal &nbsp;&nbsp;&nbsp;&nbsp;: " . $limit_tampilan . " Data<br>";
echo "ID Buku Kosong &nbsp;&nbsp;&nbsp;&nbsp;: " . $buku_kosong_id . " (Simulasi Dipinjam Habis)<br>";
echo "<hr>";

// ==========================================
// 3. HASIL PERULANGAN & KONDISI BREAK/CONTINUE
// ==========================================
echo "<h3>[Hasil Perulangan Daftar Buku]</h3>";

// Menggunakan perulangan FOR untuk mencetak minimal 10 output data
for ($i = 1; $i <= $total_stok_buku; $i++) {
    
    // Kondisi CONTINUE: Jika menyentuh nomor buku kosong, lewati baris ini
    if ($i == $buku_kosong_id) {
        echo "<em>--> Buku ID $i: Sedang Kosong (Dilewati oleh sistem)</em><br>";
        continue; 
    }
    
    // Kondisi BREAK: Jika jumlah baris tercetak sudah mencapai limit tampilan (10 data)
    if ($i > $limit_tampilan) {
        echo "<br><strong>[BREAK] Batas limit tampilan ($limit_tampilan data) tercapai. Perulangan dihentikan.</strong><br>";
        break; 
    }
    
    // Output berulang (Menampilkan data buku ke-1 sampai ke-10)
    echo "✓ Buku Kode: B-$i | Kategori: $nama_kategori | Rak: $lokasi_rak<br>";
}

echo "<hr>";

// ==========================================
// 4. KETERANGAN HASIL
// ==========================================
echo "<h3>[Keterangan Hasil]</h3>";
echo "Sistem berhasil memproses dan menampilkan ringkasan inventaris perpustakaan digital.<br>";
echo "Dari total $total_stok_buku stok, hanya $limit_tampilan data teratas yang ditampilkan sesuai batasan limit.<br>";
echo "Buku dengan ID $buku_kosong_id berhasil dilewati oleh validasi sistem menggunakan perintah <code>CONTINUE</code>.";
?>
