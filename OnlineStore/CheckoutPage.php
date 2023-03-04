<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Product Checkout</title>
  <link rel="stylesheet" href="checkout.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <?php
       include('header.php');
    ?>
  <h1>Product Checkout</h1>
  <form id="checkout-form">
    <label for="card-number">Card Number:</label>
    <input type="text" id="card-number" name="card-number" placeholder="1234 5678 9012 3456">

    <label for="expiration-date">Expiration Date:</label>
    <div id="expiration-date">
      <select id="expiration-month" name="expiration-month">
        <option value="">Month</option>
        <option value="01">01 - January</option>
        <option value="02">02 - February</option>
        <option value="03">03 - March</option>
        <option value="04">04 - April</option>
        <option value="05">05 - May</option>
        <option value="06">06 - June</option>
        <option value="07">07 - July</option>
        <option value="08">08 - August</option>
        <option value="09">09 - September</option>
        <option value="10">10 - October</option>
        <option value="11">11 - November</option>
        <option value="12">12 - December</option>
      </select>
      <select id="expiration-year" name="expiration-year">
        <option value="">Year</option>
        <option value="2023">2023</option>
        <option value="2024">2024</option>
        <option value="2025">2025</option>
        <option value="2026">2026</option>
        <option value="2027">2027</option>
        <option value="2028">2028</option>
        <option value="2029">2029</option>
        <option value="2030">2030</option>
        <option value="2031">2031</option>
        <option value="2032">2032</option>
        <option value="2033">2033</option>
        <option value="2034">2034</option>
        <option value="2035">2035</option>
      </select>
    </div>

    <label for="cvv">CVV:</label>
    <input type="text" id="cvv" name="cvv" placeholder="123">

    <!-- Submit button -->
    <button class="btn" type="submit" onclick="submitForm()">Submit</button>


  </form>

  <script src="checkout.js">
  </script>
</body>
</html>
