<?php
// Variable Decaralation
include('connection.php'); 


//checking connection
$con = mysqli_connect($host, $user, $password, $db_name);  
if(mysqli_connect_errno()) {  
    die("Failed to connect with MySQL: ". mysqli_connect_error());  
} 
//creatin table
$createtable = "CREATE TABLE student (STUD_ID int(9) PRIMARY KEY AUTO_INCREMENT,
Firstname VARCHAR(20), 
Lastname VARCHAR(10),Gender VARCHAR(5),Orgins VARCHAR(12),Guardian_Names VARCHAR(12),image longblob NOT NULL,
InsertedDate datetime NOT NULL DEFAULT current_timestamp())
 
 ";
if($con->query($createtable) === TRUE){
    echo "The Table student has created";
    

}else{
    echo "There Was An Error In Table Creation" .$con->error;
}
$con->close();


?>