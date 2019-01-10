<?php
   include('config.php');
   session_start();
   
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($db,"select * from logins where username = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
      $active = $row['active'];
$name = $row['name'];
   
$password = $row['password'];
$email = $row['username'];
$dept_email = $row['dept_email'];
$desg =$row['desg'];
$phone=$row['phone'] ;
$password=$row['password'];
   if(!isset($_SESSION['login_user'])){
      header("location:index.php");
   }
?>