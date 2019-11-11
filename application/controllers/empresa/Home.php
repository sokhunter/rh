<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

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
        $this->items['active'] = 'rh';
        $this->items['menu'] = $this->smarty_tpl->view('menu_empresa', $this->items, TRUE);
    }
	
	public function index()
	{
        $this->load->model('m_recibo_honorario');
        $this->load->library('table');
        $data['titulo_pagina'] = 'Inicio';
        $data['titulo_tabla'] = 'Listado de RH';
        // ------------------------------------------------------------ //
        $listado = $this->m_recibo_honorario->lista_por_empresa($this->items['session']['sys_id']);
        $template = array('table_open' => '<table class="table datatable">');
        $this->table->set_template($template);
        $this->table->set_heading('F. Emision', 'F. Pago', 'Empleado', 'Monto');
        $data['tabla'] = $this->table->generate($listado);
        // ------------------------------------------------------------ //
        $data = array_merge($data, $this->items);
        $this->smarty_tpl->view('header', $data);
        $this->smarty_tpl->view('lista', $data);
        $this->smarty_tpl->view('footer', $data);
	}

}
