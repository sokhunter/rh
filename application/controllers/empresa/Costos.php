<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Costos extends CI_Controller {

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
        $this->items['get_url'] = base_url() . 'empresa/';
        $this->items['active'] = 'costos';
		$this->items['menu'] = $this->smarty_tpl->view('menu_empresa', $this->items, TRUE);
    }

    public function listar()
    {
        $this->load->model('m_costos');
        $this->load->library(array('table', 'b_costos'));
        $data['titulo_pagina'] = 'Lista';
        $data['titulo_tabla'] = 'Costos y gastos';
        $data['btn_agregar'] = base_url() . 'empresa/costos/agregar';
        // ------------------------------------------------------------ //
        $listado = $this->b_costos->listar($this->items['session']['sys_id'], base_url() . 'empresa/');
        $template = array('table_open' => '<table class="table datatable">');
        $this->table->set_template($template);
        $this->table->set_heading('Nombre', 'Monto', 'Tipo', 'Opciones');
        $data['tabla'] = $this->table->generate($listado);
        // ------------------------------------------------------------ //
        $data = array_merge($data, $this->items);
        $this->smarty_tpl->view('header', $data);
        $this->smarty_tpl->view('lista', $data);
        $this->smarty_tpl->view('footer', $data);
    }

    public function agregar(){
        $data['titulo_pagina'] = 'Agregar costo';
        // ------------------------------------------------------------ //
        
        // ------------------------------------------------------------ //
        $data = array_merge($data, $this->items);
        $this->smarty_tpl->view('header', $data);
        $this->smarty_tpl->view('costo_agregar', $data);
        $this->smarty_tpl->view('footer', $data);
    }

    public function editar($id = ""){
        $this->load->model('m_costos');
        $data['titulo_pagina'] = 'Editar empleado';
        // ------------------------------------------------------------ //
        $data['registro'] = $this->m_costos->mostrar('t.id', $id);
        if(empty($data['registro'])){
            echo direccionar(base_url() . '/empresa/costos/listar');
            EXIT;
        }
        // ------------------------------------------------------------ //
        $data = array_merge($data, $this->items);
        $this->smarty_tpl->view('header', $data);
        $this->smarty_tpl->view('costo_agregar', $data);
        $this->smarty_tpl->view('footer', $data);
    }

    public function guardar(){
        $this->load->library(array('b_costos'));
        $response = "No se pudo procesar la acción";
        $id = $this->input->post('id');
        if($id == ''){
            $response = $this->b_costos->agregar();
        }else{
            $response = $this->b_costos->editar();
        }
        $response = json_decode($response);
        echo mensaje_error($response->msg);
        
        if($response->status != 400){
            echo direccionar(base_url() . '/' . $this->items['session']['sys_rol'] . '/' . 'costos/listar');
        }
    }
}
