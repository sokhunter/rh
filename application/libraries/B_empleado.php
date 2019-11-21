<?php

class B_empleado {

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

    function listar($url){
        $this->CI->load->model('m_empleado');
        $lista = $this->CI->m_empleado->listar("t.id, CONCAT(t.nombre, ' ', t.a_paterno, ' ', t.a_materno), u.documento, u.email");
        $i = 0;
        foreach ($lista as $l) {
            $lista[$i]['btn'] = '<a href="' . $url . 'empleado/editar/' . $l['id'] . '" class="btn btn-sm btn-info">Editar</a>';
            unset($lista[$i]['id']);
            $i++;
        }
        return $lista;
    }
    
	function agregar(){
        $this->CI->load->model(array('m_usuario', 'm_empleado'));
        $nombre = $this->CI->input->post('nombre');
        $a_paterno = $this->CI->input->post('a_paterno');
        $a_materno = $this->CI->input->post('a_materno');
        $dni = $this->CI->input->post('dni');
        $cargo = $this->CI->input->post('cargo');
        $email = $this->CI->input->post('email');

        if($this->CI->m_usuario->existe_campo('documento', $dni)){
            $response['msg'] = "El DNI ingresado ya se encuentra registrado";
            $response['status'] = 400;
            return json_encode($response);
        }

        $d_usuario['email'] = $email;
        $d_usuario['documento'] = $dni;
        $d_empleado['nombre'] = $nombre;
        $d_empleado['a_paterno'] = $a_paterno;
        $d_empleado['a_materno'] = $a_materno;
        $d_usuario['usuario'] = strtolower(str_replace(' ', '', substr($nombre, 0, 2) . substr($a_paterno, 0, 2) . substr($a_materno, 0, 2)));
        $d_usuario['clave'] = md5(trim($dni));
        $d_usuario['rol_id'] = 3;
        $usuario_id = $this->CI->m_usuario->agregar($d_usuario);
        $d_empleado['id'] = $usuario_id;
        $result = $this->CI->m_empleado->agregar($d_empleado);

        if($result !== FALSE) {
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
        $this->CI->load->model(array('m_usuario', 'm_empleado'));
        $id = $this->CI->input->post('id');
        $nombre = $this->CI->input->post('nombre');
        $a_paterno = $this->CI->input->post('a_paterno');
        $a_materno = $this->CI->input->post('a_materno');
        $dni = $this->CI->input->post('dni');
        $email = $this->CI->input->post('email');
        
        //validar dni duplicado
        $d_usuario['email'] = $email;
        $d_usuario['documento'] = $dni;
        $d_empleado['nombre'] = $nombre;
        $d_empleado['a_paterno'] = $a_paterno;
        $d_empleado['a_materno'] = $a_materno;
        
        $result = $this->CI->m_usuario->editar($d_usuario, $id);
        $result = $this->CI->m_empleado->editar($d_empleado, $id);

        if($result !== FALSE) {
            $response['msg'] = "Registro exitoso";
            $response['status'] = 200;
            return json_encode($response);
        }else{
            $response['msg'] = "Ha ocurrido un error";
            $response['status'] = 500;
            return json_encode($response);
        }
    }

}
