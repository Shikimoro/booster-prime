<?php require_once 'connect.php';?>
<?php

$id = isset($_GET['id']) ? $_GET['id'] : null;

if (!empty($id)) {
    try {      
       $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
       $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // Подготавливаем SQL-запрос
        $stmt = $pdo->prepare("SELECT * FROM Orders WHERE id = '$id'");
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode($result);
      } 
      catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
      }
    }
?>
