<?php
include("config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
       $username = $_POST['username'];
      $password = $_POST['password'];
       
      
     
      $sql = "SELECT * FROM logins WHERE username like '$username' and password like '$password'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
     
      $desg = $row['desg'];
      $count = mysqli_num_rows($result);
      
      // If result matched $username and $password, table row must be 1 row
		
      if($count == 1) {
         
         $_SESSION['login_user'] = $username;

if($desg == "level1" )
{
         header("location: home1.php");
}
else if ($desg =="level2")
{
header("location: home2.php");
}
else if ($desg =="level3")
{
header("location: home3.php");
}

}
      else {
         $error = "Invalid Id or Password";
      }
   }
?>

<html>
<head>
<title>Anurag Group of Institutions </title>

</head>
<style>

.navbar-xs { min-height:118px; height: 118px; background-color: #f8f8f8; }
.navbar-xs .navbar-brand{ padding: 0px 12px;font-size: 16px;line-height: 118px; background-color: #f8f8f8;}
.navbar-xs .navbar-nav > li > a {  padding-top: 0px; padding-bottom: 0px; line-height: 118px; background-color: #f8f8f8; }

#foot {
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    border: 1px solid;
    border-color: #c3ccdb;
    height: 20px;
    background-color: #f8f8f8;
    font-size: 12px;
}
#inside_foot{
    position: absolute;
    right: 0;
    //margin-top: -17px;
}
#left_foot {
    position: absolute;
    left: 0;
    //margin-top: -17px;
}
</style>
<head>
  <title>AGI</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-xs ">
 
    <div class="nav navbar-center">
     
     <center> <br><a href="#" class="navbar-center"><img src="final.png"></center> </a><br/>
    </div>
    
  </div>
</nav>
<body>
  <div class="container-fluid" ><center>
<h1 style="color:#1B68AE;"> Admission System </h1>
<div align = "center" >
         <div style = "width:300px; border: solid 1px #333333;background-color:#E1DEDD; " align = "left">
            <div style = "background-color:#003399; color: #f8f8f8; padding:3px;"><center><b>Login</b></center></div>
				
            <div style = "margin:30px;color:black;">
               
               <form action = "" method = "post">
                <center>  <label>Username  </label><input type = "text" name = "username" class = "box"/><br /><br />
                  <label>Password  </label><input type = "password" name = "password" class = "box" /><br/><br />
 <input type = "submit" value = " Login "/>&nbsp&nbsp<input type = "reset" value = " Reset "/>
  <br>               
<a href="password.php" target="_blank">Forgot Password</a></center>
               </form>
               
               <div style = "font-size:11px; color:black; margin-top:10px"><?php echo $error; ?></div>
					
            </div>
				
         </div>
			
      </div>


<div id="foot">
<div id="left_foot">
&nbsp&nbsp&copy; Anurag Group of Institutions, 2017
</div> 
<div id="inside_foot">
<strong>Courtesy</strong>: Dept. of Information Technology&nbsp &nbsp
</div> 
</div>
</body>
</html>