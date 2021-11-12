<?php

function urut(){
    echo '<h2>Program Pengurutan 10 data</h2>';
    echo '<h3>Contoh Kata yang belum diurutkan</h3>';
    echo '<p>(“larine”, “aduh”, “qifuat”, “toda”, “anevi”, “samid”, “kifuat”,“ini”,“tugas”,“penda”)</p>';
    echo '<h3>hasil</h3>';
    $listArray = array('larine','aduh','qifuat','toda','anevi','samid','kifuat','ini','tugas','penda');
    
    sort($listArray);

    foreach($listArray as $sortedData){
        echo $sortedData;
        echo '<br>';
    }
}
urut();

?>