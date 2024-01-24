<?php require_once 'connect.php';?>
<?php
$conn = new mysqli($host, $user, $password, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $username = $_POST["username"];
    $pass = $_POST["pass"];
    $user_status = $_POST["user_status"];

    $sql = "UPDATE Users SET Login='$username', Pass='$pass', Role='$user_status' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }
}
?>
