<?php

include ('connection.php');

$query = mysqli_query($connect, "SELECT * FROM karyawan");
$result = mysqli_fetch_all($query, MYSQLI_ASSOC);

?>
<html>
<body>
    <a href="add.php">Tambah Data</a>

    <br/><br/>

    <table border="1">
    <tr>
        <th>id</th>
        <th>nama</th>
        <th>alamat</th>
        <th>umur</th>
        <th>jenis_kelamin</th>
    </tr>
    <?php foreach($results as $result) :?>
    <tr>
        <td><?php echo $results['id']?></td>
        <td><?php echo $results['nama']?></td>
        <td><?php echo $results['alamat'?></td>
        <td><?php echo $results['umur']?></td>
        <td><?php echo $results['jenis_kelamin']?></td>
    </tr>
    <?PHP endforeach; ?>
</table>
</body>
</html>