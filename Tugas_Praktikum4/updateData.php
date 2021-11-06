<?php
include "koneksi.php";
$id=$_GET['id'];
 
$sql="select * from data_mahasiswa WHERE NIM='$id'";

$hasil=mysqli_query($kon,$sql);
 
$data=mysqli_fetch_array($hasil);

?>
    <form id="form_mhs_update" method="post">

        <label>NIM</label><br>
        <input type="text" name="NIM" value="<?php echo $data['NIM'];?>"><br><br>

        <label>Nama</label><br>
        <input type="text" name="Nama" value="<?php echo $data['Nama'];?>"><br><br>

        <label>Prodi</label><br>
        <input type="text" name="Prodi" value="<?php echo $data['Prodi'];?>"><br><br>

        <label>Angkatan</label><br>
        <input type="text" name="Angkatan" value="<?php echo $data['Angkatan'];?>"><br><br>
        
        <button id="btn_submitUpdate" type="Submit" value="Update" id="SaveFile">Update</button>
    </form>