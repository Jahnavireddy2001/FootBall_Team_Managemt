<?php
        $con= new mysqli("localhost","root","","football");
        if($con->connect_error){
        die("failed to connect : ".$con->connect_error);
    }
	$player_id=$_GET['player_id'];
  echo "$player_id";

  $query ="DELETE from football.players where player_id = '$player_id'";
  $data = mysqli_query($con,$query);
if($data)
{
echo '<script>alert("Data Deleted Successfully .")</script>';
echo'<script>location="allplayers.php"</script>';
}
else {
    echo 'naaa';

}
 ?>