<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Empresa extends CI_Controller {

	public function __construct() {

        parent::__construct();
        $library = array('smarty_tpl', 'session');
        $helper = array('url');
        $this->load->library($library);
        $this->load->helper($helper);
		// Datos de la sesion
		if(!$this->session->has_userdata('sys_id')) {
			redirect('', 'refresh');
			EXIT;
		}
		$this->items['session'] = $this->session->userdata();
    }
    
	public function agregar()
	{
        $this->load->model(array('m_usuario', 'm_empresa'));
        $razon_social = $this->input->post('razon_social');
        $ruc = $this->input->post('ruc');
        $nombre = $this->input->post('nombre');
        $email = $this->input->post('email');
        $direccion = $this->input->post('direccion');
        // VALIDACIONES
        $d_usuario['usuario'] = trim($nombre);
        $d_usuario['email'] = $email;
        $d_usuario['clave'] = md5(trim($ruc));
        $d_usuario['documento'] = $ruc;
        // $datos['imagen'] = $nombre;
        $d_usuario['rol_id'] = 2;
        $usuario_id = $this->m_usuario->agregar($d_usuario);

        $d_empresa['id'] = $usuario_id;
        $d_empresa['razon_social'] = $razon_social;
        $d_empresa['razon_social'] = $razon_social;
        $d_empresa['direccion'] = $direccion;
        $result = $this->m_empresa->agregar($d_empresa);
        
        if($result !== FALSE) {
            echo "Registro exitoso";
            echo direccionar(base_url() . '/' . $this->items['session']['sys_rol'] . '/' . 'empresa/listar');
            EXIT;
        }else{
            echo "Error";
        }
        
	}

}
