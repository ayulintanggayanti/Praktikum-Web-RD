<?php

include("config.php");

if(isset($_POST['daftar'])){

    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $prodi = $_POST['prodi'];
    $jeniskelamin = $_POST['jeniskelamin'];
    $provinsi = $_POST['provinsi'];

    $sql = "INSERT INTO mahasiswaukm (id,nama, email, prodi, jeniskelamin, provinsi) VALUE ('id','$nama', '$email', '$prodi', '$jeniskelamin', '$provinsi')";
    $query = mysqli_query($db, $sql);

    if( $query ) {
        header('Location: listdata.php?status=sukses');
    } else {
        header('Location: listdata.php?status=gagal');
    }

} else {
    die("Akses dilarang...");
}

?>