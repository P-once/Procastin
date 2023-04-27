const boton = document.querySelector('.nuevo-proyecto');

boton.addEventListener('click', function()
{
    const divButton = document.createElement("DIV");
    divButton.id = "proyecto-boton";
    divButton.setAttribute("class", "boton proyecto");
    divButton.name = "div-name";

    const divTitle = document.createElement("DIV");
    divTitle.setAttribute("class", "titulo");
    divTitle.name = "div-name";

    const pTitle = document.createElement("P");
    pTitle.innerHTML = "Titulo tarea";
    pTitle.name = "p-name";

    const divDescripcion = document.createElement("DIV");
    divDescripcion.setAttribute("class", "descripcion");
    divDescripcion.name = "div-name";

    const pDescripcion = document.createElement("P");
    pDescripcion.innerHTML = "Descripcion de la actividad";
    pDescripcion.name = "p-name";

    document.getElementById('items-seleccion').appendChild(divButton);
    divButton.appendChild(divTitle);
    divButton.appendChild(divDescripcion);
    divTitle.appendChild(pTitle);
    divDescripcion.appendChild(pDescripcion);
});


/* 
boton.addEventListener('click', function()
{
    const btn = document.createElement("BUTTON");
    btn.innerHTML = "click me";
    btn.id = "proyecto-boton";
    btn.class = "proyecto-boton";
    btn.type = "submit";
    btn.name = "btn-name";
    document.body.appendChild(btn);
});
*/