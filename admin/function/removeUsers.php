<?php require_once 'connect.php';?>
<?php
$conn = new mysqli($host, $user, $password, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if (isset($_POST['id'])) {
    // Sanitize the input to prevent SQL injection
    $id = $conn->real_escape_string($_POST['id']);

    // Assuming your table has an 'id' column
    $sql = "DELETE FROM Users WHERE id = '$id'";

    if ($conn->query($sql) === TRUE) {
        echo "Data deleted successfully";
    } else {
        echo "Error deleting data: " . $conn->error;
    }
} else {
    echo "ID not provided in the request";
}
?>
