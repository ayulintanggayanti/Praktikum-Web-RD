<?php
include "koneksi.php";

$id = $_POST['deleteData'];

$sql = "delete from data_mahasiswa where NIM='$id'";
$hasil=mysqli_query($kon,$sql);
?>