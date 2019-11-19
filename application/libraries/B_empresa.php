<?php

class B_empresa {

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
        $listado = $this->CI->m_empresa->listar_por_empleado($empleado_id);
        $i = 0;
        foreach ($listado as $l) {
            $listado[$i]['btn'] = '<a href="' . $url . 'rh/emitir/' . $l['id'] . '" class="btn btn-sm btn-info">Generar RH</a>';
            unset($listado[$i]['id']);
            $i++;
        }
        return $listado;
    }
    
	function agregar(){
        $this->CI->load->model(array('m_usuario', 'm_empresa'));
        $razon_social = $this->CI->input->post('razon_social');
        $ruc = $this->CI->input->post('documento');
        $imagen = $this->CI->input->post('imagen');
        $email = $this->CI->input->post('email');
        $direccion = $this->CI->input->post('direccion');
        // VALIDACIONES
        
        if($this->CI->m_usuario->existe_campo('documento', $ruc)){
            $response['msg'] = "El RUC ingresado ya se encuentra registrado";
            $response['status'] = 400;
            return json_encode($response);
        }

        $d_usuario['email'] = $email;
        $d_usuario['documento'] = $ruc;
        $d_empresa['razon_social'] = $razon_social;
        $d_empresa['direccion'] = $direccion;

        $d_usuario['usuario'] = strtolower(str_replace(' ', '', substr($razon_social, 0, 6)));
        $d_usuario['clave'] = md5(trim($ruc));
        $d_usuario['rol_id'] = 2;
        $usuario_id = $this->CI->m_usuario->agregar($d_usuario);
        $d_empresa['id'] = $usuario_id;
        $result = $this->CI->m_empresa->agregar($d_empresa);
        
        if($result !== FALSE) {
            $this->CI->load->library('b_tasa_descuento');
            $this->CI->b_tasa_descuento->agregar($usuario_id);
            $response['msg'] = "Registro exitoso";
            $response['status'] = 200;
            return json_encode($response);
        }else{
            $response['msg'] = "Ha ocurrido un error";
            $response['status'] = 500;
            return json_encode($response);
        }
	}

    function editar(){
        $this->CI->load->model(array('m_usuario', 'm_empresa'));
        $id = $this->CI->input->post('id');
        $razon_social = $this->CI->input->post('razon_social');
        $ruc = $this->CI->input->post('ruc');
        $imagen = $this->CI->input->post('imagen');
        $email = $this->CI->input->post('email');
        $direccion = $this->CI->input->post('direccion');

        //validar ruc duplicado

        $d_usuario['email'] = $email;
        $d_usuario['documento'] = $ruc;
        $d_empresa['razon_social'] = $razon_social;
        $d_empresa['direccion'] = $direccion;
        
        $result = $this->CI->m_usuario->editar($d_usuario, $id);
        $result = $this->CI->m_empresa->editar($d_empresa, $id);

        if($result !== FALSE) {
            return "Edición exitosa";
        }else{
            return "Ha ocurrido un error";
        }
    }

    function agregar_empleado(){
        $dni = $this->CI->input->post('dni');
        $cargo = $this->CI->input->post('cargo');
    	$this->CI->load->model(array("m_empresa_empleado", "m_usuario"));
        $usuario = $this->CI->m_usuario->mostrar('t.documento', $dni);
    	$d_ee['cargo_id'] = $cargo;
        $d_ee['empresa_id'] = $this->CI->items['session']['sys_id'];
        $d_ee['empleado_id'] = $usuario['id'];
        $this->CI->m_empresa_empleado->eliminar($d_ee);
    	$result = $this->CI->m_empresa_empleado->agregar($d_ee);

        if($result !== FALSE) {
            return "Registro exitoso";
        }else{
            return "Ha ocurrido un error";
        }
    }

}
