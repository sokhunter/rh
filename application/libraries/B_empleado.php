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
    
	function agregar(){
        $this->CI->load->model(array('m_usuario', 'm_empleado'));
        $nombre = $this->CI->input->post('nombre');
        $a_paterno = $this->CI->input->post('a_paterno');
        $a_materno = $this->CI->input->post('a_materno');
        $dni = $this->CI->input->post('dni');
        $email = $this->CI->input->post('email');
        // VALIDACIONES
        //validar dni duplicado
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
            return "Registro exitoso";
        }else{
            return "Ha ocurrido un error";
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
            return "Edición exitosa";
        }else{
            return "Ha ocurrido un error";
        }
    }

}