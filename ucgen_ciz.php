<?php

function ucgenCiz($sayi){
    $deger=1;
    while($deger<=$sayi){

        for($i=1;$i<=$deger;$i++){
            echo "0";
        }
        echo "\n";
        $deger++;
    }
}

ucgenCiz(15);

?>