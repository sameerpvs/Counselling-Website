<?php
include('session.php');
if($desg != "level3")
{
header("location:index.php");

}
?>

<?
if( $_POST ){

 
$type =$_POST['type'];
$namef = $_POST['namel'];
$unf = $_POST['usernamel'];
$pass = $_POST['passl'];
$mbf =$_POST['mobilel'];

$desgf =$_POST['desgl'];
$emailf =$_POST['emaill'];
if($type=="add")
{
$sql="INSERT INTO  `logins` (`username` ,`password` ,`name` ,`desg` ,`phone` ,`email`,`cno`) VALUES ('$unf',  '$pass', '$namef','$desgf', '$mbf','$emailf','0')";
$result = mysqli_query($db,$sql);
if (!$result) {
   $msg= " failed to insert into database,kindly check the values and try again ";

}
else
{
$msg= " $namef Successful inserted into database ";

}
}
else if($type=="remove")
{

$sql="DELETE FROM `logins` WHERE `logins`.`username` = '$unf'";
$result = mysqli_query($db,$sql);
if($result)
{
$msg= " $unf Successful deleted from database ";


}

}

}
?>
<html>
<style>

.right {
    text-align: right;
    float: right;
}

#foot {
    position: fixed;
    bottom: 0;
    left: 0;
    right: 0;
    border: 1px solid;
    border-color: #c3ccdb;
    height: 20px;
    font-size: 12px;
    background-color: #f8f8f8;
}
#left{
    position: absolute;
    left:0;
    border: 1px solid black;
    margin-top: -18px;
    width: 150px;
    text-align: center;
    height: 440px;
}
.sidenav {
    //height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    //top: 0;
    left: 0;
    background-color: #1768b2;
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 50px;
}

.sidenav a {
    padding: 5px 5px 5px 32px;
    text-decoration: none;
    font-size: 19px;
    color: white;
    display: block;
    transition: 0.3s
}

.sidenav a:hover, .offcanvas a:focus{
    color: white;
      font-weight: bold;
}

.sidenav .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
#head
{
margin-top: -50px;
}
.navbar-xs { min-height:118px; height: 118px; background-color: #f8f8f8 !important; }
.navbar-xs .navbar-brand{ padding: 0px 12px;font-size: 16px;line-height: 118px; background-color: #f8f8f8;}
.navbar-xs .navbar-nav > li > a {  padding-top: 0px; padding-bottom: 0px; line-height: 118px; background-color: #f8f8f8; }
#inside_foot{
    position: absolute;
    right: 0;
    margin-top: -17px;
}
.well{
   width: 500px;
   border: 4px solid grey !important;
   //margin-top: -20px;
}

</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script language="JavaScript" src="gen_validatorv31.js" type="text/javascript"></script>


<head>
  <title>Anurag Group of Instituions</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
</head>
<body>


<nav class="navbar navbar-xs " style=" background-color: #f8f8f8;">
  <div class="container-fluid">
<ul class="nav navbar-right">
<li class="active"> <strong><?php
echo "".$name."&nbsp&nbsp&nbsp" ;
?></strong> </li> </ul><br>
<div class="right">
        <a href="logout.php" align="right">Logout</a>
</div>
    <div class="nav navbar-center">
     <center> <a href="#" class="navbar-center"><img src="final.png"></center> </a><br/>
    </div>
    
  </div>
</nav>
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
<a href="home3.php">Home </a>
<a href="detail.php">Report</a>
<a href="add.php">User Management</a>
<a href="change.php">Change Password</a>
  </div>

<span style="font-size:25px;cursor:pointer" onclick="openNav()">&#9776; Menu</span>
<div id="head">
<center>
<br>

<h2 style="color: #1b68ae;">User Management</h2><hr>
<form method="post" name="Select" action="">
<strong><h4 style=" color: #0C6CAE;"><?php echo " <br> $msg"; ?></h4><strong>
<div class="well">

<input type="radio" name="type"  value="add" id="add1" checked="checked" onclick="check()">Add
<input type ="radio" name="type" value="remove" id="remove1" onclick="recheck()">Remove
<table>
<tr>
<th>
<br>Name: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</th><td><input type="text"  name="namel" id="name"> </td></tr>
<tr><th><br>UserName: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</th><td><input type="text"  name="usernamel" id="un"> </td></tr>
<tr><th><br>Password: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</th><td><input type="password"  name="passl" id="pass"> </td></tr>
<tr><th>
<br>Designation:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</th><td><select name="desgl" id="desg">
<option value="level1">Reception</option>
<option value="level2">Counsellor</option>

</select></td></tr>
<tr><th><br>Email: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</th><td><input type="text" name="emaill" id="email"></td></tr>
<tr>
<tr><th><br>Mobile: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</th><td><input type="number" name="mobilel" id="mobile"></td></tr>
<tr> 
<td colspan="2">
<center>
<input type="submit" value="submit"> <button type="button"  data-toggle="modal" data-target="#myModal">User Lookup</button></center></td></tr>


</table>

</div>

<div style="margin-right: -30px; margin-top: -10px;" id="help">



<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
<div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Users in databse</h4>
      </div>
      <div class="modal-body">

<?

 



$sql1 = "SELECT name,username from logins";




$result = mysqli_query($db,$sql1);



echo "


<table border='1'>
  <tr><th>S.NO</th>

<th>Name</th>
<th>Username</th> 

     </tr> ";



$count=1;
while($row = mysqli_fetch_array($result, MYSQL_ASSOC))
{

$dept2 = $row['dept'];
$name = $row['name'];
$username = $row['username'];

 


  echo "  
		
      <tr>
<td> $count</th>
<td>$name</th>
<td>$username</td>

  
     </tr>
     
";
$count++;

}

echo"</table> </div>";



?>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
</div>
<hr>
</form>

</div>
</center>
</div>

</body>

<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}

function printInfo(ele) {
    var openWindow = window.open("", "title", "attributes");
    openWindow.document.write(ele.previousSibling.innerHTML);
    openWindow.document.close();
    openWindow.focus();
    openWindow.print();
    openWindow.close();
}
</script>
<script>
function check()
{

document.getElementById('pass').disabled=false;
document.getElementById('name').disabled=false;
document.getElementById('un').disabled=false;
document.getElementById('email').disabled=false;
document.getElementById('desg').disabled=false;
document.getElementById('dept').disabled=false;
document.getElementById('mobile').disabled=false;
}
function recheck()
{
document.getElementById('name').disabled=true;
document.getElementById('un').disabled=false;
document.getElementById('email').disabled=true;
document.getElementById('desg').disabled=true;
document.getElementById('dept').disabled=true;
document.getElementById('mobile').disabled=true;
document.getElementById('pass').disabled=true;
}
</script>

<div id="printing">

<div nav navbar-fixed-bottom id="foot">
&nbsp&nbsp&copy; Anurag Group of Institutions, 2017 
<div id="inside_foot">
<strong>Courtesy</strong>: Dept. of Information Technology&nbsp&nbsp
</div>
</div>

</html>
