<?php 

$name = "Yoshi";
$age = 30;
// $name = "Mario";

// defining a constant you need to use the following funciton
// constant cannot be overwritten
define('GENDER', 'Male');

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>my first PHP file</title>
</head>
<body>
  <h1><?php echo $name?> is <?php echo $age ?> and is a <?php echo GENDER ?></h1>
</body>
</html>