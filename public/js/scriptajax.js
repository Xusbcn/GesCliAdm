$(document).on("click", ".pagination a", function(event){
    event.preventDefault();
    var paginacion = $(this).attr('href').split('page=');
    var page = paginacion[1];
    var ruta = paginacion[0];

    $.ajax({
        url: ruta,
        data: {page: page},
        type: 'GET',
        dataType: 'json',
        success: function(data){
            $("#ClientsTable").html(data);
        }
    })
    
})

$(document).on("click", "#ClientsTable input[value='Filtrar']", function(event){
    event.preventDefault();

    var busqueda = $("input[name='filtro']").val();
    var ruta = window.location.origin;

    $.ajax({
        url: ruta,
        data: {filtro: busqueda},
        type: 'GET',
        dataType: 'json',
        success: function(data){
            $("#ClientsTable").html(data);
        }
    })
    
})