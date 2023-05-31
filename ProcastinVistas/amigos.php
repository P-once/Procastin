<?php include("checkLogin.php"); 
	include("sever.php");

	$user = $_SESSION['username'];
	$id_query = "SELECT IdUsuario FROM usuarios WHERE NomUsuario='$user'";
	$result = mysqli_query($db, $id_query);
	$id_arr = mysqli_fetch_assoc($result);
	$id = $id_arr['IdUsuario'];

 	$query = "SELECT NombreContacto FROM contactos WHERE IdUsuario='$id'";
	$amigos = mysqli_query($db, $query);

	$query = "SELECT * FROM usuarios";
	$result = mysqli_query($db, $query);


	if(mysqli_num_rows($result) < 1) {
		$usaurios = null;
	} else {
		while($row = mysqli_fetch_assoc($result)){
			$usaurios[] = $row;
		}
	}

	$query = "SELECT * FROM usuarios";
	$result = mysqli_query($db, $query);
?> 


<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="css/amigos.css">
		<link rel="stylesheet" href="css/platilla.css">
			<title>Amigos</title>
	</head>
	<body>


  <!--Header generico :)-->
    <header class="header">
        <nav class="NavBar" >
            <a href="PerfilUsuario.php">Perfil</a>
            <a href="#">Amigos</a>
            <a href="proyectos.php">Tareas</a>
            <a href="PerfilUsuario.php?logout='1'">Logout</a>
        </nav>
     
        <a id="settings" href="Ajustes.html">
            <img src="img/Settings-PNG.png"  >
        </a>
    </header>

    <!---Amigos --->
    <div class="Seccion_Amigos">
				<form class="newAmigos" autocomplete="off" action="amigos.php">
					<div class="autocomplete" style="width:300px;">
						<input id="myInput" class="myInput" type="text" name="buscarAmigos" placeholder="Nombre de usuario">
					</div>
					<input class="addFriend" type="submit">
				</form>

        <table>
					<?php 
						while($row = mysqli_fetch_assoc($amigos)) {
							while($a = mysqli_fetch_assoc($result)) {
								if($a['NomUsuario'] == $row['NombreContacto']) {
									$img = $a['ImgUsuario'];
								}
							}				
					?>
						<img src="<?php echo $img; ?>">
						<p><?php echo $row['NombreContacto']; ?></p>
					<?php 
						}
					?>
				</table>
		</div>



	<script> 
        var usuarios = <?php echo json_encode($usaurios); ?>;
				var id = "<?php echo $id ?>";
    </script>
    <script src="js/amigos.js"></script>
	</body>

</html>