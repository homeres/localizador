<?php
include ("../inc/conexion.php");
session_start();

if (isset($_POST['inciar_sesion'])){
	
	$email = $_POST['usrname'];
	$pass = $_POST['psw'];
	
	$conn = new mysqli($servername, $username, $password, $dbname);
	
	//Chequeamos la conexion
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 

	$email = mysqli_real_escape_string($conn, $email);
	$pass = mysqli_real_escape_string($conn, $pass);
	
	$sql = "SELECT * FROM usuario WHERE email = '" .$email. "' and clave = '" .sha1($pass)."'";
	$result = $conn->query($sql);
	
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			$_SESSION["email"] = $row['email'];
			//Chequeamos si tenemos que crear cookie para recordar los datos de inicio de sesion
			if ($_POST['recuerdame'] == "1")
			{
				$idSession = session_id();
				$cookie_name = "hash";
				$cookie_value = $idSession;
				setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
				//Guardamos en el campo hash del cliente el id de sesion con el que se ha creado la cookie, para comprobarlo mas tarde
				$sql = "UPDATE usuario set hash = '".mysql_real_escape_string($idSession)."' WHERE email = '".mysql_real_escape_string($_SESSION["email"])."'";
				$conn->query($sql);
			}
			//Reedirigimos al inicio
			header('Location:../dashboard/dashboard.php');
		}
	} else {
		$conn->close();
		echo "Usuario o contrase&ntilde;a incorrectos.";
	}
	
}
else
{
	header('Location:javascript:history.go(-1)');
}
?>