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

	function agregar(){
        $this->CI->load->model(array('m_recibo_honorario', 'm_usuario'));
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
        $d_rh['f_adelanto'] = $f_adelanto;
        $d_rh['observacion'] = $observacion;
        $d_rh['descripcion'] = $descripcion;
        $d_rh['tipo_renta'] = $tipo_renta;
        $d_rh['retencion'] = 0;
        $d_rh['moneda_id'] = $moneda;
        $d_rh['total'] = $total;
        if($retencion == 'on'){
            $d_rh['retencion'] = $total * 0.08;
        }

        $result = $this->CI->m_recibo_honorario->agregar($d_rh);
        
        if($result !== FALSE) {
            return "Registro exitoso";
        }else{
            return "Ha ocurrido un error";
        }
	}

    // function editar(){
    //     $this->CI->load->model(array('m_usuario', 'm_empresa'));
    //     $id = $this->CI->input->post('id');
    //     $razon_social = $this->CI->input->post('razon_social');
    //     $ruc = $this->CI->input->post('ruc');
    //     $imagen = $this->CI->input->post('imagen');
    //     $email = $this->CI->input->post('email');
    //     $direccion = $this->CI->input->post('direccion');

    //     //validar ruc duplicado

    //     $d_usuario['email'] = $email;
    //     $d_usuario['documento'] = $ruc;
    //     $d_empresa['razon_social'] = $razon_social;
    //     $d_empresa['direccion'] = $direccion;
        
    //     $result = $this->CI->m_usuario->editar($d_usuario, $id);
    //     $result = $this->CI->m_empresa->editar($d_empresa, $id);

    //     if($result !== FALSE) {
    //         return "Edición exitosa";
    //     }else{
    //         return "Ha ocurrido un error";
    //     }
    // }
}
