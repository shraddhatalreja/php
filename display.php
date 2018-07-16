<style>
td{
	padding:10px;
}


</style>



<?php

include("connection.php");
error_reporting(0);

$query = "SELECT * FROM  FORM1 ";

  $data = mysqli_query($conn,$query);

  $total = mysqli_num_rows($data);
  echo $total;
  
  
  
  
  if($total  != 0)
  {
	  ?>

<table>
<tr>
<th> name </th>
<th> image </th>
<th> email </th>
<th colspan="2"> Operations</th>
</tr>


	  
	  <?php
	  while($result =  mysqli_fetch_assoc($data))
	  { echo "<tr>
<td> ".$result{'name'}. " </td>
<td><a href='$result[picsource]'><img src=' ".$result{'picsource'}. " ' height='100' width='100'/></a></td>
<td> ".$result{'email'}." </td>
<td> <a href='update.php?na=$result[name] & em=$result[email]'> Edit  </a> </td>
<td><a href='delete.php?na=$result[name] & em=$result[email]'onClick='checkdelete()'> Delete</a></td>

</tr>
";
       } 
  }
  else{
	  
	  echo "no recoord found";
  }
  
 
  ?>
  
  </table>
  <script>
  
  function checkdelete()
  {
         return	  confirm('are you sure you want to delte this data???');
  }
  </script>