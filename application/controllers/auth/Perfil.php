<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perfil extends CI_Controller {

	public function __construct() {

        parent::__construct();
        $library = array('smarty_tpl', 'session');
        $helper = array('url', 'alerta');
        $this->load->library($library);
        $this->load->helper($helper);
		// Datos de la sesion
		if(!$this->session->has_userdata('sys_id')) {
			redirect('', 'refresh');
			EXIT;
		}
		$this->items['session'] = $this->session->userdata();
        $this->items['base_url'] = base_url();
        $this->items['get_url'] = base_url() . $this->items['session']['sys_rol'] . '/';
        $this->items['active'] = 'perfil';

		$this->items['menu'] = $this->smarty_tpl->view('menu_' . $this->items['session']['sys_rol'], $this->items, TRUE);
    }

    public function editar(){
        $this->load->model('m_usuario');
        $data['titulo_pagina'] = 'Lista';
        $data['titulo_tabla'] = 'Perfil';
        // ------------------------------------------------------------ //
        $data['registro'] = $this->m_usuario->mostrar('t.id', $this->items['session']['sys_id']);
        // ------------------------------------------------------------ //
        $data = array_merge($data, $this->items);
        $this->smarty_tpl->view('header', $data);
        $this->smarty_tpl->view('perfil', $data);
        $this->smarty_tpl->view('footer', $data);
    }

    public function guardar(){
        $this->load->model('m_usuario');
        $documento = $this->input->post('documento');
        $email = $this->input->post('email');
        $clave = $this->input->post('clave');
        $clavem = $this->input->post('clavem');

        $this->load->library('form_validation');
        $this->form_validation->set_rules('documento', 'N° Documento', 'required|min_length[8]|max_length[11]');
        $this->form_validation->set_rules('email', 'Correo', 'required|valid_email');
        if($clave != ""){
            $datos['clave'] = md5($clave);
            $this->form_validation->set_rules('clave', 'Contraseña', 'required|min_length[6]');
            $this->form_validation->set_rules('clavem', 'Confirmar contraseña', 'required|matches[clave]');
        }

        $this->form_validation->set_message('required','El campo {field} es obligatorio');
        $this->form_validation->set_message('min_length','El campo {field} debe tener como mínimo {param} digitos');
        $this->form_validation->set_message('max_length','El campo {field} debe tener como máximo {param} digitos');
        $this->form_validation->set_message('valid_email','El campo {field} debe contener una dirección de correo válida');
        $this->form_validation->set_message('matches','El campo {field} no coincide con el campo {param}');

        if(!$this->form_validation->run()){
            echo mensaje_error(validation_errors('<li>', '</li>'));
            EXIT;
        }
        $datos['documento'] = $documento;
        $datos['email'] = $email;
        // ------------------------------------------------------------ //
        $result = $this->m_usuario->editar($datos, $this->items['session']['sys_id']);
        if($result !== FALSE) {
            echo mensaje_exito("Registro exitoso");
        }else{
            echo mensaje_error("Ha ocurrido un error");
        }
        echo direccionar(base_url() . '/auth/perfil/editar');
    }

}
