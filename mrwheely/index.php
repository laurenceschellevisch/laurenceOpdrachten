<!DOCTYPE html>
<LINK HREF="style.css" REL="stylesheet" TYPE="text/css">
<html>
    

<?php
include "database.php";
$sql = "SELECT * FROM autowbshp";
mysqli_select_db($connection,"autos");
$sql = "SELECT * FROM `autowbshp`";

if (isset($_POST['submit'])){
    $maxprijs = $_POST["maxprijs"];
    $minprijs = $_POST["minprijs"];
    if ($_POST ['minprijs'] == ""){
        $minprijs = 0;
    }
    if ($_POST ['maxprijs'] == ""){
        $maxprijs = 999999999999999; //2147483647
    }
    $merk = $_POST["select"];
    
   
    if ($_POST ['select'] == "Kies een merk"){
     $sql = "SELECT * FROM autowbshp WHERE autoprijs <= '$maxprijs' AND autoprijs >= '$minprijs'";
    }
    else {
      $sql = "SELECT * FROM autowbshp WHERE automerk = '$merk' AND autoprijs <= '$maxprijs' AND autoprijs >= '$minprijs'";
    }
    
}
$result = $connection->query($sql);
?>
<body>
    
    <form action="#" method="POST">
        <center>
        <select name="select" >
          <option value="Kies een merk" >Kies een merk</option>
          <option value="Audi">Audi</option>
          <option value="Subaru">Subaru</option>
          <option value="Ferrari">Ferrari</option>
          <option value="Volkswagen">Volkswagen</option>
          <option value="Volvo">Volvo</option>
          <option value="Porsche">Porsche</option>
          <option value="Nissan">Nissan</option>
          <option value="Opel">Opel</option>
          <option value="Bmw">Bmw</option>
          
        </select>
        <input type="number" name="minprijs" placeholder="minimum prijs"/>
        <input type="number" name="maxprijs"placeholder="maximum prijs"/>
        <input type="submit" value="Zoek" name="submit"/>
        </center><br>
        
    </form>
    <center><h1>Maak keuze uit ons assortiment</h1></center>
    
    <!--<div style="width:70%;margin:0 auto;">!-->
            
      
    <?php
    
    
    while($row = $result->fetch_assoc()) {
    $prijs;
            
        echo "<div class= autokader>".$row['automerk']." ";
        echo $row ['autotype'];echo "<br>";
        $prijs=$row['autoprijs'];
        $prijs=number_format (( float) $prijs .   $dec_point = "." . $thousands_sep = "," );
   
        echo "&euro; ".$prijs."";
        echo "<img class=img src=images/".$row['autoimage']."></div>";
    }
   

    ?>
   
      <!--</div>!-->
    </body>
</html>