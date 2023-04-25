const boton = document.querySelector('button');
const bloque = document.querySelectorAll('.contenedor');
const letra = document.querySelectorAll('p');
const tecla = document.querySelector('.teclaB');
const cuerpo = document.querySelector('body');
document.addEventListener('keydown',sePresionaUnaTecla)
document.addEventListener('keyup',seSoltoUnaTecla)


//CLICK EVENT
boton.addEventListener('click',function()
{
    alert('No aprietes mas el boton por favor');
   
});
boton.addEventListener('click',function()
{
    alert('Es muy molesto tener que poner estas alertas');
   
});
//MOUSEOVER Y MOUSEOUT EVENTS
bloque.forEach(function(item){
    item.addEventListener('mouseover',function(){
        item.style.backgroundColor=item.dataset.color || "purple";
    });
    item.addEventListener('mouseout',function(){
        item.style.backgroundColor="gray";})

})
letra.forEach(function(item){
    item.addEventListener('mouseover',function(){
        item.style.backgroundColor=item.dataset.color;
        item.style.color="black";

    });
    item.addEventListener('mouseout',function(){
        item.style.color="white";
    })
  

})
//FUNCION donde se detecta la presion de teclas concretas
function sePresionaUnaTecla(event)
{
    const teclaPresionada = event.key.toLowerCase();
    if(teclaPresionada == 'f')
    {
        tecla.style.backgroundColor="red";
    }
    else 
    if(teclaPresionada == 'd')
    {
        tecla.style.backgroundColor="blue";
    }
    else if(teclaPresionada == 's')
    {
        tecla.style.backgroundColor="green";
    }
    else if(teclaPresionada == 'a')
    {
        tecla.style.backgroundColor="brown";
    }
    else
    {
        tecla.style.backgroundColor="black";
 
    }
}
//EVENTO LOG SE MUESTRA EN LA CONSOLA 
function seSoltoUnaTecla(event)
{
    console.log(event)
}

//Evento onload
document.getElementById("pinguin").addEventListener("load", cargada);

function cargada() {
  alert("Happy feet!");

}