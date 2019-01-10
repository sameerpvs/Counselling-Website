<?php
include('session.php');
if($desg != "level3")
{
header("location:index.php");
}

 


?>

<html>
<style>
.right {
    text-align: right;
    float: right;
}
#foot {
   
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
    padding-top: 60px;
}

.sidenav a {
    padding: 8px 8px 8px 32px;
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
#main{
margin-top:-50px;
}
.navbar-xs { min-height:118px; height: 118px; background-color: #f8f8f8; }
.navbar-xs .navbar-brand{ padding: 0px 12px;font-size: 16px;line-height: 118px; background-color: #f8f8f8;}
.navbar-xs .navbar-nav > li > a {  padding-top: 0px; padding-bottom: 0px; line-height: 118px; background-color: #f8f8f8; }
#inside_foot{
    position: absolute;
    right: 0;
    margin-top: -17px;
}
.well{
    border: 1px solid grey !important;
    width: 90%;
}
td{
     border-spacing: 20px;
    //border-collapse: separate;
}
table{
   font-size: small !important;
}
</style>
<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}
</script>

<head>
  <title>Anurag Group of Institutions</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>
<nav class="navbar navbar-xs ">
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

<div class="nav navbar-fixed-bottom" id="foot">
&nbsp&nbsp&copy; Anurag group of institutions 2017 
<div id="inside_foot">
<strong>Courtesy</strong>: Dept. of Information Technology&nbsp&nbsp 
</div>
</div>
  
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
<a href="home3.php">Home</a>

<a href="detail.php">Report</a>
<a href="add.php">User Management</a>
<a href="change.php">Change Password</a>

  </div>

<span style="font-size:25px;cursor:pointer" onclick="openNav()">&#9776; Menu</span>
<div id="main">
<center><br><br><h3 style="color: #1b68ae;"><b>Details </b></h3><br></center>
<form action="" method="post">


</form>
<?
$sql= "Select * from `info`   ";


$result = mysqli_query($db,$sql);
$rwno = mysqli_num_rows($result);

if($rwno != 0)
{

echo "
<center>
<div class='well'>
<div class='table-responsive'> 
<center><table class='table' border='1'>


  <tr>  <tr><th>#</th>
<th><center>Name</center></th>
<th>% </th>
<th> Rank </th>
<th>Stream 1</th>
      <th>Stream 2</th>
  <th>Stream 3</th>
 <th>Token </th>

      <th>Reg Remarks</th>
<th>C- Date's</th>
 <th>C- Remarks</th> 
<th>C- Name</th>
<th>Admin Remarks</th>  
<th>Admission Status</th>    
     </tr></center>
    
";
}
 echo '<form method ="post" action="">';
$count=1;
while($row = mysqli_fetch_array($result, MYSQL_ASSOC))
{

	$token= $row['token'];
  $fname = $row['fname'];
 $mname = $row['mname'];
 $lname = $row['lname'];
$percentage = $row['percentage'];
$rank=$row['rank'];
$stream1=$row['stream1'];
  $stream2 = $row['stream2'];
$stream3=$row['stream3'];
  $stream4 = $row['stream4'];
  $r_remarks = $row['r_remarks'];
$red_date= $row['red_date'];
$cs_date=$row['cs_date'];
$cs_name=$row['counsellor'];
$remarks=$row['remarks'];
$status=$row['status'];
$admin=$row['admin'];
$date=$row['date'];
 $date3 = date("d-m-Y", strtotime($red_date));


 $date4 = date("d-m-Y", strtotime($cs_date));

$nam ="$fname $mname $lname";
  echo "  
	<center>	
      <tr>
<td>$count</td>

<td>$nam</center></td>
<td>$percentage</td>
<td>$rank</td>
<td>$stream1</td>
      <td>$stream2</td>
<td>$stream3</td>
<td>$token</td>

      <td>$r_remarks</td>
<td>$date</td>

 <td>$remarks</td> 
<td>$cs_name</td>
<td>$admin</td> 
 <td>$status</td>
    </center> 
";

$count++;

}

echo" </table> </div></div>";
if($count < 2)
{
echo "<center><h4>No Entries </h4><center>";
}
else { echo "<br><br><br> ";}

?>
</div>
</div>
</center>
</body>
</html>




