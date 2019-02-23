<?php
  // check if submit button was pressed on the form using GET
  // if(isset($_GET['submit'])){
  //   echo $_GET['email'];
  //   echo $_GET['title'];
  //   echo $_GET['ingredients'];
  // }

  // check if submit button was pressed on the form using POST
  if(isset($_POST['submit'])){
    
    // check email
    if(empty($_POST['email'])){
      echo 'An email is required <br>' ;
    } else {
      echo htmlspecialchars($_POST['email']);
    }

    // check title
    if(empty($_POST['title'])){
      echo 'A title is required <br>' ;
    } else {
      echo htmlspecialchars($_POST['title']);
    }

    // check ingredients
    if(empty($_POST['ingredients'])){
      echo 'At least one ingredient is required <br>' ;
    } else {
      echo htmlspecialchars($_POST['ingredients']);
    }
  } // end of post check
?>

<!DOCTYPE html>
<html lang="en">
  <?php include 'templates/header.php'; ?>

<!-- Start Body -->

  <section class="container grey-text">
    <h4 class="center">Add a Pizza</h4>
    <form action="add.php" class="white" method="POST">
      <label>Your Email:</label>
      <input type="text" name="email">
      <label>Pizza Title:</label>
      <input type="text" name="title">
      <label>Ingredients (comma separated):</label>
      <input type="text" name="ingredients">
      <div class="center">
        <input class="btn brand z-depth-0" type="submit" name="submit" value="submit">
      </div>
    </form>
  </section>

<!-- End Body -->


  <?php include 'templates/footer.php'; ?>
</body>
</html>

<!-- ******NOTES****** -->
<!-- Use htmlspecialchars function to prevent XSS -->