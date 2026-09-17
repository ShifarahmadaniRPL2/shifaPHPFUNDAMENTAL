<?php

// $username = "admin";
// $password = "123";

// if($username == "admin")
// {
//     if($password == "123")
//     {
//         echo "Login Berhasil";
//     }
// }



$username = "admin2";
$password = "1234";

if($username == "admin1")
{
    if($password == "123")
    {
        echo "Login Berhasil";
    }
} else
{
    echo"Login Gagal <br>";
}
$hari = "Selasa";
// ================================
switch($hari)
{
    case "Senin":
        echo "Upacara";
        break;

    case "Selasa":
        echo "Belajar";
        break;

    default:
        echo "Hari Lain";
}


?>

