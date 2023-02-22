var boton = document.getElementById("boton");
var nombre = document.getElementById("nombre");
var precio = document.getElementById("precio");
var cont = 0;

boton.addEventListener('click', function(){
    cont += 1;
    if (cont < 6)
    {
        alert("Usted ha comprado: " + nombre.innerHTML + " por la modica suma de: " + precio.innerHTML);
    }
    else
    {
        alert("Ey mi hermano, suave con esas compras, bajale, deja de presionar que me trabás el servidor");
    }
})