
<?php
include("connection.php");
error_reporting(0);
  $_GET{'na'};
 $_GET{'em'};

?>

<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title> BOOTSRAP LOGIN</title>
	<link rel="stylesheet" href="css/bootstrap.css" />
	<link rel="stylesheet" href="css/style.css" />
	
<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
<style type="text/css">
body{
background-image:url(1.jpg);}
#form{
background-color:#84e184;min-height:700px;
padding:5px 40px 40px 40px;
}
.registration{
font-size:55px;
font-family:Agency FB;
font-weight:700;
border-bottom-style:ridge;

}
.text{
height:43px;}
.label{
font-size-adjust:18px;
}
.btn-primary{
border-radius:0px;padding:10px;
width:48%;}

.btn-danger{
border-radius:0px;padding:10px;
width:48%;}
</style>


</head>
<body>

<div class="container">
<div class="row">
<div class="col-md-6 col-md-offset-3" id="form">
<center><b class="registration">Registration Form</b></center>

<form method="GET" action="">
<div class=" form-group">
<label>Username:</label>
<input type="text" name="name"  value="<?php  echo $_GET{'na'};

?> "class="form-control text" placeholder="Enter Username">
</div>
<div class=" form-group">
<label>Email:</label>
<input type="email" name="email"  value="<?php    echo $_GET{'em'}; ?>" class="form-control text" placeholder="Enter Email">
</div>
<div class=" form-group">
<label>Password:</label>
<input type="password" name="pass" class="form-control text" placeholder="Enter Password">
</div>
<div class=" form-group">
<label>Mobile no.:</label>
<input type="text" name="mobile" class="form-control text" placeholder="Enter Mobile No.">
</div>
<div class=" form-group">
<label>Date of birth:</label>
<input type="date" name="dob" class="form-control text" placeholder="">
</div>
<div class="form-group">
<label>Select Gender:</label>

<select class="form-control text ">
<option value="Male"> Male</option>

<option value="Female"> Female</option></select>
<input type="text"name="gender"
</div>
<div class="form-group">
<label>Address:</label>
<textarea class="form-control " rows="6"></textarea>
<input type="text" name="address">

</div>
<div class="form-group">
<input type="submit"    name="submit" class="btn btn-primary " value="update">
<input type="reset" class="btn btn-danger " value="reset">
</div>
</div>

</form>
<?php
if($_GET{'submit'})
{
	$name=$_GET{'name'};
	$email=$_GET{'email'};
	
 $query= " UPDATE FORM1 SET EMAIL='$email' WHERE NAME='$name'";
$data= mysqli_query($conn,$query);
if($data)
{
	echo "<font color='green'>record updated succeessfully <a href='display.php'>check updated list here</a>";
}
	else
	{
		echo "<font color='red'>record not updated  <a href='display.php'>check updated list here</a>";
	}
}
else
{
	echo " <font color='blue'>click on update to saave the changes";
}	
?>
</body>
</html>