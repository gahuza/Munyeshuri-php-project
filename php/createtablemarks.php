<?php
// Variable Decaralation
include('connection.php'); 


//checking connection
$con = mysqli_connect($host, $user, $password, $db_name);  
if(mysqli_connect_errno()) {  
    die("Failed to connect with MySQL: ". mysqli_connect_error());  
} 
//creatin table
$createtable = "CREATE TABLE marks (id int(9) PRIMARY KEY AUTO_INCREMENT,
trimester VARCHAR(20), 
academic VARCHAR(10),facult VARCHAR(5),course VARCHAR(12),STUD_ID int(12),fname VARCHAR(12),
lname VARCHAR(12),gender VARCHAR(12),Test VARCHAR(12),Exam VARCHAR(12),Total VARCHAR(12),Empo_id int(12),InsertedDate datetime NOT NULL DEFAULT current_timestamp())
 
 ";
if($con->query($createtable) === TRUE){
    echo "The Table marks has created";
    

}else{
    echo "There Was An Error In Table Creation" .$con->error;
}
$con->close();


?>