<?php

include('connection.php');


$nama = $_POST['nama'];
$jabatan = $_POST['jabatan'];
$alamat = $_POST['alamat'];
$umur = $_POST['umur'];
$jenis_kelamin = $_POST['jenis_kelamin'];

$insert = mysqli_query($connect,"INSERT INTO karyawan SET nama='$nama', jabatan='$jabatan', alamat='$alamat', umur='$umur', jenis_kelamin='$jenis_kelamin'");

if($insert)
    header('location:list.php');
else
    echo 'input data gagal';