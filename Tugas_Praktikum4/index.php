<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="jquery-3.5.1.min.js"></script>
    
    <title>119140095_Tugas 4</title>
</head>
<body>
    <h1>Data Mahasiswa</h1>
    <div id="pengisian_data"> 
        <form method="post" id="form_mhs">
            <label>NIM</label><br>
            <input type="text" name="NIM"><br><br>
            <label>Nama</label><br>
            <input type="text" name="Nama"><br><br>
            <label>Prodi</label><br>
            <input type="text" name="Prodi"><br><br>
            <label>Angkatan</label><br>
            <input type="text" name="Angkatan"><br><br>
        </form>
        <button id="btn_tampil">Tampilkan Data</button>
        <button id="btn_add">Create Data</button>
    </div>
    
    <br>
    <h2>Tabel Data Mahasiswa</h2>
    <div id="showData"></div>
    
    <script>
        $(document).ready(function(){
            show()

            function show(){
                $.ajax({
                    type: 'GET',
                    url: "tampilan.php",
                    success: function(data){
                        $('#showData').html(data)
                    }
                });
            };

            $('#btn_tampil').click(function(){
                alert("Data Ditampilkan")
                show();
            });

            $('#btn_add').click(function(){
                var data = $('#form_mhs').serialize();
                $.ajax({
                    type: 'POST',
                    url: "create.php",
                    data: data,
                    cache: false,
                    success: function(data){
                        alert("Data Ditambahkan")
                        show();
                    }
                });
            });

            $('#showData').on('click','#btn_update',function(){
                var id = $(this).attr("value");
                $.ajax({
                    type :'GET',
                    url : 'updateData.php',
                    data :{id:id},
                    success : function(data){
                        $('#showData').html(data);
                    }
                });
            });

            $('#showData').on('submit','#form_mhs_update',function(){
                var dataUpdate = $(this).serialize();
                $.ajax({
                    type :'POST',
                    url : 'update.php',
                    data :dataUpdate,
                    cache : false,
                    success : function(data){
                        alert("Data Diupdate");
                        $('#showData').html(data);
                    }
                });
            });

            $('#showData').on('click','#btn_delete',function(){
                var deleteData = $(this).attr("value");
                $.ajax({
                    type : 'POST',
                    url : 'delete.php',
                    data : {deleteData:deleteData},
                    success : function(data){
                        alert("Data Dihapus");
                        show();
                    }
                });
            });
        });
    </script>
</body>
</html>