<?php
$connect = mysqli_connect ('localhost','root','','latihan');
 if ($connect)
     echo "berhasil";
 else
     echo "koneksi gagal";
?>