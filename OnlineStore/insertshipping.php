<?php
// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "store";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Retrieve form data
$name = $_POST["Name"];
$surname = $_POST["Surname"];
$email = $_POST["Email"];
$zipcode = $_POST["Zipcode"];
$country = $_POST["Country"];
$city = $_POST["City"];
$street = $_POST["Street"];
$appartement = $_POST["Appartementnr"];

// Prepare SQL statement
$sql = "INSERT INTO customers (Name, Surname, Email, Zipcode, Country, City, Street, Appartementnr) 
        VALUES ('$name', '$surname', '$email', '$zipcode', '$country', '$city', '$street', '$appartement')";

// Execute SQL statement
if (mysqli_query($conn, $sql)) {
    echo "Shipping information saved successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Close database connection
mysqli_close($conn);
?>
