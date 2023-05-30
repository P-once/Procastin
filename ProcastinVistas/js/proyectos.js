// Get the modal
var modal = document.getElementById("myModal");
var boton_proyectos = document.getElementById('boton_proyectos');

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// Get the button that opens the modal
var btn = document.getElementById('nuevo-proyecto');
var vista = document.getElementById('cambiar_vista');

//Preview items
const menu = proyectos_usuario;
console.log(JSON.stringify(menu));

const sectionCenter = document.querySelector('.section-center');
const container = document.querySelector('.btn-container');

//Cuando carga la pagina
window.addEventListener('DOMContentLoaded', function() {
    displayMenuItems(menu);

    displayMenuButtons();

		completedItems();
});


function displayMenuButtons () {
  if(JSON.stringify(menu) != 'null') {
    const categories = menu.reduce(function(values, item) {
      if(!values.includes(item.TipoTarea)) {
        values.push(item.TipoTarea);
      }
      return values;
    }, ['Todos']);
    const categoriaBtns = categories.map(function(categoria) {
      return `<button class="filter-btn" data-id ="${categoria}">${categoria}</button>`
    }).join("");
    container.innerHTML = categoriaBtns;
    const filterBtns = document.querySelectorAll('.filter-btn');

    filterBtns.forEach(function(btn) {
      btn.addEventListener('click', function(e) {
        const category = e.currentTarget.dataset.id;
    
        if(category == 'Todos') {
          displayMenuItems(menu);
        }
        else {
          const menuCategory = menu.filter(function (menuItem) {
            if(menuItem.TipoTarea == category) {
              return menuItem;
            }
          });
          displayMenuItems(menuCategory);
        }
      })
    });
  }
};


function completedItems() {
  //console.log("completed");
  var divs = document.querySelectorAll('.proyecto');
  var contain = document.getElementById('section-center');
  
  var completes = [];
  
  divs.forEach(function(div, index) {
    //console.log(div.classList);
    if(div.classList.contains('completed')) { 
      console.log("aaaa");
      completes.push(div);
      div.remove();
    }
  })
  //console.log(completes);
  if(completes.length > 0) {
    completes.forEach(function(div) {
      contain.appendChild(div);
    })
  }
  //console.log(divs.length);
}

function displayMenuItems(menuItems) {
  if(JSON.stringify(menu) != 'null') {
    let displayMenu = menuItems.map(function(item) {
      console.log(item.Completado);
      if(item.Completado == 1){
      return `<article class="boton proyecto completed" id="${item.NomTarea}">
        <div class="titulo defaultT">
					<input type="checkbox" name="complete" value="1" class="complete" checked>
					<p name="nomTarea">${item.NomTarea}</p>
        </div>
        <div class="descripcion defaultD">
            <p>${item.DescTarea}</p>
        </div>
      </article>`;
      } else {
        return `<article class="boton proyecto id="${item.NomTarea}">
        <div class="titulo defaultT">

					<input type="checkbox" name="complete" value="1" class="complete">
					<p name="nomTarea">${item.NomTarea}</p>
        </div>
        <div class="descripcion defaultD">
            <p>${item.DescTarea}</p>
        </div>
      </article>`;
      }
    })
    displayMenu = displayMenu.join("");
    sectionCenter.innerHTML = displayMenu;

    const actividadBtns = document.querySelectorAll('.proyecto');

    actividadBtns.forEach(function(btn) {
      const div = btn.querySelector('.titulo');
      const titulo = div.querySelector('p').innerHTML;
      const info = menu.filter(function (item) {
        if(item.NomTarea == titulo) {
          return item;
        }
      });
      btn.addEventListener('click', function(e) {
        if(e.target.tagName !== 'INPUT') {
          console.log(btn.tagName);
          document.getElementById('titulo-tarea').value = titulo;
          document.getElementById('descripcion-tarea').value = info[0].DescTarea;
          document.getElementById(info[0].TipoTarea).checked = true;
          document.querySelector('.rating').style.setProperty("--value", info[0].DifiTarea);
          modal.style.display = "block";
          boton_proyectos.classList.add('update_proyecto');
          boton_proyectos.classList.remove('crear_proyecto');
          boton_proyectos.innerHTML = "Actualizar";
          boton_proyectos.name = 'update_proyecto';
          document.getElementById('titulo-tarea').readOnly = true;
        }
      })
    });

    const checks = document.querySelectorAll('.complete')
    checks.forEach(function(check) {
      check.addEventListener('change', function(e) {
        console.log(check.parentElement.parentElement);
        if (this.checked) {
          check.parentElement.parentElement.classList.add("completed");
					check.value = 1;

					document.getElementById('completly_hidden').checked = true;
					document.getElementById('titulo_hidden').value = check.parentElement.lastElementChild.innerHTML;
          console.log(check.parentElement.lastElementChild.innerHTML)

          //console.log(check.parentElement.parentElement.id);
        } else {
          check.parentElement.parentElement.classList.remove("completed");
					document.getElementById('completly_hidden').checked = false;
					document.getElementById('titulo_hidden').value = check.parentElement.lastElementChild.innerHTML;
        }
        console.log(check.parentElement.parentElement.className);
        //completedItems();
				//document.getElementById("complete_form").submit;
        document.getElementById("complete_submit").click();
      })
    })

		completedItems();
  }
}

 // When the user clicks on the button, open the modal
 btn.onclick = function() {
  modal.style.display = "block";
  document.querySelector('.rating').style.setProperty("--value", 1);
  boton_proyectos.classList.add('crear_proyecto');
  boton_proyectos.classList.remove('update_proyecto');
  boton_proyectos.innerHTML = "Crear";
  boton_proyectos.name = 'crear_proyecto';
  document.getElementById('titulo-tarea').readOnly = false;
}

