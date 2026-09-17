<?php 
// Fungsi Tanpa Parameter
echo "<br>"; 
echo "<hr>Fungsi Tanpa Parameter<hr>"; 
function salam() { 
    echo "Selamat Datang di SMKN 1 Karang Baru <br>"; 
} 

salam(); 

// Memanggil Function Berkali-kali ===========> 
echo "<br>"; 
echo "<hr>Memanggil Function Berkali-kali<hr>"; 

echo "Selamat Belajar PHP <br>"; 

salam(); 
salam(); 
salam(); 

//  Fungsi Dengan Parameter (Nama fungsi diubah agar tidak bentrok)
echo "<br>"; 
echo "<hr>Function Dengan Parameter<hr>"; 

function salamDenganNama($nama) { 
    echo "Selamat Datang " . $nama . "<br>"; 
} 

salamDenganNama("SHIFA RAHMADANI"); 

//  Function Dengan Lebih Dari Satu Parameter ===========> 
echo "<br>"; 
echo "<hr>Function Dengan Lebih Dari Satu Parameter<hr>"; 

function biodata($nama, $kelas) { 
    echo "Nama : " . $nama; 
    echo "<br>"; 
    echo "Kelas : " . $kelas; 
} 

biodata("SHIFA RAHMADANI", "XI RPL 2"."<br>"); 
//  Function Dengan Return ===========> 
echo "<br>"; 
echo "<hr>Function Dengan Return<hr>"; 
function jumlah ()
{
    return 10 + 5;
}
echo jumlah ();
?>
