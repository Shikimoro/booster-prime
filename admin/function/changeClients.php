<?php require_once 'connect.php';?>
<?php
$conn = new mysqli($host, $user, $password, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $phone_number = $_POST["phone_number"];
    $client_name = $_POST["client_name"];
    $car_number = $_POST["car_number"];
    $car_model = $_POST["car_model"];
    $car_color = $_POST["car_color"];

    $sql = "UPDATE Clients SET phone_number='$phone_number', client_name='$client_name', car_number='$car_number', car_model='$car_model', car_color='$car_color' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }
}
?>
