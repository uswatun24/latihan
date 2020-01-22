<?php

include ('connection.php');

$query = mysqli_query($connect, "SELECT * FROM karyawan");
$results = mysqli_fetch_all($query, MYSQLI_ASSOC);
?>

<html>
<body>
    <a href="add2.php">Tambah Data</a>
    <br/><br/>
    <form action="search.php" method="get">
        <input type="text" name="keyword" placeholder="keyword .."  />
        <button type="submit">search</button>
        </form>
        <br/>

    <table border="1">
        <tr>
           
            <th>Nama</th>
            <th>Jabatan</th>
            <th>Alamat</th>
            <th>Umur</th>
            <th>Jenis_kelamin</th>
            <th>pilihan</th>
        </tr>
        <?php foreach($results as $result) : ?>
            <tr>
                
                <td><?php echo $result['nama']?></td>
                <td><?php echo $result['jabatan']?></td>
                <td><?php echo $result['alamat']?></td>
                <td><?php echo $result['umur']?></td>
                <td><?php echo $result['jenis_kelamin']?></td>
                <td>
                <a href="edit2.php?id=<?php echo $result['id']?>">Edit</a>
                <a href="delete.php?id=<?php echo $result['id']?>">delete</a>
                   
                </td>
          </tr>
            <?PHP endforeach; ?>
    </table>
</body>
</html>
