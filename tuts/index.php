<?php 

// FOR LOOP
// for($i = 0; $i < 5; $i++){
//   echo $i;
// }

// $blogs = ['blog1', 'blog2', 'blog3', 'blog4'];

// for($i = 0; $i < count($blogs); $i++){
//        
// }

// FOR EACH LOOP - use when you don't know the length of something
  // $blogs = ['blog1', 'blog2', 'blog3', 'blog4'];

  // foreach($blogs as $blog){
  //   echo $blog;
  // }

  $ninjas = ['shaun', 'ryu', 'yoshi'];

  // for ($i= 0; $i < count($ninjas); $i++){
  //   echo $ninjas[$i] . '<br />'; 
  // }

  // foreach($ninjas as $ninja){
  //   echo $ninja . '<br>';
  // }

  $products = [
    ['name'=> 'shiny star', 'price' => 20],
    ['name'=> 'grenn shell', 'price' => 10],
    ['name'=> 'red shell', 'price' => 15],
    ['name'=> 'gold coin', 'price' => 40],
    ['name'=> 'banana skin', 'price' => 2]
  ];

  // foreach ($products as $product){
  //   echo $product['name'] . ' ' . $product['price'] . '<br>';
  // }

  // WHILE LOOP
  // $i = 0;
  // while ($i < count($products)){
  //   echo $products[$i]['name'] . '<br>';
  //   $i++;
  // }



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
  <h1>Products</h1>
  <ul>
    <?php foreach ($products as $product){ ?>
       <li> 
       <h2><?php echo $product['name']; ?></h2>
       <p><?php echo $product['price']; ?></p>
       </li>
       <?php } ?>
  </ul>
 
</body>
</html>