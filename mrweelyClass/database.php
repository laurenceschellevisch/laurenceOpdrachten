<?php
class dbconn {
   private $host = "127.0.0.1";
   private $user = "lau2000";           //Your Cloud 9 username
   private $pass = "";                  //Remember, there is NO password by default!
   private $port = 3306;                //The port #. It is always 3306
    
public function getDb() {
    $connection = mysqli_connect($this->host, $this->user, $this->pass, "", $this->port) or die(mysql_error());
    return $connection;
 }

}

    
    
    
  //  $connection = mysqli_connect($host, $user, $pass, $db, $port)or die(mysql_error());
?>

