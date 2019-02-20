<?php 
  // add file
  // include('ninjas.php');

  // or add file with require
  // require('ninjas.php');

  // can write without the ()
  include 'ninjas.php';
  require 'ninjas.php';


  echo 'end of php';

  // if there is no file, include will keep running the code below vs require will throw fatal error


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

<?php include('content.php');?>
<?php include('content.php');?>
<?php include('content.php');?>
 
</body>
</html>