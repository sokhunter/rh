<?php

function fecha($dias = '+ 0', $formato = 'Y-m-d') {
	// date("d-m-Y",strtotime($fecha_actual."+ 1 days")); 
    return date($formato, strtotime(date('Y-m-d') . $dias . 'days'));
}

?>