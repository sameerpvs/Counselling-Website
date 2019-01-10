<?php
include('session.php');

 if($_SERVER["REQUEST_METHOD"] == "POST") 
{
$fname = $_POST['fname'];
$mname = $_POST['mname'];
$lname = $_POST['lname'];
$father = $_POST['father'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$tenth = $_POST['12'];
$percentage = $_POST['percentage'];
$rank = $_POST['rank'];  
$stream1 = $_POST['stream1'];
$stream2 = $_POST['stream2'];
$stream3 = $_POST['stream3'];
$r_remarks =$_POST['remarks'];
$address =  $_POST['address'];
$gender = $_POST['gender'];

$red_date= date(Ymd);


$sql= "INSERT INTO `info` (`fname`, `mname`, `lname`, `father`, `email`, `mobile`, `12`, `percentage`, `rank`, `gender`, `stream1`, `stream2`, `stream3`, `address`, `remarks`, `id`, `counsellor`, `reception`,`token`,`red_date`,`cs_date`,`r_remarks`,`status`,`admin`,`date`) VALUES ('$fname', '$mname', '$lname', '$father', '$email', '$mobile', '$tenth', '$percentage', '$rank', '$gender', '$stream1', '$stream2', '$stream3',  '$address', NULL, NULL, NULL, '$name',NULL,'$red_date',NULL,'$r_remarks',NULL,NULL,NULL)";
if(mysqli_query($db,$sql))
{
$msg="Submitted Successfully";
$sql2="Select * from info where `mobile`='$mobile'";
$result2= mysqli_query($db,$sql2);

while($row = mysqli_fetch_array($result2, MYSQL_ASSOC))
{
$id = $row['id'];
$stream1 =$row['stream1'];

$date = date(dm);

$token= "$stream1$date$id";

}

$sql13="UPDATE  `info` SET  `token` =  '$token' WHERE  `info`.`id` ='$id'";
$result3= mysqli_query($db,$sql13);

$msg1="  $fname 's token ID is  $token";

}
else
{
$msg="Error - the details are already found in our database. ";
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
 <a href="view.php">View token#</a>
 <a href="ch.php">Change Password</a>
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
<div style=" width:550px; color: #1B68AE; left:0;"><br><br><h3 id="head"><strong><center>Registration Form</center></strong> </h3><hr><h5 style="color:red;"><?  echo $msg;?></h5></div>
<div class="well">
<div class="table-responsive">
<table class="table-condensed">
<tr><td colspan="3"><center><h4 style="color:blue;"><?  echo $msg1 ;?></h4></center></td></tr>
<tr>
<td>
 <strong>First Name *</strong><input type="text" name="fname" id="fname" required title="please fill the field">
</td>

<td>
<strong>Middle Name: </strong><input type="text" name="mname" id="mname">
</td>
<td>
<strong>Last Name/Surname * </strong><input type="text" name="lname" id="lname" input pattern=".{3,}"   required title="3 characters minimum">
</td>
</tr>
<tr>
<td>
 <strong>Father Name *</strong><input type="text" name="father" id="father" required title="please fill the field">
</td>

<td>
<strong>Email  </strong><input type="text" name="email" id="email"  title="please fill the field" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
</td>
<td>
<strong>Mobile * </strong><input type="number" name="mobile" id="mobile" required title="please fill the field">
</td>
</tr>
<tr>
<td>
 <strong>10+2 Ht. No. </strong><input type="text" name="12" id="12"  title="please enter hall ticket no.">
</td>

<td>
<strong>Percentage *: </strong><input type="text" name="percentage" id="percentage" required title="please enter percentage(0-99)">
</td>
<td>
<strong>Rank  </strong><input type="number" name="rank" id="rank" pattern="[0-9]{6}">
</td>
</tr><tr>
<td colspan="1">
<strong>Gender : </strong> <select name="gender" id="gender" required><option value="Male" >Male</option><option value="Male" >Female</option></select>
</td>
<td colspan="2"><strong>Address </strong><textarea class="form-control" rows="2" name="address" id="address"  title="address need to be filled" style="width:465px;"></textarea></td>

</tr>
<tr>
<td>
<strong>Preferred Stream (1)*         </strong><select name="stream1" id="stream1" required>
<option value="CHEM">CHEMICAL</option>
<option value="CE">CIVIL</option>
<option value="CSE">CSE</option>
<option value="EEE">EEE</option>
<option value="ECE">ECE</option>
<option value="IT">IT</option>
<option value="MBA">MBA</option>
<option value="ME">ME</option>
<option value="PHARM">PHARM</option>
</select>
</td>
<td colspan="1">
<strong>Preferred Stream (2)         </strong><select name="stream2" id="stream2" ><option value=""></option>
<option value="CHEM">CHEMICAL</option>
<option value="CE">CIVIL</option>
<option value="CSE">CSE</option>
<option value="EEE">EEE</option>
<option value="ECE">ECE</option>
<option value="IT">IT</option>
<option value="MBA">MBA</option>
<option value="ME">ME</option>
<option value="PHARM">PHARM</option>
</select>
</td>

<td>
<strong>Preferred Stream (3)         </strong><select name="stream3" id="stream3" ><option value=""></option>
<option value="CHEM">CHEMICAL</option>
<option value="CE">CIVIL</option>
<option value="CSE">CSE</option>
<option value="EEE">EEE</option>
<option value="ECE">ECE</option>
<option value="IT">IT</option>
<option value="MBA">MBA</option>
<option value="ME">ME</option>
<option value="PHARM">PHARM</option>
</select>
</td>

</tr>


<tr>
<td colspan="3"><strong>Remarks </strong><textarea class="form-control" rows="2" name="remarks" id="remarks"  title="remarks need to be filled" style="width:740px;"></textarea></td>
</tr>

 <div class="form-group" id="submit">
<tr><td colspan="3">
  <center>
  <input type ="submit"  style="background-color:transparent" onclick="return confirm('Are you sure, you want to submit?')" value="Submit"> </center></td></tr>
</table>
</div> 
</form>
<center>
</div>
</div>
</div>
</div>
</div>
<br><br>
<div id="foot">
&nbsp&nbsp&copy; Anurag Group of Institutions, 2017 
<div id="inside_foot">
<strong>Courtesy</strong>: Dept. of Information Technology 
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
