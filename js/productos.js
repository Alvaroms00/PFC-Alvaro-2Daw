$( document ).ready(function() {
    $("#botonAgregar").click(function(){
        $('#agregar').toggle(1000,function() {

        });
    });
});


$(document).ready(function(){
    $("#botonEditar").click(function(){
        $('#editar').toggle(1000,function(){

        });
    });
});

$(document).ready(function(){
    $("#botonEliminar").click(function(){
        $('#eliminar').toggle(1000,function(){

        });
    });
});