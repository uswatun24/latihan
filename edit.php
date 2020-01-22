<?php
echo $_GET['id'];

$id = $_GET['id'];
include('connection.php');

$query = mysqli_query($connect,"SELECT * FROM karyawan WHERE id='$id' LIMIT 1");
$result = mysqli_fetch_all($query, MYSQLI_ASSOC);
?>

<html>
    <form action="update.php" method="post">

        <input type="hidden" name="id" value=<?php echo $result[0]['id']?>>

        <label>id</label><br/>
        <input type="text" name="id" value="<?php echo $result[0]['id']?>"/>
        <br/><br/>

        <label>nama</label><br/>
        <input type="text" name="nama" value="<?php echo $result[0]['nama']?>"/>
        <br/><br/>

        <label>alamat</label><br/>
        <textarea name="alamat" cols="30" row="10"><?php echo $result[0]['alamat']?></textarea>
        <br/><br/>

        <label>umur</label><br/>
        <input type="text" name="umur" value="<?php echo $result[0]['umur']?>"/>
        <br/><br/>

        <label>jenis_kelamin</label><br/>
        <select>
            <option value="pria"<?php echo ($result[0]['jenis_kelamin'] == 'pria')
                        ? 'selected' : '';?> >pria</option>
            <option value="perempuan"<?php echo ($result[0]['jenis_kelamin'] == 'perempuan')
                        ? 'selected' : '';?> >perempuan</option>
        </select>
        <br/><br/>

        <button type="submit">Perbaharui</button>
     </form>
     </html>


