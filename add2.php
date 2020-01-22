<html>
    <form action="insertt.php" method="post">
        <label>nama</label><br>
        <input type="text" name="nama"/>
        <br/><br/>

        <label>jabatan</label><br>
        <textarea name="jabatan" cols="30" rows="10>"></textarea>
        <br/><br/>

        <label>alamat</label><br/>
        <textarea name="alamat" cols="30" rows="10"></textarea>
        <br/><br/>

        <label>umur</label><br>
        <input type="text" name="umur"/>
        <br/><br/>

        <label>jenis kelamin</label><br>
        <select name="jenis_kelamin">
            <option value="pria">pria</option>
            <option value="wanita">wanita</option>
        </select>
        <br/><br/>

        <button type="sumbit">Tambah</button>

    </form>

</html>