const filterBtns = document.querySelectorAll('.filter-btn');
const sectionCenter = document.querySelector('.section-center');

filterBtns.forEach(function(btn) {
  btn.addEventListener('click', function(e) {
    const category = e.currentTarget.dataset.id;

    const menuCategory = proyectos_usuario.filter(function (menuItem) {
    if(menuItem.TipoTarea == category) {
        return menuItem;
      }
    });
    displayMenuItems(menuCategory);

  })
});

function displayMenuItems(menuItems) {
  if(JSON.stringify(proyectos_usuario) != 'null') {
    let displayMenu = menuItems.map(function(item) {
      console.log(item.Completado);

      if(item.Completado == 1){
        return `<div class="titulo">
          <p name="nomTarea">${item.NomTarea}  Dificultad: ${item.DifiTarea}<p>
          <div class="descripcion">
              <p>${item.DescTarea}</p>
          </div>
        </div><hr>`;
      } else {
        return `<div class="titulo">
        <p name="nomTarea">${item.NomTarea}  Dificultad: ${item.DifiTarea}</p>
        <div class="descripcion">
            <p>${item.DescTarea}</p>
        </div>
      </div>`;
      }
    })
    displayMenu = displayMenu.join("");
    sectionCenter.innerHTML = displayMenu;
  }
}