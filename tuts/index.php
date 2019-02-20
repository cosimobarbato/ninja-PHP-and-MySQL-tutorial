<?php 

// CONDITIONAL STATEMENTS
// $price = 40;

// if ($price < 10){
//   echo 'if condition is met';
// } else if ($price < 20) {
//   echo 'elseif condition is met';
// } else {
//   echo 'the condition is not met';
// }

$products = [
  ['name' => 'shiny star', 'price' => 20],
  ['name' => 'green shell', 'price' => 10],
  ['name' => 'red shell', 'price' => 15],
  ['name' => 'gold coin', 'price' => 5],
  ['name' => 'lightening bolt', 'price' => 40],
  ['name' => 'banana skin', 'price' => 2]
];

foreach ($products as $product){
  if($product['price'] < 15 && $product['price'] > 2){
    echo $product['name'] . ' ' . $product['price'] . '<br>';
  }
}

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