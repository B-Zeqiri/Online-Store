<?php
  include('connection.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>MoonSun Online Store</title>
  <!-- Link to Bootstrap stylesheet -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <!-- Link to custom CSS stylesheet -->
  <link rel="stylesheet" href="style.css">
  <!-- Link to Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

</head>
<body>
  <?php
   include('header.php');
  ?>

  <div class="container">
    <div class="row mt-3">
        <?php
        $sql = "SELECT * FROM producte";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
                $imgData = base64_encode($row['Img']);
                echo '<div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-40 product-card">
                            <div class="card-body">
                                <img class="card-img-top" src="data:image/jpeg;base64,'.$imgData.'" alt="'.$row['Name'].'">
                                <h5 class="card-title mt-3">'.$row['Name'].'</h5>
                                <p class="card-text">'.$row['Description'].'</p>
                            </div>
                            <div class="card-footer text-center">
                                <a href="shipping.php?product_id='.$row['ID'].'" class="btn float-left">Buy</a>
                                <p class="text-muted float-right mt-2">From $'.$row['Price'].'</p>
                                <span class="stars float-center">';
                                for ($i = 0; $i < $row['Review']; $i++) {
                                    echo '<i class="fa fa-star mt-3"></i>';
                                }
                                echo '</span>
                            </div>
                        </div>
                    </div>';
            }
        } else {
            echo "No products found.";
        }
        ?>
    </div>
  </div>

</body>
</html>
