<!DOCTYPE html>
<html>
<head>
    <title>Create</title>
</head>
<body>
    <form action="hasil_cari.php" method="post">
        <select name = "kolom">
            <option value ="id_siswa">id_siswa</option>
            <option value ="nis">nis</option>
            <option value ="nama_siswa">nama_siswa</option>
            <option value ="jenis_kelamin">jenis_kelamin</option>
            <option value ="id_jurusan">id_jurusan</option>
        </select>

        <input type="text" name="cari">
        <input type="submit" value="cari">
    </form>
</body>
</html>