<?php
$aantal=20;
$rij=0;
echo "*"; 
echo "</br>"; 
while($rij<$aantal){
    
    for($i=0;$i<$rij+2;$i++){
     echo "*";        
    }
    echo "</br>";  
    $rij++;
}
