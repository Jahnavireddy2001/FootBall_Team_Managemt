<?php
        $con= new mysqli("localhost","root","","football");
        if($con->connect_error){
        die("failed to connect : ".$con->connect_error);
    }
	$jersy_no=$_GET['jersy_no'];
$query = "DELETE from football.team  where jersy_no = '$jersy_no'";
$data = mysqli_query($con,$query);
if($data)
{
echo '<script>alert("Data Deleted Successfully .")</script>';     
echo'<script>location="team.php"</script>';
}
else {
    echo '<script>alert("Could no delete data.")</script>'; 
  echo'<script>location="team.php"</script>';
}
 ?>