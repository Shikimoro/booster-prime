<?php require_once 'connect.php';?>
<?php

$phone_number = isset($_GET['phone_number']) ? $_GET['phone_number'] : null;

if (!empty($phone_number)) {
    try {      
       $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
       $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // Подготавливаем SQL-запрос
        $stmt = $pdo->prepare("SELECT * FROM Clients WHERE phone_number = '$phone_number'");
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode($result);
      } 
      catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
      }
    }
?>
