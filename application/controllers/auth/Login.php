<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct() {

        parent::__construct();
        $library = array('session');
        $helper = array('url');
        $this->load->library($library);
        $this->load->helper($helper);

    }

    public function index() 
    {
        $this->load->library('smarty_tpl');
        $data['titulo_pagina'] ='Login';
        $data['base_url'] = base_url();
        // ---------------------------------------------------------- //
        $this->smarty_tpl->view('login', $data);
    }

    public function ingresar()
    {
        $this->load->model(array('m_usuario', 'm_rol'));
        $email = $this->input->post('email');
        $clave = $this->input->post('clave');
        // VALIDACIONES
        $usuario = $this->m_usuario->mostrar(array("email" => $email, "clave" => md5($clave)));
        
        if(count($usuario) <= 0) {
            // echo mensaje_error("Datos incorrectos");
            echo "Datos incorrectos";
            EXIT;
        }
        $rol = $this->m_rol->mostrar('id', $usuario['rol_id']);
        $sesion = array(
                        'sys_id' => $usuario['id'],
                        'sys_usuario' => $usuario['usuario'],
                        'sys_email' => $usuario['email'],
                        'sys_imagen' => $usuario['imagen'],
                        'sys_rol_id' => $usuario['rol_id'],
                        'sys_rol' => $rol['nombre'],
                    );
        $this->session->set_userdata($sesion);
        // redirect(base_url() . $rol['nombre'] . '/home', 'refresh');
        echo direccionar(base_url() . $rol['nombre'] . '/home');
    }

    public function salir()
    {
        $this->session->sess_destroy();
        redirect('', 'refresh');
    }
}
