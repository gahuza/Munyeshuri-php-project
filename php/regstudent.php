

<?php

// include('connection.php');
// //variable decaralation



// $fname= $_POST["fname"];
// $lname = $_POST["lname"];
// $gender = $_POST["gender"];
// $address = $_POST["address"];
// $parentname = $_POST["parentname"];
 

// //database connection
// if(!empty($fname) || !empty($lname) || 
//     !empty($gender) ||!empty($address) ||!empty($parentname) ){

//         // variable decaralation on part of database

 


//         //create connection

//         $con = mysqli_connect($host, $user, $password, $db_name);  
//         if(mysqli_connect_errno()) {  
//             die("Failed to connect with MySQL: ". mysqli_connect_error());  
//         }  
//         else{
//             // $SELECT = "SELECT Reg_Numbers From studentsdetails Where Reg_Numbers = ? Limit 1";
//             // $INSERT = "INSERT INTO users(fname,lname,username,email,passwordd,user_role) Values(?,?,?,?,?,?)";

//             $fileName = basename($_FILES["image"]["name"]); 
//             $fileType = pathinfo($fileName, PATHINFO_EXTENSION); 
             
//             // Allow certain file formats 
//             $allowTypes = array('jpg','png','jpeg','gif'); 
//             if(in_array($fileType, $allowTypes)){ 
//                 $image = $_FILES['image']['tmp_name']; 
//                 $imgContent = addslashes(file_get_contents($image)); 

            
//             $sql= "INSERT INTO student(STUD_ID,Firstname,Lastname,Gender,Orgins,Guardian_Names,image,InsertedDate)VALUES 
//     ('','$fname','$lname','$gender','$address','$parentname','$imgContent', NOW())";
 
// if ($con->query($sql) === TRUE) {
//     echo"<script> alert('student inserted successful!!');</script>"; 
// } else {
//     echo"<script> alert('failed!!');</script>"; 
// }
     
//  $con->close();
           
//     }}}
     ?>

<?php
if(isset($_POST['submit'])){
    include('connection.php');
$fname= $_POST["fname"];
$lname = $_POST["lname"];
$gender = $_POST["gender"];
$address = $_POST["address"];
$parentname = $_POST["parentname"];
//$file = $_FILES['image']['tmp_name'];
$image = $_FILES['image']['name']; 
move_uploaded_file($_FILES["image"]["tmp_name"],"../uploads/".$_FILES["image"]["name"]);

   

 // $imgContent = addslashes(file_get_contents($image)); 


  if(!empty($fname) || !empty($lname) || 
    !empty($gender) ||!empty($address) ||!empty($parentname) ){


        $con = mysqli_connect($host, $user, $password, $db_name);  
        if(mysqli_connect_errno()) {  
            die("Failed to connect with MySQL: ". mysqli_connect_error());  
        }  
        else{
// $image = addslashes(file_get_contents ($_FILES['image'] ['tmp_name']));
// $image_name = addslashes ($_FILES['image'] ['name']);
// $image_size = getimagesize($_FILES['image']['tmp_name']);
        
//  if ($image_size==FALSE)
// echo "That is not an image.";

// else 
// {
$sql ="INSERT INTO student(STUD_ID,Firstname,Lastname,Gender,Orgins,Guardian_Names,image,InsertedDate)VALUES 
('','$fname','$lname','$gender','$address','$parentname','$image', NOW())";

echo"<script> alert('student inserted successful!!');</script>";


}
if ($con->query($sql) === TRUE) {
   echo"<script> alert('student inserted successful!!');</script>"; 
 } else {
    echo"<script> alert('failed!!');</script>"; 
}
     
 $con->close();
           
    }}
 

?>