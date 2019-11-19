$(document).ready(function() {
    $('.datatable').DataTable({
        "language": {
			"sProcessing": 		"Procesando...",
			"sLengthMenu": 		"Mostrar _MENU_ registros",
			"sZeroRecords": 	"No se encontraron resultados",
			"sEmptyTable": 		"Ningún dato disponible en esta tabla",
			"sInfo": 			"Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
			"sInfoEmpty": 		"Mostrando registros del 0 al 0 de un total de 0 registros",
			"sInfoFiltered": 	"(filtrado de un total de _MAX_ registros)",
			"sInfoPostFix": 	"",
			"sSearch": 			"Buscar:",
			"sUrl": 			"",
			"sInfoThousands": 	",",
			"sLoadingRecords": 	"Cargando...",
			"oPaginate": {
			    "sFirst": 		"Primero",
			    "sLast": 		"Último",
			    "sNext": 		"Siguiente",
			    "sPrevious": 	"Anterior"
			},
			"oAria": {
			    "sSortAscending": 	": Activar para ordenar la columna de manera ascendente",
			    "sSortDescending": 	": Activar para ordenar la columna de manera descendente"
			},
			"buttons": {
			    "copy": 	"Copiar",
			    "colvis": 	"Visibilidad"
			}
        }
    });
});

$("#validar_documento").on('click', function(){
	type = $("#validar_documento").attr('data-type');
	$.post(base_url + 'c_usuario/validar_documento',
			{
				documento: $('#documento').val(),
				rol: type
			},
	function(response) {
		console.log(response);
		if(type == 2){
			if(response == null){
				alert("El RUC ingresado no existe");
				$('#razon_social').val('');
				$('#direccion').val('');
			}else{
				$('.validacion_doc').attr('disabled', true);
				$('#razon_social').val(response.razon_social);
				$('#direccion').val(response.direccion);
			}
		}else{
			if(response == null){
				$('.validacion_doc').attr('disabled', false);
				$('.validacion_doc').val('');
			}else{
				
				$('#nombre').val(response.nombre);
				$('#a_paterno').val(response.a_paterno);
				$('#a_materno').val(response.a_materno);
				$('#email').val(response.email);
			}
		}
	}, 'json');
    return false;
})

$(".tasa").numeric({ 
	decimal : ".",
	negative: false,
	decimalPlaces: 7
});

$(".moneda").numeric({ 
	decimal : ".",
	negative: false,
	decimalPlaces: 2
});

$("#nextBtn").on("click", function(){
	let cuerpo = "";
	cuerpo += "<p>";
	cuerpo += "Recibí de <b>" + $("#razon_social").val() + "</b> identificado con RUC número <b>" + $("#documento").val() + "</b><br>";
	cuerpo += "domiciliado en <b>" + $("#direccion").val() + "</b><br>";
	cuerpo += "por concepto de <b>" + $("#descripcion").val() + "</b><br>";
	cuerpo += "con tipo de renta <b>" + $("#tipo_renta").val() + "</b>";
	cuerpo += "</p>";

	cuerpo += "<p>";
	cuerpo += "Observación:<br>";
	cuerpo += "<b>" + $("#observacion").val() + "</b><br>";
	cuerpo += "Se solicita un adelanto del pago para la fecha <b>" + $("#f_adelanto").val() + "</b><br>";
	cuerpo += "<b>* Los montos indicados no estan sujetos a los descuentos por pago adelantado</b>";
	cuerpo += "</p>";
	$(".rh_cuerpo").html(cuerpo);

	let totales = "";
	let retencion = 0;
	let total = parseFloat($("#total").val()).toFixed(2);
	let neto = total;
	totales += "<p><b>" + total + "</b><b> " + $("#moneda").val() + "</b></p>";
	if($("#retencion").is(':checked')){
		retencion = (total * 0.08).toFixed(2);
		neto = (total - retencion).toFixed(2);
	}
	totales += "<p><b>(" + retencion + ")</b><b> " + $("#moneda").val() + "</b></p>";
	totales += "<p><b>" + neto + "</b><b> " + $("#moneda").val() + "</b></p>";
	$(".rh_totales").html(totales);
	$(".rh_fecha").html($("#f_emision").val());
});

