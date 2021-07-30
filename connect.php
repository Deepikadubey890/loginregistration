<?php

session_start();
$connect = mysqli_connect('localhost', 'root','','registration') or die('connection error!');

if(isset($_POST['registration'])){

    $username = $_POST['username'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];

    $insert = mysqli_query($connect,"INSERT INTO student VALUES('$username','$mobile','$password')");
        
        if($insert){
            echo '<script> alert("Registration Successfully!");
            window.location = "../home.php";
            </script>';
            
        }
        else{
            echo  '<script> alert("Registration Failed!") </script>';
        }
    
}
if(isset($_POST['loginbtn'])){
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];

    $check = mysqli_query($connect, "SELECT username FROM student WHERE mobile ='$mobile'AND password='$password' ");
    if(mysqli_num_rows($check)>0){
        $fetch = mysqli_fetch_array($check);
        $username = $fetch['username'];
        $_SESSION['username']= $username;
        header("location:../routes/homepage.php");
        

    }
    else{
        echo  '<script> alert("Login Failed!") </script>';
    }
}
if(isset($_POST['logout'])){
    session_destroy();
    header("location:../");
}
?> 