<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_usuario extends CI_Controller {

	public function __construct() {

        parent::__construct();
        $library = array('session');
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

    public function validar_documento(){
        $this->load->model(array('m_usuario', 'm_empresa', 'm_empleado'));
        $documento = $this->input->post('documento');
        $usuario = $this->m_usuario->mostrar('t.documento', $documento);
        if($usuario != null){
            if($usuario['rol_id'] == 2){ // empresa
                $datos = $this->m_empresa->mostrar('t.id', $usuario['id']);
            }else{ // empleado
                $datos = $this->m_empleado->mostrar('t.id', $usuario['id']);
            }
            $usuario = array_merge($usuario, $datos);
        }
        echo json_encode($usuario);
    }

}
