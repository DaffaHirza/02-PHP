<!DOCTYPE html>
<html>
<head>
    <title>Create</title>
</head>
<body>
    <form action="simpan.php" method="post">
    <table>
        <tr>
            <td>NIS</td>
            <td>:</td>
            <td><input type="text" name="nis"></td>
        </tr>
        <tr>
            <td>Nama siswa</td>
            <td>:</td>
            <td><input type="text" name="nama_siswa"></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>:</td>
            <td><input type="text" name="jenis_kelamin"></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td><textarea name="alamat"></textarea></td>
        </tr>
        <tr>
            <td>ID Jurusan</td>
            <td>:</td>
            <td><input type="text" name="id_jurusan"></td>
        </tr>
    </table>
    <input type="submit" name="save" value="SAVE">
</body>
</html>