var Tab1 = document.getElementById("Btn-uno");
var Tab2 = document.getElementById("Btn-dos");
var Cont1 = document.getElementById("Cont-uno");
var Cont2 = document.getElementById("Cont-dos");

Tab1.onclick=function()
{
 
    Cont1.style.transform="translateY(0)";
    Cont2.style.transform="translateY(100%)";

    Cont1.style.transitionDelay="0.3s";
    Cont2.style.transitionDelay="0";

    Tab1.style.backgroundColor="#F6BE00";
    Tab2.style.backgroundColor="#40476D";

}

Tab2.onclick=function()
{
   
    Cont2.style.transform="translateY(0)";
    Cont1.style.transform="translateY(100%)";

    Cont2.style.transitionDelay="0.3s"
    Cont1.style.transitionDelay="0";

    Tab2.style.backgroundColor="#F6BE00";
    Tab1.style.backgroundColor="#40476D";

}