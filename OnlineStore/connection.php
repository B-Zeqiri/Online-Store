<?php
//database connection details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "store";

//create connection
$conn = new mysqli($servername, $username, $password, $dbname);

//check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

if(isset($_POST['formData'])){
    // Retrieve form data sent via AJAX
    $formData = json_decode($_POST['formData'], true);
  
    // Get card details
    $cardNumber = $formData['cardNumber'];
    $expirationMonth = $formData['expirationMonth'];
    $expirationYear = $formData['expirationYear'];
    $cvv = $formData['cvv'];

    $zipcode = $formData['zipcode'];
    $street = $formData['street'];
    $appartment = $formData['appartment'];
    $email = $formData['email'];
    $city = $formData['city'];
    $country = $formData['country'];
    $name = $formData['name'];
    $surname = $formData['surname'];
    $phone = $formData['phone'];
}

// Check if the formData variable is set and not empty
if(isset($_POST["formData"]) && !empty($_POST["formData"])) {
    // Decode the JSON data
    $formData = json_decode($_POST["formData"], true);

    // Validate the cardNumber field
    if(!preg_match("/^[0-9]{16}$/", $formData["cardNumber"])) {
        $response = array("success" => false, "message" => "Please enter a valid card number (16 digits).");
        echo json_encode($response);
        exit;
    }

    // Validate the expirationMonth field
    if(!preg_match("/^(0[1-9]|1[0-2])$/", $formData["expirationMonth"])) {
        $response = array("success" => false, "message" => "Please enter a valid expiration month (MM).");
        echo json_encode($response);
        exit;
    }

    // Validate the expirationYear field
    if(!preg_match("/^[0-9]{4}$/", $formData["expirationYear"])) {
        $response = array("success" => false, "message" => "Please enter a valid expiration year (YYYY).");
        echo json_encode($response);
        exit;
    }

    // Validate the cvv field
    if(!preg_match("/^[0-9]{3}$/", $formData["cvv"])) {
        $response = array("success" => false, "message" => "Please enter a valid CVV (3 digits).");
        echo json_encode($response);
        exit;
    }

    // If all fields are valid, return success message
    $response = array("success" => true, "message" => "Payment successful.");
    echo json_encode($response);
} 







//prepare and bind statement to insert data into the database
    $stmt = $conn->prepare("INSERT INTO ship_card (name, surname, phone, email, zipcode, country, city, street, apartment, card_number, expiration_month, expiration_year, cvv) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssssssssss",$name, $surname, $phone, $email, $zipcode, $country, $city, $street, $appartment, $cardNumber, $expirationMonth, $expirationYear, $cvv);
    
    // execute statement
    $stmt->execute();
    
    // close statement
    $stmt->close();
    
    // close connection
    //$conn->close();


?>







