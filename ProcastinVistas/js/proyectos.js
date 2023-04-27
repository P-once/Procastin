// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.querySelector('.nuevo-proyecto');

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    document.getElementById('titulo-tarea').value = "";
    document.getElementById('descripcion-tarea').value = "";
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    document.getElementById('titulo-tarea').value = "";
    document.getElementById('descripcion-tarea').value = "";
    modal.style.display = "none";
  }
}

const boton = document.querySelector('.crear-proyecto');

boton.addEventListener('click', function()
{       ///Boton deberia usar 'submit'
    let titulo = document.getElementById('titulo-tarea').value;
    let descripcion = document.getElementById('descripcion-tarea').value;

    const divButton = document.createElement("DIV");
    divButton.id = "proyecto-boton";
    divButton.setAttribute("class", "boton proyecto");
    divButton.name = "div-name";

    const divTitle = document.createElement("DIV");
    divTitle.setAttribute("class", "titulo");
    divTitle.name = "div-name";

    const pTitle = document.createElement("P");
    pTitle.innerHTML = titulo;
    pTitle.name = "p-name";

    const divDescripcion = document.createElement("DIV");
    divDescripcion.setAttribute("class", "descripcion");
    divDescripcion.name = "div-name";

    const pDescripcion = document.createElement("P");
    pDescripcion.innerHTML = descripcion;
    pDescripcion.name = "p-name";

    document.getElementById('items-seleccion').appendChild(divButton);
    divButton.appendChild(divTitle);
    divButton.appendChild(divDescripcion);
    divTitle.appendChild(pTitle);
    divDescripcion.appendChild(pDescripcion);

    document.getElementById('titulo-tarea').value = "";
    document.getElementById('descripcion-tarea').value = "";
    modal.style.display = "none";
});