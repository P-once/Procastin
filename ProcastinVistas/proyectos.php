<?php include("checkLogin.php"); 
	include("sever.php");

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
    <link rel="stylesheet" href="css/proyectos.css">
    <link rel="stylesheet" href="css/platilla.css">
    <title>Proyectos</title>
</head>
<body>
    <!--Header generico :)-->
    <header class="header">

		<nav class="NavBar" >
            <a href="PerfilUsuario.php">Perfil</a>
            <a href="amigos.php">Amigos</a>
            <a href="proyectos.php">Proyectos</a>
            <a href="PerfilUsuario.php?logout='1'">Logout</a>
        </nav>
     
    </header>
    <!-- Seccion de actividades -->
    <section id="layout" class="layout">
        <!-- Filter Buttons -->
        <div class="botones">
            <div class="btn-container">
                <button class="filter-btn" data-id ="Todos">Todos</button>
                <button class="filter-btn" data-id ="Daily">Daily</button>
                <button class="filter-btn" data-id ="To-do">To-do</button>
                <button class="filter-btn" data-id ="Completadas">Completadas</button>
            </div>

						<button id="cambiar_vista" class="cambiar_vista">=</button>
            <!-- "Boton" de nuevas actividades -->
            <button id="nuevo-proyecto" class="nuevo-proyecto">
                + Nuevo
            </button>
    </div>

		<form id="complete_form" action="proyectos.php" method="post" class="complete_form" style="display:none;">
      <input type="text" name="titulo_hidden" id="titulo_hidden">
			<input type="checkbox" id="completly_hidden" name="completly_hidden" value="1">
			<input type="submit" name="complete_submit" id="complete_submit">
    </form>
        
    <section id="section-center" class="section-center">
        <!-- Actividad ejemplo -->
            <!--
            <article class="boton proyecto">
                <div class="titulo defaultT">
                    <p>Titulo tarea</p>
                </div>
                <div class="descripcion defaultD">
                    <p>Descripcion de la actividad</p>
                </div>
            </article>


            //JAVASCRIPT
            let displayMenu = menuItems.map(function(item) {
            return `<article class="boton proyecto">
                <div class="titulo defaultT">
                    <p>${item.NomTarea}</p>
                </div>
                <div class="descripcion defaultD">
                    <p>${item.DescTarea}</p>
                </div>
            </article>`;
            })
            -->
        </section>
    </section>

    <!-- Modal -->
    <div id="myModal" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
            <span class="close">Cancel</span>
            <form class="form-modal" method="post" action="proyectos.php">
                <label class="texto-info" >Crear tarea</label>
                <div class="radio-container">
                    <input class="tipo-radio" type="radio" name="type" id="To-do" value="To-do" checked>
                    <label for="To-do" class="todo">
                        <span class="span-tipo">To-do</span>
                    </label>
                    <input class="tipo-radio" type="radio" name="type" id="Daily" value="Daily">
                    <label for="Daily" class="diario">
                        <span class="span-tipo">Daily</span>
                    </label>
                </div>
                <div>
                      <label class="rating-label">Dificultad de la actividad
                        <input
													id="dificultad"
                          class="rating"
                          max="5"
                          oninput="this.style.setProperty('--value', this.value)"
                          step="1"
                          style="--stars:5;--value:1"
                          type="range"
						    					name="dificultad" >
                      </label>
                </div>
                <div class="informacion-texto">
                    <input type="text" id="titulo-tarea" class="tarea-info" required placeholder="Titulo:" name="titulo" >
                    <textarea class="tarea-info" id="descripcion-tarea" placeholder="Descripcion: (Opcional)" name="descripcion" ></textarea>
                </div>
								<!--
                <div class="colores-container">
                    <input type="radio" name="color" class="color c1" value="blueRed">
                    <input type="radio" name="color" class="color c2" value="orangePurple">
                </div>
								-->
                <button type="submit" id="boton_proyectos" class="crear-proyecto" name="crear_proyecto">Crear</button>
            </form>
        </div>
    </div>

    <script> 
        var proyectos_usuario = <?php echo json_encode($tareas); ?>;
				var id = "<?php echo $id ?>";
    </script>
    <script src="js/proyectos.js"></script>
</body>