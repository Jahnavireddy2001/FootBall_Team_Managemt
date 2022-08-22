<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>

  </head>
  <body>
    <?php
      echo "Hello World";
    ?>

<h2>Simple PHP program to add and divide two numbers</h2>
<form>
Enter First Number:
<input type="number" name="number1" /><br><br>
Enter Second Number:
<input type="number" name="number2" /><br><br>
<input  type="submit" name="submit" value="Calculate">
</form>
<?php
@$n1=$_GET['number1'];
@$n2=$_GET['number2'];
$a1=$n1+$n2;
$a4=$n1/$n2;
echo "$n1 + $n2 = ".$a1;
?>
<br/>
<?php
echo "$n1 / $n2 = ".$a4;
?>
  </body>
</html>
