


<?php
if(isset($_POST['submit'])){
    include('connection.php');
$trimester= $_POST["Trimester"];
$academic = $_POST["academic"];
$facult = $_POST["Facult"];
$course = $_POST["course"];
$id = $_POST["id"];
$fname = $_POST["fname"];
$lname = $_POST["lname"];
$gender = $_POST["gender"];
$test = $_POST["test"];
$exam = $_POST["exam"];
$total=$test+$exam;
  if(!empty($trimester) || !empty($academic) || 
    !empty($facult) ||!empty($course) ||!empty($id) ||!empty($fname) ||!empty($lname) 
    ||!empty($gender) ||!empty($test) ||!empty($exam) ){


        $con = mysqli_connect($host, $user, $password, $db_name);  
        if(mysqli_connect_errno()) {  
            die("Failed to connect with MySQL: ". mysqli_connect_error());  
        }  
        else{

$sql ="INSERT INTO marks(id,trimester,academic,facult,course,STUD_ID,fname,lname,gender,Test,Exam,Total,Empo_id,InsertedDate)VALUES 
('','$trimester','$academic','$facult','$course','$id','$fname','$lname','$gender','$test','$exam',$total,'', NOW())";


}
if ($con->query($sql) === TRUE) {
   echo"<script> alert('mark inserted successful!!');</script>";
  
 } else {
    echo"<script> alert('failed!!');</script>"; 
}
     
 $con->close();
           
    }}
 

?>