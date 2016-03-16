<?php
include ("../inc/conexion.php");

if (isset($_POST['btnRegistrar'])){
	
	$nombre = $_POST['txtNombre'];
	$cif = $_POST['txtCif'];
	$email = $_POST['txtEmail'];
	$pass = $_POST['txtPass'];
	$telefono = $_POST['txtTelefono'];
	
	$conn = new mysqli($servername, $username, $password, $dbname);
	
	//Chequeamos la conexion
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 
	
	$sql = "INSERT INTO usuario (email, cif, clave, telefono, nombre, plan) VALUES ('" .$email. "','" .$cif."',SHA('" .$pass. "')," .$telefono. ",'" .$nombre. "', 0)";
	
	if ($conn->query($sql) === TRUE) {
		$conn->close();
		header('Location:../index.php');
	} else {
		$conn->close();
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
	
}
else
{
	header('Location:javascript:history.go(-1)');
}
?>