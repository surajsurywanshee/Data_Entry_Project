<?php 

include 'connect.php';



   $username=$_POST['username'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $password=md5($password);
    $Id;
    
     $checkEmail="SELECT * From sign_up_info where email='$email'";
     $result=$conn->query($checkEmail);
     if($result->num_rows>0){
        echo "Email Address Already Exists !";
     }
     else{
        $insertQuery="INSERT INTO sign_up_info VALUES ('$Id','$username','$email','$password')";
            if(mysqli_query($conn, $insertQuery)){
                header("location: index.php");
               //  echo "Error:".$conn->error;
            }
            else{
                echo "Error:".$conn->error;
               //  header("location: Home.php");
            }
     }

?>