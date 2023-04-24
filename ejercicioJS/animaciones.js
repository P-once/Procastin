const boton = document.querySelector('button');
const bloque = document.querySelectorAll('section');
const letra = document.querySelectorAll('p');

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
        item.style.backgroundColor=item.dataset.color || "purple";
    });
    item.addEventListener('mouseout',function(){
        item.style.backgroundColor="beige";})

})