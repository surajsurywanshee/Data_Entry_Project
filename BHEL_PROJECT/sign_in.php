<?php
include("connect.php");

   $username = $_POST['username'];
   $password=$_POST['password'];
   $password=md5($password) ;
   
   $sql="SELECT * FROM sign_up_info WHERE username='$username' and password='$password'";
   $result = mysqli_query($conn,$sql);
//    $stmt->bind_param("ss",$username ,$password);
//     if ($stmt->execute()) {
//         # code...
//         $result = $stmt->get_result();
//         if ($result->num_rows >0) {
//             # code...
//             session_start();
//             $row=$result->fetch_assoc();
//             $_SESSION['email']=$row['email'];
//             header("Location: entry.php");
//             exit();
//         }
//         else{
//             echo "Not Found, Incorrect Email or Password";
//         }
//     }

   if($result->num_rows>0){
    session_start();
    $row=$result->fetch_assoc();
    $_SESSION['email']=$row['email'];
    header("Location: entry.php");
    exit();
   }
   else{
    echo "Not Found, Incorrect username or Password";
   }

   ?>