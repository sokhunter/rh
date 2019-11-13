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
	$.post(base_url + 'c_usuario/validar_documento',
			{documento: $('#documento').val()},
	function(response) {
		console.log(response);
		if(response == null){
			$('.validacion_doc').attr('disabled', false);
			$('.validacion_doc').val('');
		}else{
			$('.validacion_doc').attr('disabled', true);
			$('#razon_social').val(response.razon_social);
			$('#direccion').val(response.direccion);
			$('#nombre').val(response.nombre);
			$('#a_paterno').val(response.a_paterno);
			$('#a_materno').val(response.a_materno);
			$('#email').val(response.email);
		}
	}, 'json');
    return false;
})

$(".tasa").numeric({ 
	decimal : ".",
	negative: false,
	decimalPlaces: 7
});