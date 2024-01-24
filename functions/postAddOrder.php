<?php require_once 'connect.php';?>
<?php
$conn = new mysqli($host, $user, $password, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// Check if the request method is POST
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Retrieve form data
    $name = $_POST["name"];
    $phone_number = $_POST["phone_number"];
    $car_model = $_POST["car_model"];
    $car_color = $_POST["car_color"];
    $car_number = $_POST["car_number"];
    $oil_id = $_POST["oil_id"];
    $oil_amount = $_POST["oil_amount"];
    $price = $_POST["price"];
    $payment_method = $_POST["payment_method"];
    $city = $_POST["city"];
    $address = $_POST["address"];
    $delivery_time = $_POST["delivery_time"];
    $order_status = $_POST["order_status"];


    // Process the data (you can customize this based on your needs)
    $sql = "INSERT INTO Orders (name, phone_number, car_model, car_color, car_number, oil_id, oil_amount, price, payment_method, city, address, delivery_time, order_status) VALUES ('$name', '$phone_number', '$car_model', '$car_color', '$car_number', '$oil_id', '$oil_amount', '$price', '$payment_method', '$city', '$address', '$delivery_time', '$order_status')";
    if ($conn->query($sql) === TRUE) {
        echo "Record added successfully";
        $last_inserted_id = $conn->insert_id;
        echo json_encode(array("id" => $last_inserted_id));

    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $checkNumberQuery = "SELECT * FROM Clients WHERE phone_number = '$phone_number'";
    $result = $conn->query($checkNumberQuery);
    
    // Проверяем, есть ли уже такой номер в базе
    if ($result->num_rows > 0) {
        echo "Номер уже существует в базе данных.";
    } else {
    // Если номера нет, то добавляем его в базу данных
    $insertNumberQuery = "INSERT INTO Clients (phone_number, client_name, car_number, car_model, car_color) VALUES ('$phone_number', '$name', '$car_number', '$car_model', '$car_color')";
    
    if ($conn->query($insertNumberQuery) === TRUE) {
        echo "Номер успешно добавлен в базу данных.";
    } else {
        echo "Ошибка при добавлении номера: " . $conn->error;
    }
}
}
?>
