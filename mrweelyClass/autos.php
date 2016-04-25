<?php
include_once('index.php');
class autos {
      public $dbmerk;
    
      function autos($merk=112345, $prijs=null, $foto=null) {
        $this->dbmerk = $merk;
        $merk="aart";
        $this->prijs = $prijs;
        $this->foto = $foto;
      }
      
    function aart($merk=laurence) {
        $this->dbmerk = $merk;
    }
}

function listAutos() {
global $result;
if ($result->num_rows == 0) {

 while($row = $result->fetch_assoc()) {
$auto = new auto($row['automerk'],  $row['autoprijs'], $row['autoimage']);
$html .= '<div id="auto" style="background-image:url(fotos/'.$auto->foto.');">'.'<p id="text">Merk: '.$auto->merk.'<br>Prijs: '.'&euro;'.number_format($auto->prijs,2,",",".").'</p></div>';
}
}
print $html;
}


?>
