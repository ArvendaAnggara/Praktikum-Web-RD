<?php

function prima(){
    echo '<h2>Bilangan PRIMA dari 1 - 50</h2>';

    for($i=1;$i<=50;$i++){
        $index=0;
        for($j=1;$j<=$i;$j++){
            if($i%$j==0){
                $index++;
            }
        }
        if($index==2){
            echo "{$i},  ";
            
        }
    }
}

prima();

?>