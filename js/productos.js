$( document ).ready(function() {
    $("#botonAgregar").click(function(){
        $('#agregar').toggle(1000,function() {
            $('#editar').hide();
            $('#eliminar').hide();
        });
    });
});


$(document).ready(function(){
    $("#botonEditar").click(function(){
        $('#editar').toggle(1000,function(){
            $('#agregar').hide();
            $('#eliminar').hide();
        });
    });
});

$(document).ready(function(){
    $("#botonEliminar").click(function(){
        $('#eliminar').toggle(1000,function(){
            $('#agregar').hide();
            $('#editar').hide();
        });
    });
});