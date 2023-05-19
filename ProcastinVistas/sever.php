<?php
session_start();

//Inicializacion de variables
$username = "";
$email = "";
$errors = array();

//connexion a db
$db = mysqli_connect('localhost', 'root', '', 'procastin');

//Registrar usuario
if(isset($_POST['reg_user'])) {
	//Valores recibidos del form
	$username = mysqli_real_escape_string($db, $_POST['usuario']);
	$email = mysqli_real_escape_string($db, $_POST['correo']);
	$password = mysqli_real_escape_string($db, $_POST['password']);

	if(empty($username)) { array_push($errors, "Nombre de usuario es requerrido"); }
	if(empty($email)) { array_push($errors, "Correo es requerrido"); }
	if(empty($password)) { array_push($errors, "Contrasenia es requerrida"); }

	//checar si no exista algun usuario con ese nombre o correo
	$user_check_query($db, $user_check_query);
	$user = mysqli_fetch_assoc($result);

	if($user['NomUsuario'] === $username) {
		array_push($errors, "Username already exists");
	}

	if($user['CorreoUsuario'] === $email) {
		array_push($errors, "email already exists");
	}

	//Registrar al usuario
	if(count($errors) == 0) {
		$password = md5($password);

		$query = "INSERT INTO usuarios (NomUsuario, ContraseniaUsuario, CorreoUsuario) VALUES ('$username', '$email', '$password')";

		mysqli_query($db, $query);
		$_SESSION['username'] = $username;
		$_SESSION['success'] = "You are now logged in";
		header('location: PerfilUsuario.html');
	}
}

// LOGIN USER
if (isset($_POST['login_user'])) {
	$username = mysqli_real_escape_string($db, $_POST['usuario']);
	$password = mysqli_real_escape_string($db, $_POST['password']);

	$password = md5($password);
  
	if (empty($username)) {
		array_push($errors, "Se requiere nombre de usuario");
	}
	if (empty($password)) {
		array_push($errors, "Se requiere contraseña de usuario");
	}
  
	if (count($errors) == 0) {
		$query = "SELECT * FROM usuarios WHERE NomUsuario='$username' AND ContraseniaUsuario='$password'";
		$results = mysqli_query($db, $query);
		if (mysqli_num_rows($results) == 1) {
		  $_SESSION['username'] = $username;
		  $_SESSION['success'] = "You are now logged in";
		  header('location: PerfilUsuario.html');
		}else {
			array_push($errors, "Combinacion incorrecta de usuario/contraseña");
		}
	}
  }
  
  ?>