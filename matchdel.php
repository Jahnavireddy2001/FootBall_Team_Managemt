<?php
  $con= new mysqli("localhost","root","","football");
        if($con->connect_error){
        die("failed to connect : ".$con->connect_error);
    }
	$id=$_GET['id'];
$query = "DELETE from football.fix where id = '$id'";
$data = mysqli_query($con,$query);
if($data)
{
echo '<script>alert("Data Deleted Successfully .")</script>';
echo'<script>location="match.php"</script>';
}
else {
    echo '<script>alert("Could no delete data.")</script>';
  echo'<script>location="match.php"</script>';
}
 ?>