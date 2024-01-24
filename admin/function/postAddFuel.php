<?php require_once 'connect.php';?>
<?php
$conn = new mysqli($host, $user, $password, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["title"];
    $cost = $_POST["cost"];
    $min_amount = $_POST["min_amount"];
    
    // Insert data into the database
    $sql = "INSERT INTO Oil (title, cost, min_amount) VALUES ('$name', '$cost', '$min_amount')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Record added successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
