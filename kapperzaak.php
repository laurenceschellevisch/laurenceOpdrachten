<html>
<?php

$kapperszaak = array (
    '8:00' => "meneer Karel de Grote",
    '8:30' => "meneer Peter de Man",
    '9:30' => "mevrouw sandersen",
    '11:00' => "",
    '12:00' => "meneer van dam",    
);

foreach($kapperszaak as $tijd => $naam){
    if ($naam == "") {
        $naam = "leeg vak";
    }
    
    echo $tijd;
    echo "<br>";
    
    echo $naam;  
    echo "<br>"; 
    echo "<br>";  
}
?>
</html>