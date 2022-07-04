<?php
$secreto = 27;

for($i=1;$i<=50;$i++){
    if($i==$secreto){
        echo "Este es tu numero: " . $secreto . "<br>";
    }else{
        echo $i ."<br>";
    }
}

?>