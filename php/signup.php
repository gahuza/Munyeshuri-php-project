<?php
if(isset($_POST['submit'])){
    include('connection.php');
    $username= $_POST["username"];
    $password = $_POST["password"];
    $email = $_POST["email"];
  if(!empty($username) || !empty($password) || 
    !empty($email)){


      

$sql ="INSERT INTO acc_tbl(id,username,passwd,Email,usertype,CreatedDate)VALUES 
('','$username','$password','$email','localuser', NOW())";


}
if ($con->query($sql) === TRUE) {
   echo"<script> alert('account created successful!!');</script>";
  
 } else {
    echo"<script> alert('failed!!');</script>"; 
}
     
 $con->close();
           
    }
 

?>