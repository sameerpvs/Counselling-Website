<?

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
    position: relative;
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
input.radio { display: inline; }
#form
{
margin-top:-100px;
margin-left: -60px;
}
.table
{
margin-top:-10px !important;
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
    width: 850px;
    margin-top: -30px;
    border: 5px solid !important ;
    border-color: grey !important ;
    margin-left: -130px;
}

label{display:inline-block;}
input{display:block;}
</style>
<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}

</script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script language="JavaScript" src="gen_validatorv31.js" type="text/javascript"></script>
<head>
  <title>AGI</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<script>https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js</script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>


</head>
<body>

<nav class="navbar navbar-xs ">
  <div class="container-fluid">
       <ul class="nav navbar-right">
        <li class="active"> <strong><?php echo "".$name."&nbsp&nbsp&nbsp" ;?></strong> </li> 
        </ul><br>
      <div class="right">
        <a href="logout.php" align="right">Logout</a>
       </div>
    <div class="nav navbar-center">
     <center> <a href="#" class="navbar-center"><img src="final.png"></center> </a><br/>
    </div>
    
  </div>
</nav>

<div id="mySidenav" class="sidenav">
 <a href="home3.php">Home</a>
<a href="3view.php">View Token #</a>
<a href="detail.php">Report</a>
 <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  

</div>

<span style="font-size:25px;cursor:pointer" onclick="openNav()">&#9776; Menu</span>



<div class="container-fluid" id="form-container">
<div class="row">
<div class="col-xs-offset-4 col-xs-4 ">
<center>
<br><br>
<div id="form">
<form name="Apply" method="post" action=" ">
<div style=" width:550px; color: #1B68AE; left:0;"><br><br><h3 id="head"><strong><center>Retrieval Form</center></strong> </h3><br><h5 style="color:red;"><?  echo $msg;?></h5></div>
<div class="well" style="border-bottom:0px !important">
<div class="table-responsive">
<table class="table-condensed">
<tr>
<td>
 <strong>Enter Token / Mobile No. / Last name / Surname* </strong><br><center><input type="text" name="tenth" id="tenth" required title="please fill the field"></center>
</td>
</tr>
 <div class="form-group" id="submit">
<tr><td >
  <center>
  <input type ="submit" name="sub"  style="background-color:transparent"  value="Search"> </center></td></tr>
</table>
</div> 
</div>
</div>

</form>
</div>
</center>



<br><br>
<div id="foot">
&nbsp&nbsp&copy; Anurag Group of Institutions, 2017 
<div id="inside_foot">
<strong>Courtesy</strong>: Dept. of Information Technology 
</div>

</div>
 </div>
 </div>
 </div>
</body>

   


<script language="JavaScript">
var frmvalidator  = new Validator("Apply");

frmvalidator.addValidation("fdate","req","Please provide from date");

frmvalidator.addValidation("workload","req","Please specify to whom the workload is adjusted to");
frmvalidator.addValidation("purpose","req","Please specify the reason");
frmvalidator.addValidation("days","req","Please enter number of days");
frmvalidator.addValidation("mobile","req","Please enter your mobile number");

</script>
 


</html>
<?php


 if($_SERVER["REQUEST_METHOD"] == "POST") 
{



if($_POST['sub']){

$tenth = $_POST['tenth'];




 
$sql2="Select * from info where `mobile`='$tenth' or `lname` like '$tenth' or `token` like '$tenth' ";
$result2= mysqli_query($db,$sql2);

while($row = mysqli_fetch_array($result2, MYSQL_ASSOC))
{

$fname = $row['fname'];
$mname = $row['mname'];
$lname = $row['lname'];
$father = $row['father'];
$email3 = $row['email'];
$mobile = $row['mobile'];
$tenth = $row['12'];
$percentage = $row['percentage'];
$rank = $row['rank']; 
$gender = $row['gender']; 
$stream1 = $row['stream1'];
$stream2 = $row['stream2'];
$stream3 = $row['stream3'];
$stream4 = $row['stream4'];
$address =$row['address'];
$id1 = $row['token'];

}




    
}






}
?>


<html>
<div class="container-fluid" id="form-container">
<div class="row">
<div class="col-xs-offset-4 col-xs-4 ">
<center>
<br><br>
<div id="form">

<div class="well" style="margin-top:25px;border-top:0px !important;">
<div class="table-responsive">
<table class="table-condensed" >

<tr>
<td colspan="3">
 <center><strong>Token Number </strong><input type="text" name="12" id="12" value="<? echo $id1 ;?>" disabled></center>
</td>
</tr>
<tr>
<td>
 <strong>First Name *</strong><input type="text" name="fname" id="fname" value="<? echo $fname ;?>" disabled >
</td>

<td>
<strong>Middle Name </strong><input type="text" name="mname" id="mname" value="<? echo $mname;?>" disabled>
</td>
<td>
<strong>Last Name/Surname *</strong><input type="text" name="lname" id="lname" value="<? echo $lname; ?>" disabled>
</td>
</tr>
<tr>
<td>
 <strong>Father's Name </strong><input type="text" name="father" id="father" value="<? echo $father ;?>" disabled>
</td>

<td>
<strong>Email </strong><input type="text" name="email" id="email" value="<? echo $email3 ;?>" disabled>
</td>
<td>
<strong>Mobile * </strong><input type="number" name="mobile" id="mobile" value="<? echo $mobile ;?>" disabled>
</td>
</tr>


 
</table>
</div> 

<center>
</div>
</div>
</div>





</html>