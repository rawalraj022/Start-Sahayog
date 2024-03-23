
<?php

$servername = "localhost";
$dbusername = "root";
$password = "";
$dbname = "start_sahayog_db";

try{
// create connection
$conn = new mysqli($servername, $dbusername, $password, $dbname);

}
catch(Exception){

  echo "database connection error" ;
  
  exit();
}