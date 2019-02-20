<?php 

// CONTINUE & BREAK

$products = [
  ['name' => 'shiny star', 'price' => 20],
  ['name' => 'green shell', 'price' => 10],
  ['name' => 'red shell', 'price' => 15],
  ['name' => 'gold coin', 'price' => 5],
  ['name' => 'lightening bolt', 'price' => 40],
  ['name' => 'banana skin', 'price' => 2]
];

foreach ($products as $product){
  // if($product['name'] === 'lightening bolt'){
  //   break;
  // }

  if($product['price'] > 15){
    continue;
  }

  echo $product['name'] . '<br>';
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