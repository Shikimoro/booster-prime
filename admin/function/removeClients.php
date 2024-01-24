<?php require_once 'connect.php';?>
<?php
$conn = new mysqli($host, $user, $password, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if (isset($_POST['id'])) {
    $id = $conn->real_escape_string($_POST['id']);

    $sql = "DELETE FROM Clients WHERE id = '$id'";

    if ($conn->query($sql) === TRUE) {
        echo "Data deleted successfully";
    } else {
        echo "Error deleting data: " . $conn->error;
    }
} else {
    echo "ID not provided in the request";
}
?>
