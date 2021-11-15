<?php
if(isset($_POST['operate'])){
    $i=0;
    $operator = ['+','-','*','/','%'];
    $angka1 = $_POST['angka1'];
    $angka2 = $_POST['angka2'];

    $penjumlahan = operasi($angka1, $angka2, $operator[0]);
    $pengurangan = operasi($angka1, $angka2, $operator[1]);
    $perkalian = operasi($angka1, $angka2, $operator[2]);
    $pembagian = operasi($angka1, $angka2, $operator[3]);
    $modulo = operasi($angka1, $angka2, $operator[4]);
}
function operasi($angka1, $angka2, $operator){
    $hasil = 0;
    if($operator == '+'){
        $hasil = $angka1 + $angka2;
    }
    elseif($operator == '-'){
        $hasil = $angka1 - $angka2;
    }
    elseif($operator == '*'){
        $hasil = $angka1 * $angka2;
    }
    elseif($operator == '/'){
        $hasil = $angka1 / $angka2;
    }
    elseif($operator == '%'){
        $hasil = $angka1 % $angka2;
    }
    return $hasil;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>119140095 - Kalkulator</title>
</head>
<body>
    <form method="post">
        <label for="angka1">Angka 1 = </label>
        <input type="text" name="angka1"><br><br>
        <label for="angka2">Angka 2 = </label>
        <input type="text" name="angka2"><br><br>
        <button type="submit" name="operate">Hitung</button><br><br>
        
    </form>
    
    <div>
        <p>Berikut merupakan hasil dari setiap operasi : </p>
        <p>PENJUMLAHAN <br>
        Operator : + <br>
        Hasil : 
        <?php
            if(isset($penjumlahan)){
                echo $penjumlahan;
            }
        ?>
        </p>
        <p>PENGURANGAN <br>
        Operator : - <br>
        Hasil : 
        <?php 
            if(isset($pengurangan)){
                echo $pengurangan;
            }
        ?>
        </p>

        <p>PERKALIAN <br>
        Operator : * <br>
        Hasil : 
        <?php 
            if(isset($perkalian)){
                echo $perkalian;
            }
        ?>
        </p>
        
        <p>PEMBAGIAN <br>
        Operator : / <br>
        Hasil : 
        <?php 
            if(isset($pembagian)){
                echo $pembagian;
            }
        ?>
        </p>
        
        <p>MODULUS <br>
        Operator : % <br>
        Hasil : 
            <?php 
            if(isset($modulo)){
                echo $modulo;
            }
        ?>
        </p>
    </div>
</body>
</html>