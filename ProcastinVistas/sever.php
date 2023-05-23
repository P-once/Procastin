<?php
	session_start();

	//Inicializacion de variables
	$username = "";
	$email = "";
	$errors = array();
	$_SESSION['success'] = "";

	include('db.php');

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
		$user_check_query = "SELECT * FROM usuarios WHERE NomUsuario='$username'";
		$result = mysqli_query($db, $user_check_query);
		$user = mysqli_fetch_assoc($result);

		if($user['NomUsuario'] === $username) {
			array_push($errors, "Username already exists");
		}

		if($user['CorreoUsuario'] === $email) {
			array_push($errors, "email already exists");
		}

		//Registrar al usuario
		if(count($errors) == 0) {
			//$password = md5($password);

			$query = "INSERT INTO usuarios (NomUsuario, ContraseniaUsuario, CorreoUsuario) VALUES ('$username', '$password', '$email')";

			mysqli_query($db, $query);
			$curr_user = $username;
			$_SESSION['username'] = $username;
			$_SESSION['success'] = "You are now logged in";
			header('location: PerfilUsuario.php');
		}
	}

	// LOGIN USER
	if (isset($_POST['login_user'])) {
		$username = mysqli_real_escape_string($db, $_POST['usuario']);
		$password = mysqli_real_escape_string($db, $_POST['password']);

		if (empty($username)) {
			array_push($errors, "Se requiere nombre de usuario");
		}
		if (empty($password)) {
			array_push($errors, "Se requiere contraseña de usuario");
		}

		//$password = md5($password);
		
		if (count($errors) == 0) {
			$query = "SELECT * FROM usuarios WHERE NomUsuario='$username' AND ContraseniaUsuario='$password'";
			$results = mysqli_query($db, $query);
			if (mysqli_num_rows($results) == 1) {
				$_SESSION['username'] = $username;
				$_SESSION['success'] = "You are now logged in";
				header('location: PerfilUsuario.php');

			}else {
				array_push($errors, "Combinacion incorrecta de usuario/contraseña");
			}
		}
	}


	if(isset($_POST['crear_proyecto'])) {
		$titulo = mysqli_real_escape_string($db, $_POST['titulo']);
		$descripcion = mysqli_real_escape_string($db, $_POST['descripcion']);
		$tipo = $_POST['type'];
		$dificultad = $_POST['dificultad'];

		$user = $_SESSION['username'];
		$id_query = "SELECT IdUsuario FROM usuarios WHERE NomUsuario='$user'";
		$result = mysqli_query($db, $id_query);
		$id_arr = mysqli_fetch_assoc($result);
		$id = $id_arr['IdUsuario'];

		$query = "SELECT * FROM tareas WHERE IdUsuario='$id'";
		$result = mysqli_query($db, $query);

		while($row = mysqli_fetch_assoc($result)){
			if($row['NomTarea'] == $titulo) {
				array_push($errors, "Ya tienes una tarea con este nombre");
			}
		}

		if (empty($titulo)) {
			array_push($errors, "Se requiere nombre de usuario");
		}

		if (count($errors) == 0) {
			$date = date('Y/m/d');
			$query = "INSERT INTO tareas (NomTarea, ExpTarea, DescTarea, FechaIniTarea, DifiTarea, TipoTarea, IdUsuario) VALUES ('$titulo', 50, '$descripcion', '$date', '$dificultad', '$tipo', $id)";

			mysqli_query($db, $query);
		}else {
			array_push($errors, "Combinacion incorrecta de usuario/contraseña");
		}
	}
  
	if(isset($_POST['update_proyecto'])) {
		$titulo = mysqli_real_escape_string($db, $_POST['titulo']);
		$descripcion = mysqli_real_escape_string($db, $_POST['descripcion']);
		$tipo = $_POST['type'];
		$dificultad = $_POST['dificultad'];

		$query = "SELECT * FROM tareas WHERE NomTarea='$titulo'";
		$result = mysqli_query($db, $query);

		if (empty($titulo)) {
			array_push($errors, "Se requiere nombre de usuario");
		}

		if (count($errors) == 0) {
			$query = "UPDATE tareas SET DescTarea='$descripcion', DifiTarea='$dificultad', TipoTarea='$tipo' WHERE NomTarea='$titulo'";

			mysqli_query($db, $query);
		}else {
			array_push($errors, "Combinacion incorrecta de usuario/contraseña");
		}
	}
?>