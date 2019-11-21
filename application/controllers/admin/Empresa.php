<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Empresa extends CI_Controller {

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
        $this->items['get_url'] = base_url() . 'admin/';
        $this->items['active'] = 'empresa';
		$this->items['menu'] = $this->smarty_tpl->view('menu_admin', $this->items, TRUE);
    }

    public function listar()
    {
        $this->load->model('m_empresa');
        $this->load->library(array('table', 'b_empresa'));
        $data['titulo_pagina'] = 'Inicio';
        $data['titulo_tabla'] = 'Listado de empresas';
        $data['btn_agregar'] = base_url() . 'admin/empresa/agregar';
        // ------------------------------------------------------------ //
        // $listado = $this->m_empresa->mostrar_todo('razon_social, documento, email, direccion');
        $listado = $this->b_empresa->listar($this->items['get_url']);
        $template = array('table_open' => '<table class="table datatable">');
        $this->table->set_template($template);
        $this->table->set_heading('Empresa', 'RUC', 'Correo', 'Dirección', 'Opciones');
        $data['tabla'] = $this->table->generate($listado);
        // ------------------------------------------------------------ //
        $data = array_merge($data, $this->items);
        $this->smarty_tpl->view('header', $data);
        $this->smarty_tpl->view('lista', $data);
        $this->smarty_tpl->view('footer', $data);
    }
    
	public function agregar()
	{
        $data['titulo_pagina'] = 'Agregar empresa';
        // ------------------------------------------------------------ //
        
        // ------------------------------------------------------------ //
        $data = array_merge($data, $this->items);
        $this->smarty_tpl->view('header', $data);
        $this->smarty_tpl->view('empresa_agregar', $data);
        $this->smarty_tpl->view('footer', $data);
	}

    public function editar($id = ""){
        $this->load->model('m_empresa');
        $data['titulo_pagina'] = 'Editar empresa';
        // ------------------------------------------------------------ //
        $data['registro'] = $this->m_empresa->mostrar('t.id', $id);
        if(empty($data['registro'])){
            echo direccionar(base_url() . '/admin/empresa/listar');
            EXIT;
        }
        // ------------------------------------------------------------ //
        $data = array_merge($data, $this->items);
        $this->smarty_tpl->view('header', $data);
        $this->smarty_tpl->view('empresa_agregar', $data);
        $this->smarty_tpl->view('footer', $data);
    }

    public function guardar(){
        $this->load->library(array('b_empresa'));
        $id = $this->input->post('id');
        $response = "No se pudo procesar la acción";
        if($id == ""){
            $response = $this->b_empresa->agregar();
        }else{
            $response = $this->b_empresa->editar();
        }
        $response = json_decode($response);
        
        switch ($response->status) {
            case 200:
                echo mensaje_exito($response->msg);
                echo direccionar(base_url() . '/' . $this->items['session']['sys_rol'] . '/' . 'empresa/listar');
                break;
            default:
                echo mensaje_error($response->msg);
                break;
        }
    }

}
