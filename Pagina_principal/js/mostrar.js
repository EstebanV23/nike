var menu = document.getElementById("menu");
var navegacion = document.getElementById("navegacion");
var despegable = document.getElementById("div");
var hombre = document.getElementById("hombre");
var mujer = document.getElementById("mujer");
var niño = document.getElementById("niño");
var niña = document.getElementById("niña");
var novedad = document.getElementById("novedad");
var salir = document.getElementById("salir");
var arrow = document.getElementById("arrow");



menu.addEventListener('click', function(){
    
    if (navegacion.classList.contains("mostrar"))
    {
        navegacion.classList.remove("mostrar");
    }
    else
    {
        navegacion.classList.add("mostrar"); 
    }
})

salir.addEventListener('click', function(){
    if (navegacion.classList.contains("mostrar"))
    {
        navegacion.classList.remove("mostrar");
    }
    else
    {
        navegacion.classList.add("mostrar"); 
    }
})

arrow.addEventListener('click', function(){
    if (despegable.classList.contains("mostrar"))
    {
        despegable.classList.remove("mostrar");
    }
    else
    {
        despegable.classList.add("mostrar"); 
    }
})

hombre.addEventListener('click', function(){
    if (despegable.classList.contains("mostrar"))
    {
        despegable.classList.remove("mostrar");
    }
    else
    {
        despegable.classList.add("mostrar"); 
    }
    if(document.documentElement.scrollWidth < 748)
    {
        hombre.setAttribute("href", "#");
    }
    else
    {
        hombre.setAttribute("href", "secciones.php?genero=hombre");
    }
})

mujer.addEventListener('click', function(){
    if (despegable.classList.contains("mostrar"))
    {
        despegable.classList.remove("mostrar");
    }
    else
    {
        despegable.classList.add("mostrar"); 
    }
    if(document.documentElement.scrollWidth < 748)
    {
        mujer.setAttribute("href", "#");
    }
    else
    {
        mujer.setAttribute("href", "secciones.php?genero=mujer");
    }
})

niño.addEventListener('click', function(){
    if (despegable.classList.contains("mostrar"))
    {
        despegable.classList.remove("mostrar");
    }
    else
    {
        despegable.classList.add("mostrar"); 
    }
    if(document.documentElement.scrollWidth < 748)
    {
        niño.setAttribute("href", "#");
    }
    else
    {
        niño.setAttribute("href", "secciones.php?genero=niño");
    }
})

niña.addEventListener('click', function(){
    if (despegable.classList.contains("mostrar"))
    {
        despegable.classList.remove("mostrar");
    }
    else
    {
        despegable.classList.add("mostrar"); 
    }
    if(document.documentElement.scrollWidth < 748)
    {
        niña.setAttribute("href", "#");
    }
    else
    {
        niña.setAttribute("href", "secciones.php?genero=niña");
    }
})

novedad.addEventListener('click', function(){
    if (despegable.classList.contains("mostrar"))
    {
        despegable.classList.remove("mostrar");
    }
    else
    {
        despegable.classList.add("mostrar"); 
    }
    if(document.documentElement.scrollWidth < 748)
    {
        novedad.setAttribute("href", "#");
    }
    else
    {
        novedad.setAttribute("href", "secciones.php?novedad=novedad");
    }
})