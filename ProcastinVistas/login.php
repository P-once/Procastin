<?php include ('sever.php') ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/login.css">
        <link rel="stylesheet" href="css/platilla.css">
    </head>
    <body>
        <!--Header ligeramente adaptado-->
        <header class="header">
            <a href="principal.html"><img class="navbar-img" src="img/logo_sin_background.png" width="30px" height="30px">Procastin</a>
    
            <nav class="NavBar" >
                <a href="registro.php">Registro</a>
                <a href="principal.html">Home</a>
                
            </nav>
           
        </header>


        <div class="order-div">
            <div class="div-img">
                <h3 class="bienvenido-texto">Bienvenido a Procastin </h3>
                <img class="bienvenido-img" src="https://img.freepik.com/free-vector/task-management-abstract-concept-illustration_335657-2127.jpg">
            </div>
            <form class="form-registro" method="post" action="login.php">
                <div class="div-ingresar">
                    <h4 class="ingresar-texto">Ingresa tu usuario y constraseña para poder ingresar</h4>
                    <?php include('errors.php'); ?>
                    <label class="registro-texto" for="usuario">Username</label>
                    <input class="registro-info" type="text" id="usuario" name="usuario">
                    <label class="registro-texto" for="password">Password</label>
                    <input class="registro-info" type="password" id="password" name="password">
                    <!--corregir boton solo para desmostracion navegacion entre ventanas-->
                    <input class="registro-fin" type="submit" value="Submit" name="login_user">
                    <a href="">¿Olvidaste tu contraseña?</a>
                </div>
            </form>
        </div>

        <!--footer generico-->

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
            <a href="TermCond.html" target="_blanck">Terminos Condiciones</a><br>
        </div>
        <hr>
        <div class="chiquito">
            <p>All rights reserved 2023</p>
        </div>
    </div>
</footer>




    </body>
</html>