 <?php
include ('connection.php');

$id = $_POST['id'];
$nama = $_POST['nama'];
$jabatan = $_POST['jabatan'];
$alamat = $_POST['alamat'];
$umur = $_POST['umur'];
$jenis_kelamin = $_POST['jenis_kelamin'];

$update = mysqli_query($connect,"UPDATE karyawan SET nama='$nama', alamat='$alamat', jabatan='$jabatan', umur='$umur', jenis_kelamin='$jenis_kelamin' WHERE id='$id'");

if($update)
    header('location:list.php');
else
    echo 'update data gagal';
?>