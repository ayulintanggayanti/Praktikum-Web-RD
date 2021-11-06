<?php
include "koneksi.php";

$NIM=$_POST["NIM"];
$Nama=$_POST["Nama"];
$Prodi=$_POST["Prodi"];
$Angkatan=$_POST["Angkatan"];

$sql="insert into data_mahasiswa (NIM,Nama,Prodi,Angkatan) values ('$NIM','$Nama','$Prodi','$Angkatan')";

$hasil=mysqli_query($kon,$sql);

?>