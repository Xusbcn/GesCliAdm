    <script>
        
        var clientes = {!! json_encode($clientes->toArray(), JSON_HEX_TAG) !!} ;

        CreateTable("#ClientsTable",clientes.data,undefined);

        createFilter('#ClientsTable table thead',"/","clientes","table");
        
       $('.clickable').each(function(){
            $(this).attr("data-href","/clients/"+$(this).attr("id"));
       })

       $('.clickable').click(function(){
            window.location=$(this).data('href');
       });

        $('input[name="filtro"]').val('{{$filtro}}');

        var prueba = $('ul[class="pagination"]');
        $('#ClientsTable').append(prueba);

    </script>
    
{{ $clientes->links() }}