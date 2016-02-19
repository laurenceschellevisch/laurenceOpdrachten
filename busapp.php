<html>
<head><title>Bus Rijs</title></head>
<body>
  <form method="POST" action="">
    <input type="text" name="leeftijd" value="" />
    <input type="submit" name="submit" />
  </form>

<?php

$leeftijd= 20;



if(isset($_POST['submit'])) {
  $leeftijd= $_POST['leeftijd'];
  if($leeftijd < 4){
   echo "uw kaartje is gratis.";
    
  }

else if($leeftijd < 13 || $leeftijd > 65){
    echo "uw kaartje is 5 euro.";
}
else{
  echo "uw kaartje is 10 euro.";
}
}
?>
</body>
</html>