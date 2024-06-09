// Obtén los elementos
const dialogo = document.getElementById('formulario');
const botonAbrir = document.getElementById('abrir');
const botonCerrar = document.getElementById('cerrar');

// Muestra el cuadro de diálogo
botonAbrir.addEventListener('click', function() {
    dialogo.showModal();
    console.log("P");
});

// Cierra el cuadro de diálogo
botonCerrar.addEventListener('click', function() {
    dialogo.close();
});