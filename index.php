<?php 

// MULTI-DIMENSIONAL ARRAYS WITH INDEX

// $blogs = [
//   ['mario party', 'mario', 'lorem', 30],
//   ['mar kart cheats', 'toad', 'lorem', 25],
//   ['zelda hidden cheats', 'link', 'lorem', 50]
// ];

// print_r($blogs[1][0]);

// MULTI-DIMENSIONAL ARRAYS WITH ASSOCIATIVE ARRAYS

$blogs = [
  ['title'=>'mario party', 'author'=>'mario', 'content'=>'lorem','likes'=>30],
  ['title'=>'mar kart cheats', 'author'=>'toad', 'content'=>'lorem','likes'=>25],
  ['title'=>'zelda hidden cheats', 'author'=>'link', 'content'=>'lorem','likes'=>50]
];

// echo $blogs[2]['author'];
// echo count($blogs);

$blogs[] = ['title'=>'castle party', 'author'=>'peach', 'content'=>'lorem', 'likes'=>100];
// print_r($blogs);

// take something off of an array
$popped = array_pop($blogs);
print_r($popped);
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