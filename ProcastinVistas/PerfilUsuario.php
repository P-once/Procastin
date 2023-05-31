<?php include("checkLogin.php"); 
include("db.php");
	$user = $_SESSION['username'];

    $DescUs = "SELECT DescUsuario FROM usuarios WHERE NomUsuario='$user'";
    $result = mysqli_query($db, $DescUs);   
    $DescArry=mysqli_fetch_assoc($result);
    $Desc=$DescArry['DescUsuario'];

    $XPUs="SELECT ExpUsuario FROM usuarios WHERE NomUsuario='$user' ";
    $result = mysqli_query($db, $XPUs);   
    $XPArry=mysqli_fetch_assoc($result);
    $XP=$XPArry['ExpUsuario'];

    $imgQuery="SELECT ImgUsuario FROM usuarios WHERE NomUsuario='$user' ";
    $result = mysqli_query($db, $imgQuery);   
    $imgArry=mysqli_fetch_assoc($result);
    $img=$imgArry['ImgUsuario'];



    $user = $_SESSION['username'];
	$id_query = "SELECT IdUsuario FROM usuarios WHERE NomUsuario='$user'";
	$result = mysqli_query($db, $id_query);
	$id_arr = mysqli_fetch_assoc($result);
	$id = $id_arr['IdUsuario'];
 	$query = "SELECT * FROM tareas WHERE IdUsuario='$id'";
	$result = mysqli_query($db, $query);
	
	if(mysqli_num_rows($result) < 1) {
		$tareas = null;
	} else {
		while($row = mysqli_fetch_assoc($result)){
			$tareas[] = $row;
		}
	}
    
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <link rel="stylesheet" href="css/PerfilUsuario.css">
    <link rel="stylesheet" href="css/platilla.css">
    <title>Perfil <?php echo $_SESSION['username']; ?>  </title>


</head>
<body>


    <!--Header generico-->
    <header class="header">

        <nav class="NavBar" >
            <a href="PerfilUsuario.php">Perfil</a>
            <a href="amigos.php">Amigos</a>
            <a href="proyectos.php">Tareas</a>
            <a href="PerfilUsuario.php?logout='1'">Logout</a>
        </nav>
       
        <a id="settings" href="Ajustes.html">
            <img src="img/Settings-PNG.png"  >
        </a>
      


        
    </header>


    <!---perfil --->
    <div class="Perfil">
        <div class="FotoPerfil">
			<img id="ImagenPerfil" src="<?php echo $img; ?>" alt="">
        </div>
			<div class="info">
				<ul>    
					<li class="WhiteText"><?php echo $_SESSION['username']; ?><hr></li>
					<li class="WhiteText"><?php echo $Desc; ?><hr></li>
                    <li>
                        <div class="Barra"> 
                            Experiencia: <?php echo $XP;?> xp
                            <div class="bXP"><div class="XP" style="--w:100%"></div></div>
                        </div>
                    </li>
				</ul>
			</div>
            <div class="Sec-Logros">
            <a href="Logros.html" id="Logros-Btn" class="Logros-Btn">
                <img src="img/Trofeo.png" alt="Imagen" id="Logro-img">
            </a>
            </div>

    </div>
    <!--Tabs-->
    <div class="contenedor">
        <div class="titulot">Secion de Tareas</div>
        <div id="pestanas">
            <ul id=lista>
                <li id="pestana1"><a class="filter-btn" data-id ="Daily">Diarias</a></li>
                <li id="pestana2"><a class="filter-btn" data-id ="To-do">Por hacer</a></li>
            </ul>
        </div>


        <div id="contenidopestanas">
        <div class="section-center"></div>
        </div>
<script> 
    var proyectos_usuario = <?php echo json_encode($tareas); ?>;
    var id = "<?php echo $id ?>";
</script>
<script src="js/PerfilUsuario.js"></script>
</body>

</html>