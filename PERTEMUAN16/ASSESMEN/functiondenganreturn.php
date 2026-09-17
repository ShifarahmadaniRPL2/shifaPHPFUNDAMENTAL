<?php
function hitungRataRata($nilai1, $nilai2, $nilai3) {
    $total = $nilai1 + $nilai2 + $nilai3;
    $rataRata = $total / 3;
    
    return $rataRata;
}

$hasilAkhir = hitungRataRata(80, 90, 85);

echo "Nilai Rata-Rata: " . $hasilAkhir;

?>
