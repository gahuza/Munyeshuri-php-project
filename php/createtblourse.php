<?php
// Variable Decaralation
include('connection.php'); 


//checking connection
$con = mysqli_connect($host, $user, $password, $db_name);  
if(mysqli_connect_errno()) {  
    die("Failed to connect with MySQL: ". mysqli_connect_error());  
} 
//creatin table
$createtable = "CREATE TABLE course (id int(9) PRIMARY KEY AUTO_INCREMENT,
coursename VARCHAR(20), 
image VARCHAR(100),
CreatedDate datetime NOT NULL DEFAULT current_timestamp())
 
 ";
if($con->query($createtable) === TRUE){
    echo "The Table course has created";
    

}else{
    echo "There Was An Error In Table Creation" .$con->error;
}
$con->close();


?>