<?php
if(isset($_POST['submit'])){
    include('connection.php');
    $name= $_POST["name"];
    $email = $_POST["email"];
    $comments = $_POST["comments"];
  if(!empty($username) || !empty($password) || 
    !empty($email)){


      

$sql ="INSERT INTO contact(id,name,email,message)VALUES 
('','$name','$email','$comments')";


}
if ($con->query($sql) === TRUE) {
   echo"<script> alert('contacted  successful!!');</script>";
  
 } else {
    echo"<script> alert('failed!!');</script>"; 
}
     
 $con->close();
           
    }
 

?>