<style>

    *{
        font-family: 'Times New Roman', Times, serif, Tahoma, Sans-serif;
        margin: 0;
        padding: 0;
    }

    body, html {
        margin: 10;
        height: auto; 
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        background-color: burlywood;
    }
    h1{
        text-align: center;
        margin: 20px;
    }

    head{
        background-color: rgb(0, 255, 170);
        height: auto;
        width: 100%;
        text-align: center;
    }

    #pengisian_data{
        text-align: center;
    }

    #btn_update {
        padding: 5px; 
        background-color: white; 
        color: green; 
        border-radius: 5px; 
        cursor: pointer;
        font-family: "Quicksand", sans-serif;
    }

    #btn_delete {
        padding: 5px; 
        background-color: white; 
        color: red; 
        border-radius: 5px; 
        cursor: pointer;
        font-family: "Quicksand", sans-serif;
    }

    #btn_tampil{
        padding: 5px; 
        background-color: grey; 
        color: white; 
        border-radius: 5px; 
        cursor: pointer;
        font-family: "Quicksand", sans-serif;
    }

    #btn_add{
        padding: 5px; 
        background-color: grey; 
        color: white; 
        border-radius: 5px; 
        cursor: pointer;
        font-family: "Quicksand", sans-serif;
    }

</style>

    <table border='1' align=center>
        <tr>
            <th>No</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Program Studi</th>
            <th>Angkatan</th>
            <th>Pilihan</th>
        </tr>

        <?php
        include "koneksi.php";
        $hasil=mysqli_query($kon,"select * from data_mahasiswa");
        $no=0;
        while ($data = mysqli_fetch_array($hasil)):
            $no++;
        ?>
        <tr>
            <td><?php echo $no; ?></td>
            <td><?php echo $data['NIM']; ?></td>
            <td><?php echo $data['Nama']; ?></td>
            <td><?php echo $data['Prodi']; ?></td>
            <td><?php echo $data['Angkatan']; ?></td>
            <td>
                <button id="btn_update" value="<?php echo $data['NIM']; ?>">Edit</button>
                <button id="btn_delete" value="<?php echo $data['NIM']; ?>">Delete</button>
        </tr>
            <?php endwhile;?>


<br>