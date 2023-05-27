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


    <!--Header generico :)-->
    <header class="header">

        <nav class="NavBar" >
            <a href="PerfilUsuario.php">Perfil</a>
            <a href="#">Amigos</a>
            <a href="proyectos.php">Proyectos</a>
            <a href="PerfilUsuario.php?logout='1'">Logout</a>
        </nav>
        <form action="" class="search-bar">
            <input type="text" placeholder="Buscar...">
            <button><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAUJJREFUSEu9le0xBEEURc9GQAhEgAzIgAjIABmQARmQgQwQARnYEIiAOlWv1avR3TO7NWOq9sdOd9/z+r6PWbHws1pYnx5gD7gEjoHDCOQdeAHugfWU4FqAuxDvabjnegxSAxjlQRx8BBTynY83uQLO042OepAhoET+FdYU4aGGIK3aCbuEVp8M0POP2GVULfEiJOQt/uy3cpIBJXoT2IxoEOZD2NU8kwHF+ynRD2/h2WouMuA7Tm3aG91zcwEsit1aluey6DWq7g/jX5O8bZlqjyVbHR2tRvsETjq9oOBz+H4L3ExptLInjwrr3BrPo8IBeJEEXTMYg+rmIC+ODTttcc9pzK0mZGxc29GOa4efogr5U1zPLU1nkutVyKZNVXOhC5kDIDRDzoCnEslcgALRzl9xX84JGP0e9D5MW68tfoMfCXxMGRHr0pcAAAAASUVORK5CYII="/></button>
            
        </form>
    </header>


    <!---perfil --->
    <div class="Perfil">
        <div class="FotoPerfil">
			<img id="ImagenPerfil" src="img/OIP.jpg" alt="">
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
    < <div class="contenedor">
        <div class="titulo">Secion de Tareas</div>
        <div id="pestanas">
            <ul id=lista>
                <li id="pestana1"><a href='javascript:cambiarPestanna(pestanas,pestana1);'>Diarias</a></li>
                <li id="pestana2"><a href='javascript:cambiarPestanna(pestanas,pestana2);'>Por hacer</a></li>
            </ul>
        </div>


        <div id="contenidopestanas">
            <div id="cpestana1">
               <p>Nombre de la tarea</p>
               <input type="checkbox" name="TareaComp" id="">
               <p>Descripcion de la tarea</p>
            </div>
            <div id="cpestana2">
                Contenido de la pestaña 2
            </div>
        </div>

        <!--footer generico :)-->

    <footer >
        <div class="Desarrolladores">
            <h1>Desarrolladores</h1>
            <div class="Miembros">
                <ul>
                    <li>
                        <p>Felix Bojorquez Israel</p>
                    </li>
                    <li>
                        <p>Ponce Garibay Andres</p>
                    </li>
                    <li>
                        <p>Solis Reyes Javier</p>
                    </li>
                    <li>
                        <p>Garcia Salas Daniel ALberto </p>
                    </li>
                    <li>
                        <a href="https://www.facebook.com"><img class="icono" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAL1JREFUSEvtlIEJwjAQRV836AY6ghtUJ9EROoJOoCO4ghvoBDqCbuAGlQ8JHGo9UhJUaKBw0Ob/+4+7VhQ+VWF9fs5gCmyBGaBa5wTM+0ikJJDgGaifxLIZ7IHlm06zGRyBJhgcgBVw94YkBVFnxDbA2hPX+68bCMMkdGo7Fi49cYpi/RLKS2C59xH5iCuHwcKkSU6wC0uli3GCVN+Aa1BrgUuORfvPKbLJxwTu4o+IXESDPvB+FYNE7aXiBg+0MykZNmDKCAAAAABJRU5ErkJggg=="/></a>
                        <a href="https://twitter.com"><img class="icono" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAUdJREFUSEvdleExBEEQhb+LgAzIABEgAkTgRIAIEAEhyAARkAGXAREgAuq7mrmanZuZ29uq/XNTdX92ut/r97qnb8LIZzIyPptHsA38rLDNmEvgFNgHPoFH4C7k+f05YuQWGWzAR4PkDTgs3Jsj4TXwUCLw8j0oOAMEyk+MqfFLMgsE8yJzBX9JplUoO7VMdU8Ndb/BgUVxOYHenWQAfvOnfQfAfYPgJRAsQlICm7cbwHYGvg8V36a5OcH3QOCY1mlwqQfaMLR68bSwM4F5D5wSG7Q1QMlXsLiTWloVTsp53qwehEv2lCzy2xHw2gMwDbF61S9tgdqycxJu1iA5rjzM5jZ1bH1s2tU6F2EXFWNqCrQpLrQauK/2qgWe90BQK97rYY0vVnDHunlKCqah0TYtkrnAbGC6NlZhz+837x+tl+x1gka36B/CnzgZFPaBJAAAAABJRU5ErkJggg=="/></a>
                        <a href="https://www.instagram.com/"><img class="icono" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAX1JREFUSEvNlU0yBEEQhb+5gZUtToATYGOLA4jgBm6AEwg7O5zAWFrhBDgB4QJ+LkB8olLUVJTumkXHyIiKmumuypf5MvP1iIFtNLB/ZgawCBwCK2l1JfoIuE7TPnG2lsEecJ5O3QPvtYvpvQHMAWvp/z5wkSOUAF54AHS8nZy3lMmMx8AysJoHVAKIrmMvGHmf7QLHwAewAzwDl4As/FgJ8AK41iueBTZCTc6vgU3gBngFFoC7tC/9BfCVinWQAcjxbaXYOjsDPoH5FLnPrMdv4GUGApjyUQZgtFJm2vKsmY10Wq+N7OzUADq6SvyG8/AX3Sb38W5qADNxHmrtLHVvRcb/D2BwiqIlbUE5tzU1f58AT0VLN1GkppRt6sWYgShybdp7AfoGTSmJrMqu8rkAtrSrOsn29hbgJLZIRT7wOu2VihA7I1EZzajFdO68eL9T7KKAIdcCdcl1aFbsvXId0RqJhfaiHdRlKqmBOJTKyoTN7JPZwnvTmcEz+AZJz2cZU1H38wAAAABJRU5ErkJggg=="/></a>
                    
                    </li>
                    <li>
                        <a href="https://www.facebook.com"><img class="icono" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAL1JREFUSEvtlIEJwjAQRV836AY6ghtUJ9EROoJOoCO4ghvoBDqCbuAGlQ8JHGo9UhJUaKBw0Ob/+4+7VhQ+VWF9fs5gCmyBGaBa5wTM+0ikJJDgGaifxLIZ7IHlm06zGRyBJhgcgBVw94YkBVFnxDbA2hPX+68bCMMkdGo7Fi49cYpi/RLKS2C59xH5iCuHwcKkSU6wC0uli3GCVN+Aa1BrgUuORfvPKbLJxwTu4o+IXESDPvB+FYNE7aXiBg+0MykZNmDKCAAAAABJRU5ErkJggg=="/></a>
                        <a href="https://twitter.com"><img class="icono" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAUdJREFUSEvdleExBEEQhb+LgAzIABEgAkTgRIAIEAEhyAARkAGXAREgAuq7mrmanZuZ29uq/XNTdX92ut/r97qnb8LIZzIyPptHsA38rLDNmEvgFNgHPoFH4C7k+f05YuQWGWzAR4PkDTgs3Jsj4TXwUCLw8j0oOAMEyk+MqfFLMgsE8yJzBX9JplUoO7VMdU8Ndb/BgUVxOYHenWQAfvOnfQfAfYPgJRAsQlICm7cbwHYGvg8V36a5OcH3QOCY1mlwqQfaMLR68bSwM4F5D5wSG7Q1QMlXsLiTWloVTsp53qwehEv2lCzy2xHw2gMwDbF61S9tgdqycxJu1iA5rjzM5jZ1bH1s2tU6F2EXFWNqCrQpLrQauK/2qgWe90BQK97rYY0vVnDHunlKCqah0TYtkrnAbGC6NlZhz+837x+tl+x1gka36B/CnzgZFPaBJAAAAABJRU5ErkJggg=="/></a>
                        <a href="https://www.instagram.com/"><img class="icono" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAX1JREFUSEvNlU0yBEEQhb+5gZUtToATYGOLA4jgBm6AEwg7O5zAWFrhBDgB4QJ+LkB8olLUVJTumkXHyIiKmumuypf5MvP1iIFtNLB/ZgawCBwCK2l1JfoIuE7TPnG2lsEecJ5O3QPvtYvpvQHMAWvp/z5wkSOUAF54AHS8nZy3lMmMx8AysJoHVAKIrmMvGHmf7QLHwAewAzwDl4As/FgJ8AK41iueBTZCTc6vgU3gBngFFoC7tC/9BfCVinWQAcjxbaXYOjsDPoH5FLnPrMdv4GUGApjyUQZgtFJm2vKsmY10Wq+N7OzUADq6SvyG8/AX3Sb38W5qADNxHmrtLHVvRcb/D2BwiqIlbUE5tzU1f58AT0VLN1GkppRt6sWYgShybdp7AfoGTSmJrMqu8rkAtrSrOsn29hbgJLZIRT7wOu2VihA7I1EZzajFdO68eL9T7KKAIdcCdcl1aFbsvXId0RqJhfaiHdRlKqmBOJTKyoTN7JPZwnvTmcEz+AZJz2cZU1H38wAAAABJRU5ErkJggg=="/></a>
                    
                    </li>
                    <li>
                        <a href="https://www.facebook.com"><img class="icono" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAL1JREFUSEvtlIEJwjAQRV836AY6ghtUJ9EROoJOoCO4ghvoBDqCbuAGlQ8JHGo9UhJUaKBw0Ob/+4+7VhQ+VWF9fs5gCmyBGaBa5wTM+0ikJJDgGaifxLIZ7IHlm06zGRyBJhgcgBVw94YkBVFnxDbA2hPX+68bCMMkdGo7Fi49cYpi/RLKS2C59xH5iCuHwcKkSU6wC0uli3GCVN+Aa1BrgUuORfvPKbLJxwTu4o+IXESDPvB+FYNE7aXiBg+0MykZNmDKCAAAAABJRU5ErkJggg=="/></a>
                        <a href="https://twitter.com"><img class="icono" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAUdJREFUSEvdleExBEEQhb+LgAzIABEgAkTgRIAIEAEhyAARkAGXAREgAuq7mrmanZuZ29uq/XNTdX92ut/r97qnb8LIZzIyPptHsA38rLDNmEvgFNgHPoFH4C7k+f05YuQWGWzAR4PkDTgs3Jsj4TXwUCLw8j0oOAMEyk+MqfFLMgsE8yJzBX9JplUoO7VMdU8Ndb/BgUVxOYHenWQAfvOnfQfAfYPgJRAsQlICm7cbwHYGvg8V36a5OcH3QOCY1mlwqQfaMLR68bSwM4F5D5wSG7Q1QMlXsLiTWloVTsp53qwehEv2lCzy2xHw2gMwDbF61S9tgdqycxJu1iA5rjzM5jZ1bH1s2tU6F2EXFWNqCrQpLrQauK/2qgWe90BQK97rYY0vVnDHunlKCqah0TYtkrnAbGC6NlZhz+837x+tl+x1gka36B/CnzgZFPaBJAAAAABJRU5ErkJggg=="/></a>
                        <a href="https://www.instagram.com/"><img class="icono" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAX1JREFUSEvNlU0yBEEQhb+5gZUtToATYGOLA4jgBm6AEwg7O5zAWFrhBDgB4QJ+LkB8olLUVJTumkXHyIiKmumuypf5MvP1iIFtNLB/ZgawCBwCK2l1JfoIuE7TPnG2lsEecJ5O3QPvtYvpvQHMAWvp/z5wkSOUAF54AHS8nZy3lMmMx8AysJoHVAKIrmMvGHmf7QLHwAewAzwDl4As/FgJ8AK41iueBTZCTc6vgU3gBngFFoC7tC/9BfCVinWQAcjxbaXYOjsDPoH5FLnPrMdv4GUGApjyUQZgtFJm2vKsmY10Wq+N7OzUADq6SvyG8/AX3Sb38W5qADNxHmrtLHVvRcb/D2BwiqIlbUE5tzU1f58AT0VLN1GkppRt6sWYgShybdp7AfoGTSmJrMqu8rkAtrSrOsn29hbgJLZIRT7wOu2VihA7I1EZzajFdO68eL9T7KKAIdcCdcl1aFbsvXId0RqJhfaiHdRlKqmBOJTKyoTN7JPZwnvTmcEz+AZJz2cZU1H38wAAAABJRU5ErkJggg=="/></a>
                    
                    </li>
                    <li>
                        <a href="https://www.facebook.com"><img class="icono" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAL1JREFUSEvtlIEJwjAQRV836AY6ghtUJ9EROoJOoCO4ghvoBDqCbuAGlQ8JHGo9UhJUaKBw0Ob/+4+7VhQ+VWF9fs5gCmyBGaBa5wTM+0ikJJDgGaifxLIZ7IHlm06zGRyBJhgcgBVw94YkBVFnxDbA2hPX+68bCMMkdGo7Fi49cYpi/RLKS2C59xH5iCuHwcKkSU6wC0uli3GCVN+Aa1BrgUuORfvPKbLJxwTu4o+IXESDPvB+FYNE7aXiBg+0MykZNmDKCAAAAABJRU5ErkJggg=="/></a>
                        <a href="https://twitter.com"><img class="icono" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAUdJREFUSEvdleExBEEQhb+LgAzIABEgAkTgRIAIEAEhyAARkAGXAREgAuq7mrmanZuZ29uq/XNTdX92ut/r97qnb8LIZzIyPptHsA38rLDNmEvgFNgHPoFH4C7k+f05YuQWGWzAR4PkDTgs3Jsj4TXwUCLw8j0oOAMEyk+MqfFLMgsE8yJzBX9JplUoO7VMdU8Ndb/BgUVxOYHenWQAfvOnfQfAfYPgJRAsQlICm7cbwHYGvg8V36a5OcH3QOCY1mlwqQfaMLR68bSwM4F5D5wSG7Q1QMlXsLiTWloVTsp53qwehEv2lCzy2xHw2gMwDbF61S9tgdqycxJu1iA5rjzM5jZ1bH1s2tU6F2EXFWNqCrQpLrQauK/2qgWe90BQK97rYY0vVnDHunlKCqah0TYtkrnAbGC6NlZhz+837x+tl+x1gka36B/CnzgZFPaBJAAAAABJRU5ErkJggg=="/></a>
                        <a href="https://www.instagram.com/"><img class="icono" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAX1JREFUSEvNlU0yBEEQhb+5gZUtToATYGOLA4jgBm6AEwg7O5zAWFrhBDgB4QJ+LkB8olLUVJTumkXHyIiKmumuypf5MvP1iIFtNLB/ZgawCBwCK2l1JfoIuE7TPnG2lsEecJ5O3QPvtYvpvQHMAWvp/z5wkSOUAF54AHS8nZy3lMmMx8AysJoHVAKIrmMvGHmf7QLHwAewAzwDl4As/FgJ8AK41iueBTZCTc6vgU3gBngFFoC7tC/9BfCVinWQAcjxbaXYOjsDPoH5FLnPrMdv4GUGApjyUQZgtFJm2vKsmY10Wq+N7OzUADq6SvyG8/AX3Sb38W5qADNxHmrtLHVvRcb/D2BwiqIlbUE5tzU1f58AT0VLN1GkppRt6sWYgShybdp7AfoGTSmJrMqu8rkAtrSrOsn29hbgJLZIRT7wOu2VihA7I1EZzajFdO68eL9T7KKAIdcCdcl1aFbsvXId0RqJhfaiHdRlKqmBOJTKyoTN7JPZwnvTmcEz+AZJz2cZU1H38wAAAABJRU5ErkJggg=="/></a>
                    
                    </li>
                </ul>
            </div> 
        </div>
        <hr>
    <div class="github">
        <div class="saber">
            <a href="https://github.com/P-once/Procastin"><img src="img/github_PNG40.png"/></a>
            <br>
            <a href="#">Saber mas</a>
            <a href="TermCond.html" target="_blanck" >Terminos Condiciones</a><br>
        </div>
        <hr>
        <div class="chiquito">
            <p>All rights reserved 2023</p>
        </div>
    </div>
</footer>
<script src="js/PerfilUsuario.js"></script>
</body>

</html>