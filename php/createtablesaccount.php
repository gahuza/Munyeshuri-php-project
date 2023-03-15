<?php
// Variable Decaralation
include('connection.php'); 


//checking connection
$con = mysqli_connect($host, $user, $password, $db_name);  
if(mysqli_connect_errno()) {  
    die("Failed to connect with MySQL: ". mysqli_connect_error());  
} 
//creatin table
$createtable = "CREATE TABLE acc_tbl (id int(9) PRIMARY KEY AUTO_INCREMENT,
username VARCHAR(20), 
passwd VARCHAR(20),Email VARCHAR(20),usertype VARCHAR(20),
CreatedDate datetime NOT NULL DEFAULT current_timestamp())
 
 ";
if($con->query($createtable) === TRUE){
    echo "The Table account has created";
    

}else{
    echo "There Was An Error In Table Creation" .$con->error;
}
$con->close();


?>