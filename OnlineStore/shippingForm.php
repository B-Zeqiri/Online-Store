
<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1" charset=" UTF-8">
  <title>Shipping</title>
  <!-- Link to Bootstrap stylesheet -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <!-- Link to custom CSS stylesheet -->
  <link rel="stylesheet" href="shippingstyle.css">

  <!--<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>-->

  

</head>
<body>

<div class="shipping-form">
      <h2>Shipping Address</h2>
      <form name="ship" id="ship">
        <label for="name">Name</label>
        <input type="text" id="name" name="Name" placeholder="Your name.." required>

        <label for="surname">Surname</label>
        <input type="text" id="surname" name="Surname" placeholder="Your surname.." required>

        <label for="email">Email</label>
        <input type="email" id="emailship" name="Email" placeholder="Your email.." required>

        <label for="Nr_telefoni">Phone</label>
        <input type="text" id="Nr_telefoni" name="Nr_telefoni" placeholder="Your phone.." required>


        <label for="zipcode">ZipCode</label>
        <input type="text" id="zipcode" name="Zipcode" placeholder="Your zipcode.." required>

        <label for="country">Country</label>
          <select class="form-control" id="country" name="Country" required>
            <option value="">Select a country</option>
            <option value="California">California</option>
            <option value="Texas">Texas</option>
            <option value="Florida">Florida</option>
            <option value="New York">New York</option>
            <option value="Pennsylvania">Pennsylvania</option>
            <option value="Illinois">Illinois</option>
            <option value="Ohio">Ohio</option>
            <option value="Georgia">Georgia</option>
            <option value="North Carolina">North Carolina</option>
            <option value="Michigan">Michigan</option>
          </select>

        <label for="city">City</label>
        <input type="text" id="city" name="City" placeholder="Your city.." required>

        <label for="street">Street</label>
        <input type="text" id="street" name="Street" placeholder="Your street.." required>

        <label for="appartement">Appartement Number</label>
        <input type="text" id="appartement" name="appartement" placeholder="Your appartement number.." required>

        <button class="btn" id="submit" type="submit">Submit</button>


        </form>

      
    </div>
    <script src="script.js"></script>
    </body>
</html>