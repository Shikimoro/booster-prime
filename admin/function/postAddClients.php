<?php require_once 'connect.php';?>
<?php
$conn = new mysqli($host, $user, $password, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $phone_number = $_POST["phone_number"];
    $client_name = $_POST["client_name"];
    $car_number = $_POST["car_number"];
    $car_model = $_POST["car_model"];
    $car_color = $_POST["car_color"];

    $sql = "INSERT INTO Clients (phone_number, client_name, car_number, car_model, car_color) VALUES ('$phone_number', '$client_name', '$car_number', '$car_model', '$car_color')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Record added successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
