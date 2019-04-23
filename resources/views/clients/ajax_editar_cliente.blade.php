<script type="text/javascript">
    var cliente = {!! json_encode($cliente, JSON_HEX_TAG) !!};

    CreateForm('#Input',cliente,undefined);
    $('input[name="cif/nif"]').prop('readonly',true);
    
    CreateElement('#Input',"div","Información de Cliente",{class:"divtop"});



    $('#form').submit(function(e){
	e.preventDefault();

    if(checkNulls() && validate()){

		var ruta = window.location.origin+$("#form").attr("action");
		var nombre = $("#form input[name=nombre]").val();
		var direccion = $("#form input[name=direccion]").val();
		var provincia = $("#form input[name=provincia]").val();
		var localidad = $("#form input[name=localidad]").val();
		var nif = $("#form input[name='cif/nif']").val();
		var email = $("#form input[name=email]").val();
		var telefono = $("#form input[name=telefono]").val();
		var cp = $("#form input[name=cp]").val();
		var token = $("#form input[name=_token]").val();

		$.ajax({
			url: ruta,
			headers:{'X-CSRF-TOKEN':token},
			data: {nombre: nombre, direccion: direccion, provincia: provincia, localidad: localidad, "cif/nif": nif, email: email, telefono: telefono, cp: cp},
			type: 'PUT',
			dataType: 'json',
			success: function(data){
				$("#Input").html(data);
			}
		})

    }
});
</script>