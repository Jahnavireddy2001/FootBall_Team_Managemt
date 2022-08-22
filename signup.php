<html>
<head>
    <title>Signup @ manutd</title>
    <link rel="stylesheet" type="text/css" href="signstyle.css">
</head>    
    <body>
        <div class="loginbox">
         <img src="https://i.ibb.co/5vZyLnk/logo.jpg" alt="logo" class="avatar" >
            <h1>SIGNUP FORM</h1>
            <form action="" method="post">
                <p><br>USERNAME</p>
                <input type="text" name="username" placeholder="Enter username" onkeydown="return /[a-z]/i.test(event.key)" required>
                <p><br>Age</p>
                <input type="text" name="age" placeholder="Enter Age" onkeydown="return /[0-9]/i.test(event.key)" required>
                <p><br>Phone number</p>
                <input type="text" name="phno" placeholder="Enter Phone Number" onkeydown="return /[0-9]/i.test(event.key)" required>
                <p><br>Email</p>
                <input type="email" name="email" placeholder="Enter Email" required>
                <p><br><br>PASSWORD</p>
                <input type="password" name="password" placeholder="Enter password"required><br><br><br>
                <input type="submit" name="SignIn" value="SignIn" > 
            </form>
        </div>
        <?php
        $con= new mysqli("localhost","root","","football");
        if($con->connect_error){
        die("failed to connect : ".$con->connect_error);
    }
  if(isset($_POST['SignIn']))
  {
    $username=$_POST['username'];
    $age=$_POST['age'];
    $phno=$_POST['phno'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $result = "INSERT INTO football.registered (username,age,phno,email,password) values('$username','$age','$phno','$email','$password')";
    if ($con->query($result) === TRUE)
    {
        echo '<script>alert("Signup Successfully!")</script>';
        echo'<script>location="index.html"</script>	';
    }
    else
    {
        echo '<script>alert("Signup unsuccessful")</script>';
      echo'<script>location="signup.php"</script>';
    }
  }
        ?>
    </body>
</html>