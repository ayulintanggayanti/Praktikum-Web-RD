<?php
    function prima ($a){
        for($j=2; $j<$a; $j++){
           if($a % $j == 0){
                return 0;
            }
        }
       return 1;
    }
    echo "<b>Berikut Bilangan Prima Antara 1 - 50 : </b> <br> <br>";

    for($i=2; $i<=50; $i++){
        $a = prima($i);
        if($a == 1){
            echo "{$i} , ";
        }
    }
    
 ?>

 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>119140095 - Bilangan Prima</title>
</head>
</html>