<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Empleado extends CI_Controller {

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
        $this->items['base_url'] = base_url();
        $this->items['get_url'] = base_url() . 'empresa/';
        $this->items['active'] = 'empleado';
		$this->items['menu'] = $this->smarty_tpl->view('menu_empresa', $this->items, TRUE);
    }

    public function listar()
    {
        $this->load->model('m_empleado');
        $this->load->library('table');
        $data['titulo_pagina'] = 'Inicio';
        $data['titulo_tabla'] = 'Listado de empleados';
        $data['btn_agregar'] = base_url() . 'empresa/empleado/agregar';
        // ------------------------------------------------------------ //
        $listado = $this->m_empleado->listar("CONCAT(t.nombre, ' ', t.a_paterno, ' ', t.a_materno), u.documento, u.email");
        $template = array('table_open' => '<table class="table datatable">');
        $this->table->set_template($template);
        $this->table->set_heading('Nombre', 'Documento', 'Correo');
        $data['tabla'] = $this->table->generate($listado);
        // $data['session_id'] = $this->session->userdata('sys_id');
        // ------------------------------------------------------------ //
        $data = array_merge($data, $this->items);
        $this->smarty_tpl->view('header', $data);
        $this->smarty_tpl->view('lista', $data);
        $this->smarty_tpl->view('footer', $data);
    }
    
	public function agregar()
	{
		$this->load->model('m_cargo');
        $data['titulo_pagina'] = 'Agregar empleado';
        // ------------------------------------------------------------ //
        $data['session_id'] = $this->session->userdata('sys_id');
        // $data['cargos'] = $this->m_cargo->mostrar_todo();
        $data['cargos'] = $this->m_cargo->listar();
        // ------------------------------------------------------------ //
        $data = array_merge($data, $this->items);
        $this->smarty_tpl->view('header', $data);
        $this->smarty_tpl->view('empleado_agregar', $data);
        $this->smarty_tpl->view('footer', $data);
	}

    public function editar($id = ""){
        $this->load->model('m_empleado');
        $data['titulo_pagina'] = 'Editar empleado';
        // ------------------------------------------------------------ //
        $data['registro'] = $this->m_empleado->mostrar('t.id', $id);
        if(empty($data['registro'])){
            echo direccionar(base_url() . '/admin/empleado/listar');
            EXIT;
        }
        // ------------------------------------------------------------ //
        $data = array_merge($data, $this->items);
        $this->smarty_tpl->view('header', $data);
        $this->smarty_tpl->view('empleado_agregar', $data);
        $this->smarty_tpl->view('footer', $data);
    }

    public function guardar(){
        $this->load->model('m_usuario');
        $this->load->library(array('b_empleado', 'b_empresa'));
        $response = "No se pudo procesar la acción";
        $dni = $this->input->post('dni');
        if(!$this->m_usuario->existe_campo('documento', $dni)){
            $this->b_empleado->agregar();
        }
        $response = $this->b_empresa->agregar_empleado();
        echo $response;
        echo direccionar(base_url() . '/' . $this->items['session']['sys_rol'] . '/' . 'empleado/listar');
    }

}
