<?php
 for($i=1; $i<=50;$i++){
    //echo $i . "<br>";
    if($i%10==3){
        echo "quieres un mate? <br>";
    }elseif($i%10==7){
        echo "No se toma con azucar<br>";
    }else{
        echo $i . "<br>";
    }
    
 }

?>