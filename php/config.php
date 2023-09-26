<?php
$dbhost ="Localhost";
$dbusername ="root";
$dbpassword ='';
$dbname = "arcam_gold_fish";

$conn = mysqli_connect($dbhost,$dbusername,$dbpassword,$dbname);
if(!$conn){
    echo "conexão com a base de dados" . mysqli_connect_error();
}

?>