<?php 

$name = 'yoshi';

// INDEXED ARRAYS - use index of an array to count, add, or overwrite
$peopleOne = ['shaun', 'crystal', 'ryu'];
// echo $peopleOne[0];

$peopleTwo = array('ken', 'mark');
// echo $peopleTwo[1];

$ages = [20, 30, 40, 50];
// print readable, you can't just do echo $ages because echo is expecting a string, use print readable instead
// print_r($ages);

// overwrite value to array
// $ages[1] = 15;
// print_r($ages);

// add a new value to the end of an array
// $ages[] = 60;
// print_r($ages);

array_push($ages, 70);
// print_r($ages);

// count how many items are in an array
// echo count($ages);

// merge two arrays
$peopleThree = array_merge($peopleOne, $peopleTwo);
// print_r($peopleThree);

// ASSOCIATIVE ARRAYS - key & value pairs

$ninjasOne = ['shaun' => 'black', 'mario' => 'orange', 'luigi' => 'brown'];
// echo $ninjasOne['luigi'];

$ninjasTwo = array('bowser' => 'green', 'peach' => 'yellow');
$ninjasTwo['wario'] = 'purple';

// update value 
// $ninjasTwo['peach'] = 'pink';
// print_r($ninjasTwo['peach']);

// count items in the array
// echo count($ninjasTwo);

// merge arrays
$ninjasThree = array_merge($ninjasOne, $ninjasTwo);
print_r($ninjasThree);

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
  
</body>
</html>