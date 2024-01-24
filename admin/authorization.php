<?php require_once '../functions/connect.php';?>
<?php session_start(); ?>
<?php
$login=$_POST["login"];
$password=$_POST["password"];
$sql = $pdo ->prepare("SELECT * FROM Users WHERE login=:login AND pass=:password");
$sql -> execute(array('login'=>$login,'password'=>$password));
$array = $sql ->fetch(PDO::FETCH_ASSOC);
if ($array["id"]>0){
	$_SESSION['login']=$array["Login"];
	header('Location:admin.php');
}
else{
	header('Location:/login.php');
}
?>