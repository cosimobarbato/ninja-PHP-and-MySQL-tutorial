<?php 

$stringOne = 'my email is ';
$stringTwo = 'cbarb001@gmail.com';

// echo $stringOne . $stringTwo;

$name = 'Mario';
// echo 'Hey, my name is ' . $name . '.';

// Use double quotes to insert variables directly inside strings 
// echo "Hey my name is $name";


// use backslash \ to esape characters
// echo "the ninja screamed \"waaaaa\"";

// or you can use double quotes inside of single quotes so it does not close the string early
// echo 'the ninjas screamed "waaaaaa"';

// use the following to find character in a string
// echo $name[0];


// strlen function finds the length of a string
// echo strlen($name);

// strtoupper changes string to uppercase
// echo strtoupper($name);

// change string to all lower case
// echo strtolower($name);

// replaces certain things in string
echo str_replace('M','W', $name);



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