<?php session_start();

include_once("connection.php");

$nim = $_POST['nim'];
$nama = $_POST['nama'];

$result = mysqli_query($mysqli, "INSERT INTO tab_peserta(nim,nama))
    VALUES('$nim','$nama')");

echo "<script language=javascript>
alert('Simpan Berhasil');
window.location='peserta.php';
</script>";
