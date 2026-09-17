<?php
// ==========================================
// MINI PROJECT: SISTEM INVENTARIS LABORATORIUM
// ==========================================

// 1. Membuat data menggunakan kombinasi Indexed dan Associative Array (Minimal 5 Data)
$inventaris_lab = [
    [
        "nama"    => "Laptop ASUS Core i5",
        "kode"    => "LAB-LPT-01",
        "jumlah"  => 15,
        "kondisi" => "Baik"
    ],
    [
        "nama"    => "Printer Epson L3210",
        "kode"    => "LAB-PRN-02",
        "jumlah"  => 3,
        "kondisi" => "Baik"
    ],
    [
        "nama"    => "Projector BenQ",
        "kode"    => "LAB-PRJ-03",
        "jumlah"  => 2,
        "kondisi" => "Perlu Perbaikan"
    ],
    [
        "nama"    => "Barcode Scanner Wireless",
        "kode"    => "LAB-SCN-04",
        "jumlah"  => 5,
        "kondisi" => "Baik"
    ],
    [
        "nama"    => "Switch Hub 24 Port",
        "kode"    => "LAB-SWT-05",
        "jumlah"  => 4,
        "kondisi" => "Baik"
    ]
];

// 2. Perhitungan Jumlah Data menggunakan fungsi count()
$total_jenis_alat = count($inventaris_lab);

// Tampilan Output Aplikasi Web
echo "<h2>Sistem Inventaris Laboratorium RPL</h2>";
echo "<p><strong>Total Jenis Alat Praktik:</strong> " . $total_jenis_alat . " item ditemukan.</p>";

// Membuat tabel HTML untuk menampilkan data
echo "<table border='1' cellpadding='8' cellspacing='0' style='border-collapse: collapse; width: 100%;'>";
echo "<tr style='background-color: #f2f2f2;'>
        <th>No</th>
        <th>Kode Alat</th>
        <th>Nama Alat Praktik</th>
        <th>Jumlah</th>
        <th>Kondisi</th>
      </tr>";

// 3. Menampilkan data menggunakan Perulangan FOR
for ($i = 0; $i < $total_jenis_alat; $i++) {
    // Menghitung nomor urut (indeks dimulai dari 0, maka ditambah 1)
    $no = $i + 1;
    
    echo "<tr>";
    echo "<td align='center'>" . $no . "</td>";
    echo "<td>" . $inventaris_lab[$i]["kode"] . "</td>";
    echo "<td>" . $inventaris_lab[$i]["nama"] . "</td>";
    echo "<td align='center'>" . $inventaris_lab[$i]["jumlah"] . " Unit</td>";
    echo "<td>" . $inventaris_lab[$i]["kondisi"] . "</td>";
    echo "</tr>";
}

echo "</table>";
?>
