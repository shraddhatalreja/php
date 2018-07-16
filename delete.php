<?php
include("connection.php");
$name=$_GET{'na'};
$query="DELETE FROM FORM1 WHERE NAME='$name'";
$data=mysqli_query($conn,$query);
if($data)
{
	echo "<script> alert('record deleted')</script>";
	?>
	
	<META HTTP-EQUIV="Refresh" content="0; url=http://localhost/phptutorial/display.php">
	<?php
}
else 
{
	echo "<font color='red'>sorry delete process failed";
}
?>
