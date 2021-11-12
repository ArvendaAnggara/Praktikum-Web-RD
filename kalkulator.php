<?php

function calculate($a, $b, $operator){
    $hasil = 0;
    if($operator == '+'){
        $hasil = $a + $b;
    }
    elseif($operator == '-'){
        $hasil = $a - $b;
    }
    elseif($operator == '*'){
        $hasil = $a * $b;
    }
    elseif($operator == '/'){
        $hasil = $a / $b;
    }
    elseif($operator == '%'){
        $hasil = $a % $b;
    }
    return $hasil;
}
if(isset($_POST['operate'])){
    $i=0;
    $operator = ['+','-','*','/','%'];
    $a = $_POST['bil1'];
    $b = $_POST['bil2'];

    $tambah = calculate($a, $b, $operator[0]);
    $kurang = calculate($a, $b, $operator[1]);
    $kali = calculate($a, $b, $operator[2]);
    $bagi = calculate($a, $b, $operator[3]);
    $modulo = calculate($a, $b, $operator[4]);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>kalkulator</title>
</head>
<body>
    <form method="post">
        <label for="bil1">Bilangan 1 = </label>
        <input type="text" name="bil1"><br><br>
        <label for="bil2">Bilangan 2 = </label>
        <input type="text" name="bil2"><br><br>
        <button type="submit" name="operate">Calculate</button><br><br>
        
    </form>
    
    <div>
        <p>Berikut merupakan hasil dari setiap operasi</p>
        <p>PENJUMLAHAN <br>
        Operator : + <br>
        Hasil : 
        <?php
            if(isset($tambah)){
                echo $tambah;
            }
        ?>
        </p>
        <p>PENGURANGAN <br>
        Operator : - <br>
        Hasil : 
        <?php 
            if(isset($kurang)){
                echo $kurang;
            }
        ?>
        </p>

        <p>PERKALIAN <br>
        Operator : * <br>
        Hasil : 
        <?php 
            if(isset($kali)){
                echo $kali;
            }
        ?>
        </p>
        
        <p>PEMBAGIAN <br>
        Operator : / <br>
        Hasil : 
        <?php 
            if(isset($bagi)){
                echo $bagi;
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