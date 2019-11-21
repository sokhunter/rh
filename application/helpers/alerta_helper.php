<?php
function mensaje_error($mensaje = ""){
	$html = '';
	$html .='<div class="alert alert-danger alert-dismissible fade show" role="alert">';
    $html .= $mensaje;
	$html .= '<button type="button" class="close" data-dismiss="alert" aria-label="Close">';
	$html .= '<span aria-hidden="true">&times;</span>';
	$html .= '</button>';
	$html .='</div>';
	return $html;
}
function mensaje_exito($mensaje = ""){
	$html = '';
	$html .='<div class="alert alert-success alert-dismissible fade show" role="alert">';
    $html .= $mensaje;
	$html .= '<button type="button" class="close" data-dismiss="alert" aria-label="Close">';
	$html .= '<span aria-hidden="true">&times;</span>';
	$html .= '</button>';
	$html .='</div>';
	return $html;
}
?>