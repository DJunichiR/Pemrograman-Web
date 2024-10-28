<?php
$host = 'localhost';
$user = 'root'; 
$password = '';
$database = 'utspemweb';

#Buat koneksi ke database pake fungsi mysqli
$koneksi = new mysqli($host, $user, $password, $database); 

#Buat ngecek kalo error dengan menampilkan pesan
if ($koneksi->connect_error) {
    die("Connection failed: " . $koneksi->connect_error);
}
?>
