<?php require_once 'connect.php';?>
<?php
try {
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $stmt = $pdo->prepare("SELECT Orders.*,Oil.id as oil_id,Oil.title FROM Orders join Oil on Orders.oil_id = Oil.id ORDER BY Orders.id DESC");
  $stmt->execute();
  $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
  echo json_encode($result);
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>