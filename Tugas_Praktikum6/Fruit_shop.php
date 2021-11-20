
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="tampilan.css">
    <title>119140095-Minggu6</title>
</head>
<body>
    
    <form method="POST">
        <legend><h1>ITERA Fruit Shop</h1></legend>
        <br>
        <table>
            <tr>
                <th></th>
                <th>Fruit Name</th>
                <th>Price</th>
                <th>Fruit Weight (Kg)</th>
                <th>Sub Total Price</th>
            </tr>
            <tr>
                <td><img src="buah_mangga.jpg" height=30 width=30></td>
                <td>Mango</td>
                <td>Rp.15.000/kg</td>
                <td><input type="text" id="mango" name="mango" onchange="Fruit_price()"></td>
                <td><input id="mangoPrice" name="mangoPrice" readonly></td>
            </tr>
            <tr>
                <td><img src="buah_jambu.jpg" height=30 width=30></td>
                <td>Guava</td>
                <td>Rp.13.000/kg</td>
                <td><input type="text" id="guava" name="guava" onchange="Fruit_price()"></td>
                <td><input id="guavaPrice" name="guavaPrice" readonly></td>
            </tr>
            <tr>
                <td><img src="buah_salak.jpg" height=32 width=32></td>
                <td>Bark</td>
                <td>Rp.10.000/kg</td>
                <td><input type="text" id="bark" name="bark" onchange="Fruit_price()"></td>
                <td><input id="barkPrice" name="barkPrice" readonly></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td>Total Overall Price : </td>
                
                <td><input id="total_purchases" name="total_purchases" readonly></td>
            </tr>
        </table>
        <br>
        <td><button type="submit" id="OrderDetails" name="OrderDetails">View Order Details</button></td>
    </form>
    
    <script type="text/javascript">
        function Fruit_price(){
            var total = document.getElementById("total_purchases");
            var totalMangga = document.getElementById("mangoPrice");
            var totalJambu = document.getElementById("guavaPrice");
            var totalSalak = document.getElementById("barkPrice");
            var mangga = document.getElementById("mango").value * 15000;
            var jambu = document.getElementById("guava").value * 13000;
            var salak = document.getElementById("bark").value * 10000;
            var jumlah = mangga + jambu + salak;
            total.value = jumlah;
            totalMangga.value = mangga;
            totalJambu.value = jambu;
            totalSalak.value = salak;
        }
    </script>
    
    <div id="detail"> 
    <h1>Order Details</h1>
    <?php
        class buah {
            var $manggoPrice, $guavaPrice, $barkPrice;

            public function __construct($mango, $guava, $bark){
                $this->mango = $mango;
                $this->guava = $guava;
                $this->bark = $bark;
            }

            public function countMango(){
                $this->mangoPrice = $this->mango * 15000;
                echo "Total Price of Mango : Rp.$this->mangoPrice<br>";
            }
                
            public function countGuava(){
                $this->guavaPrice = $this->guava * 13000;
                echo "Total Price of Guava : Rp.$this->guavaPrice<br>";
            }
                
            public function countBark(){
                $this->barkPrice = $this->bark* 10000;
                echo "Total Price of Bark : Rp.$this->barkPrice<br>";
            }

            public function totalPrice(){
                $total = $this->mangoPrice + $this->guavaPrice + $this->barkPrice;
                echo "Total Overall Price= Rp.$total<br>";
            }
        }
        if(isset($_POST['OrderDetails'])){
            $mango = $_POST["mango"];
            $guava = $_POST["guava"];
            $bark = $_POST["bark"];
            $detail = new buah($mango, $guava, $bark);
            $detail->countMango();
            $detail->countGuava();
            $detail->countBark();
            $detail->totalPrice();
        }else{
            echo "Please Fill In The Order";
        }
                    
    ?>
    </div>
</body>
</html>