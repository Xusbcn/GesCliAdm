$(document).on("click", ".pagination a", function(event){
    event.preventDefault();
    var paginacion = $(this).attr('href').split('?page=');
    var page = paginacion[1];
    var ruta = paginacion[0];

    if(ruta.indexOf('/api') == -1){
        ruta = ruta + "/api";
    }

    ruta = ruta.replace('/clients/create', '');
    //si no hacemos el replace, cuando cree uno nuevo, no funcionara bien

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

    if(ruta.indexOf('/api') == -1){
        ruta = ruta + "/api";
    }


    ruta = ruta.replace('/clients/create', '');
    //si no hacemos el replace, cuando cree uno nuevo, no funcionara bien
    
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

//el de crear usuario se ha hecho en "Validator.js", ya que estaban alli las funciones de crear