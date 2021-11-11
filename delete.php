<?php
include './koneksi.php';

$id_siswa = $_GET['id_siswa'];

$sql = "DELETE FROM BUKU WHERE id_siswa='$id_siswa'";
if($conn->query($sql) === TRUE){
    echo "Data berhasil dihapus<br>";
    echo "<a href='read.php'>kembali</a><br>";
}else{
    echo "Eror: " . $sql .  "<br>" . $conn->error;
}

$conn->close();

?>