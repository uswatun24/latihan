<?php
// Koneksi ke database mysql
$koneksi = mysql_connect("localhost","root","","munna_uswa");

// cek jika koneksi gagal ke mysql, maka tampil pesan berikut
if (mysqli_connect_errno()){
    echo "Gagal melakukan koneksi ke MYSQL: " . mysqli_connect_error();
}
?>