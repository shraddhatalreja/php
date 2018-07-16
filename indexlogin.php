<?php
include("connection.php");
error_reporting(0);
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

<form  action="" method="post" enctype="multipart/form-data">

<div class=" form-group">
<label>Username:</label>
<input type="text" name="name" class="form-control text" placeholder="Enter Username">
</div>
<div class=" form-group">
<label>Email:</label>
<input type="email" name="email" class="form-control text" placeholder="Enter Email">
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

<form  action="" method="post" enctype="multipart/form-data">
Upload Image<input type="file" name="uploadfile" value=""/>
<div class="form-group">
<input type="submit" class="btn btn-primary " value="submit">
<input type="reset" class="btn btn-danger " value="reset">
</div>
</div>

</form>
<?php
if($_POST{'submit'})
{
  
	
	if($na!="" &&   $em!=""  && $filename!=""  )
	{
	
    


	}
	else
	{
		echo "all fields are required";
	}
}

  $na = $_POST{'name'};
  $em = $_POST{'email'};
$filename=$_FILES{"uploadfile"}["name"];
$tempname=$_FILES{"uploadfile"}["tmp_name"];
$folder="form1/".$filename;
move_uploaded_file($tempname,$folder);

            $query="INSERT INTO FORM1 VALUES('$na','$em','$folder')";

    $data=mysqli_query($conn,$query);
     if($data)
       {
	   echo "data inserted into database";}

?>
</body>
</html>