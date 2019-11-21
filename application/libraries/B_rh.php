<?php

class B_rh {

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

    function listar_por_empresa($empresa_id = "", $url = ""){
        $listado = $this->CI->m_recibo_honorario->listar_por_empresa($empresa_id);
        $i = 0;
        foreach ($listado as $l) {
            unset($listado[$i]['id']);
            unset($listado[$i]['f_adelanto']);
            $i++;
        }
        return $listado;
    }

    function listar_por_empleado($empleado_id = "", $url = ""){
        $listado = $this->CI->m_recibo_honorario->listar_por_empleado($empleado_id);
        $i = 0;
        foreach ($listado as $l) {
            $listado[$i]['btn'] = '<a href="' . $url . 'rh/pago/' . $l['id'] . '" class="btn btn-sm btn-info">Ingresar Pago</a>';
            unset($listado[$i]['id']);
            $i++;
        }
        return $listado;
    }

    function listar_cartera($fecha = "", $empleado_doc = "", $empresa_id = ""){
        $listado = $this->CI->m_recibo_honorario->listar_cartera($fecha, $empleado_doc, $empresa_id);
        $i = 0;
        foreach ($listado as $l) {
            // $listado[$i]['btn'] = '<a href="' . $url . 'rh/pago/' . $l['id'] . '" class="btn btn-sm btn-info">Ingresar Pago</a>';
            unset($listado[$i]['id']);
            $listado[$i]['estado'] = "pendiente";
            $i++;
        }
        return $listado;
    }

	function agregar(){
        $this->CI->load->model(array('m_recibo_honorario', 'm_usuario', 'm_tasa_descuento', 'm_costo'));
        $this->CI->load->library('tasa_descontada');
        
        $documento = $this->CI->input->post('documento');
        $razon_social = $this->CI->input->post('razon_social');
        $direccion = $this->CI->input->post('direccion');
        $f_emision = $this->CI->input->post('f_emision');
        $f_pago = $this->CI->input->post('f_pago');
        $f_adelanto = $this->CI->input->post('f_adelanto');
        $observacion = $this->CI->input->post('observacion');
        $descripcion = $this->CI->input->post('descripcion');
        $tipo_renta = $this->CI->input->post('tipo_renta');
        $retencion = $this->CI->input->post('retencion');
        $moneda = $this->CI->input->post('moneda');
        $total = $this->CI->input->post('total');

        // VALIDACIONES
        $empresa = $this->CI->m_usuario->mostrar('t.documento', $documento);
        $d_rh['empleado_id'] = $this->CI->items['session']['sys_id'];
        $d_rh['empresa_id'] = $empresa['id'];
        $d_rh['f_emision'] = $f_emision;
        $d_rh['f_pago'] = $f_pago;
        $d_rh['observacion'] = $observacion;
        $d_rh['descripcion'] = $descripcion;
        $d_rh['tipo_renta'] = $tipo_renta;
        $d_rh['retencion'] = 0;
        $d_rh['moneda_id'] = $moneda;
        $d_rh['total'] = $total;
        $d_rh['costos_iniciales'] = 0;
        $d_rh['costos_finales'] = 0;
        $d_rh['neto'] = 0;
        if($retencion == 'on'){
            $d_rh['retencion'] = round($total * 0.08, 2);
            $d_rh['neto'] = round($total - $total * 0.08, 2);
        }

        // PAGO ADELANTADO
        if($f_adelanto != ''){
            $d_rh['f_adelanto'] = $f_adelanto;
            $descuento = json_decode($this->CI->tasa_descontada->descuento($total, $d_rh['retencion'], $f_pago, $f_adelanto, $empresa['id']));

            $d_rh['costos_iniciales'] = $descuento->cIniciales;
            $d_rh['costos_finales'] = $descuento->cFinales;
            $d_rh['neto'] = $descuento->neto;
            $d_rh['tea'] = $descuento->tea;
            $d_rh['tcea'] = $descuento->tcea;
        }

        $result = $this->CI->m_recibo_honorario->agregar($d_rh);
        
        if($result !== FALSE) {
            return "Registro exitoso";
        }else{
            return "Ha ocurrido un error";
        }
	}

}
