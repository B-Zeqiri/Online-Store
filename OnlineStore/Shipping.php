<?php
  include('connection.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1" charset=" UTF-8">
  <title>Shipping</title>
  <!-- Link to Bootstrap stylesheet -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <!-- Link to custom CSS stylesheet -->
  <link rel="stylesheet" href="shippingstyle.css">

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  

</head>
<body>
  <?php
    include('header.php');
  ?>

  <?php
// Retrieve the product ID from the query parameter
$product_id = $_GET['product_id'];

// Fetch the product details from the database
$sql = "SELECT * FROM producte WHERE ID = $product_id";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  $row = mysqli_fetch_assoc($result);
  $product_name = $row['Name'];
  $product_description = $row['Description'];
  $product_price = $row['Price'];
  
  // Base64 encode the image
  $product_img = base64_encode($row['Img']);
} else {
  // Handle the case where the product ID is invalid or not found
}

// Close the database connection
mysqli_close($conn);
?>

<!-- Display the product details in the left side of the page -->
<div class="container">
      <!-- Product component -->
      <div class="product-card">
        <div class="card-body">
          <!-- Decode the Base64 encoded image and display it -->
          <img class="card-img-top img-fluid" src="data:image/jpeg;base64,<?php echo $product_img; ?>" alt="<?php echo $product_name; ?>">
          <h5 class="card-title mt-3"><?php echo $product_name; ?></h5>
          <p class="card-text"><?php echo $product_description; ?></p>
        </div>
        <div class="card-footer">
          <p class="text-muted float-right mt-2">From $<?php echo $product_price; ?></p>
        </div>
      </div>
       
      <!-- Shipping component -->
      <?php
  include('shippingForm.php');
?>
      
    </div>
    
<!-- Link to custom JS stylesheet -->
<script src="script.js"></script>
</body>
</html>
