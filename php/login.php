
<?php

session_start();


?>
	

<?php

include 'connection.php';

if(isset($_POST['login'])){
    
    $email = mysqli_real_escape_string($con,$_POST['email']);
    $password = mysqli_real_escape_string($con,$_POST['password']);
    
    $qry = "SELECT * FROM `acc_tbl` WHERE `Email` = '$email' AND `passwd` = '$password'";
    
    $run = mysqli_query($con,$qry);
    
    $row = mysqli_num_rows($run);

    


    if($row ==1 )
    {
        $data = mysqli_fetch_assoc($run);
        $id = $data['id'];
        $username = $data['username'];
        
        
        $_SESSION['uid']=$id;
        $_SESSION['username']=$username;
        ?>
           <script>
            alert('successfull');
            window.open('../home.php','_self')
           // window.open('../dashboard.php','_self')
</script>
      
        <?php
        
    }

    else
    {
        ?>
        <script>
            alert('Username Or Password Dont match');
            window.open('..//index.php','_self')
</script>
        <?php
    }
}

?>

