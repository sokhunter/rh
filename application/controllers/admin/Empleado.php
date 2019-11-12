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
        $this->items['get_url'] = base_url() . 'admin/';
        $this->items['active'] = 'empleado';
		$this->items['menu'] = $this->smarty_tpl->view('menu_admin', $this->items, TRUE);
    }

    public function listar()
    {
        $this->load->model('m_empleado');
        $this->load->library('table');
        $data['titulo_pagina'] = 'Inicio';
        $data['titulo_tabla'] = 'Listado de empleados';
        $data['btn_agregar'] = base_url() . 'admin/empleado/agregar';
        // ------------------------------------------------------------ //
        $listado = $this->m_empleado->listar();
        $template = array('table_open' => '<table class="table datatable">');
        $this->table->set_template($template);
        $this->table->set_heading('Nombre', 'Documento', 'Correo');
        $data['tabla'] = $this->table->generate($listado);
        // ------------------------------------------------------------ //
        $data = array_merge($data, $this->items);
        $this->smarty_tpl->view('header', $data);
        $this->smarty_tpl->view('lista', $data);
        $this->smarty_tpl->view('footer', $data);
    }
    
	public function agregar()
	{
        $data['titulo_pagina'] = 'Agregar empleado';
        // ------------------------------------------------------------ //
        
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
        $this->load->library('b_empleado');
        $id = $this->input->post('id');
        $response = "No se pudo procesar la acción";
        if($id == ""){
            $response = $this->b_empleado->agregar();
        }else{
            $response = $this->b_empleado->editar();
        }
        echo $response;
        echo direccionar(base_url() . '/' . $this->items['session']['sys_rol'] . '/' . 'empleado/listar');
    }

}
