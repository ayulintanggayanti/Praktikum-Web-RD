<?php
include "koneksi.php";

$NIM=$_POST["NIM"];
$Nama=$_POST["Nama"];
$Prodi=$_POST["Prodi"];
$Angkatan=$_POST["Angkatan"];

$sql="Update data_mahasiswa SET nama='$Nama', prodi='$Prodi',angkatan='$Angkatan' where nim='$NIM'";

$hasil=mysqli_query($kon,$sql);
?>