vista.onclick = function() {
	const actividadBtns = document.querySelectorAll('.proyecto');
	actividadBtns.forEach(function(btn) {

	})
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    document.getElementById('titulo-tarea').value = "";
    document.getElementById('descripcion-tarea').value = "";
    clearRadioButtons();
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    document.getElementById('titulo-tarea').value = "";
    document.getElementById('descripcion-tarea').value = "";
    modal.style.display = "none";
    clearRadioButtons();
  }
}

const nuevo = document.querySelector('.crear-proyecto');

//Crear nueva tarea
nuevo.addEventListener('click', function()
{       ///Boton deberia usar 'submit'
  if(document.getElementById('titulo-tarea').value != "" && nuevo.name != "update_proyecto") {
    let titulo = document.getElementById('titulo-tarea').value;
    let descripcion = document.getElementById('descripcion-tarea').value;
    let tipo = document.querySelector('input[name="type"]:checked').value;
    console.log(tipo);
    console.log(JSON.stringify(proyectos_usuario));
    console.log(id);

    const divButton = document.createElement("ARTICLE");
    divButton.id = "proyecto-boton";
    divButton.setAttribute("class", "boton proyecto");
    divButton.name = "div-name";

    const divTitle = document.createElement("DIV");
    divTitle.name = "div-name";

    const pTitle = document.createElement("P");
    pTitle.innerHTML = titulo;
    pTitle.name = "p-name";

    const divDescripcion = document.createElement("DIV");
    divDescripcion.name = "div-name";

    const pDescripcion = document.createElement("P");
    pDescripcion.innerHTML = descripcion;
    pDescripcion.name = "p-name";

    document.getElementById('section-center').appendChild(divButton);
    divButton.appendChild(divTitle);
    divButton.appendChild(divDescripcion);
    divTitle.appendChild(pTitle);
    divDescripcion.appendChild(pDescripcion);

    /*
    let color;
    try {
      color = document.querySelector('input[name="color"]:checked').value
    }
    catch {
      color = "default"
    }
    
    switch(color) {
      case "blueRed":
        divTitle.setAttribute("class", "titulo blue");
        divDescripcion.setAttribute("class", "descripcion red");
        break;
      case "orangePurple":
        divTitle.setAttribute("class", "titulo orange");
        divDescripcion.setAttribute("class", "descripcion purple");
        break;
      default:
        divTitle.setAttribute("class", "titulo defaultT");
        divDescripcion.setAttribute("class", "descripcion defaultD");
    }

    /*
    document.getElementById('titulo-tarea').value = "";
    document.getElementById('descripcion-tarea').value = "";
    clearRadioButtons();
    modal.style.display = "none";
    */
  }

});

function clearRadioButtons(){
  let color = document.querySelectorAll("input[name=color]");
  let type = document.querySelectorAll("input[name=type]");
  for(var i=0;i<color.length;i++){
    color[i].checked = false;
  }
  type[0].checked = true;
}