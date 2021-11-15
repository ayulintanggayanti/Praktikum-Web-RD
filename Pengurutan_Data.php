<?php

function pengurutan(){
    $dataList = array('larine','aduh','qifuat','toda','anevi','samid','kifuat','ayu','lintang','gayanti');
    
    sort($dataList);

    for($i=0; $i<10; $i++){
        echo $dataList[$i];
        echo '<br>';
    }
}

echo '<b>Mengurutkan 10 buah data yang acak </b><br><br>';
echo '<p>Data yang digunakan : ("larine","aduh","qifuat","toda","anevi","samid","kifuat","ayu","lintang","gayanti") </p> <br><br>';
echo '<b>Berikut 10 Data yang Sudah Terurut : </b><br><br>';
pengurutan();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>119140095 - Pengurutan Data</title>
</head>
</html>