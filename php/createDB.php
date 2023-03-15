<?php
// Variable Decaralation For Database
$Severname = "localhost";
$Username = "root";
$Password = "";


//Creating Connection
$connecteme = new mysqli($Severname,$Username,$Password);

// Checking Connection
if($connecteme->connect_error){
    die("Connection Failed" .$connecteme->connect_error);
}
//database creation
$sql = "CREATE DATABASE munyeshuri_system_dbm";

if($connecteme->query($sql) === TRUE){
    echo "Database my_system_dbm has create successifully";

}else{
    echo "There was An Error In Database Creation" .$connecteme->error;
}
$connecteme->close();


?>