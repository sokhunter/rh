<?php

class Tasa_descontada {

	function __construct() {
		$this->CI =& get_instance();
        $library = array('session');
        $this->CI->load->library($library);
		// Datos de la sesion
		if(!$this->CI->session->has_userdata('sys_id')) {
			redirect('', 'refresh');
			EXIT;
		}
		$this->CI->items['session'] = $this->CI->session->userdata();
    }

    function descuento($vNominal, $retencion, $f_pago, $f_adelanto, $empresa_id){
        $tasa = $this->CI->m_tasa_descuento->mostrar('t.empresa_id', $empresa_id);
        $tea = $tasa['valor'];

        $costos = $this->CI->m_costo->listar(FALSE, array('empresa_id' => $empresa_id));
        $cIniciales = 0;
        $cFinales = 0;
        foreach ($costos as $c) {
            $cIniciales += $c['inicial'] ? $c['monto'] : 0;
            $cFinales += $c['inicial'] ? 0 : $c['monto'];
        }
        $dias = floor(abs((strtotime($f_pago)  - strtotime($f_adelanto)) / 86400));
        $tep = round(pow(1 + $tea, $dias / 360) - 1, 7);
        $dp = round($tep / (1 + $tep), 7);
        $desc = round($vNominal * $dp, 2);
        $vNeto = $vNominal - $desc;

        $vRecibido = $vNeto - $retencion - $cIniciales;
        $vEntregado = $vNominal - $retencion + $cFinales;
        // $vEntregado = $cFinales;
        $tcea = $vEntregado == 0 ? 0 : round((pow($vEntregado / $vRecibido, 360 / $dias) - 1)*100, 7);
        // echo 'dias ' . $dias . '<br>';
        // echo 'CI ' . $cIniciales . ' CF ' . $cFinales . ' Neto: ' . $vNeto . ' retencion' . $retencion . '<br>';
        // echo  'entregado ' . $vEntregado . ' recibido'. $vRecibido . '<br>'; 
        // echo $tcea;
        // EXIT;

        $data['neto'] = $vNeto;
        $data['cIniciales'] = $cIniciales;
        $data['cFinales'] = $cFinales;
        $data['tea'] = $tea;
        $data['tcea'] = $tcea;

        return json_encode($data);
    }
}
