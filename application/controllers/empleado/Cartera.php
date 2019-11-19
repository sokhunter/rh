<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cartera extends CI_Controller {

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
        $this->items['get_url'] = base_url() . 'empleado/';
        $this->items['active'] = 'cartera';
		$this->items['menu'] = $this->smarty_tpl->view('menu_empleado', $this->items, TRUE);
    }

    public function listar()
    {
        $this->load->model('m_recibo_honorario');
        $this->load->library(array('table', 'b_rh'));
        $data['titulo_pagina'] = 'Lista';
        $data['titulo_tabla'] = 'Cartera';
        // ------------------------------------------------------------ //
        $fecha = $this->input->post('filtro_fecha');
        if($fecha == "") $fecha = Date("Y-m-d");
        $data['filtro_fecha'] = $fecha;
        $listado = $this->b_rh->listar_cartera($fecha, $this->items['session']['sys_documento']);
        $template = array('table_open' => '<table class="table datatable">');
        $this->table->set_template($template);
        $this->table->set_heading('F. Emisión', 'F. Pago', 'F. Adelanto', 'Empresa', 'Monto', 'Estado');
        $data['tabla'] = $this->table->generate($listado);
        $data['cartera'] = TRUE;
        // ------------------------------------------------------------ //
        $data = array_merge($data, $this->items);
        $this->smarty_tpl->view('header', $data);
        $this->smarty_tpl->view('lista', $data);
        $this->smarty_tpl->view('footer', $data);
    }

}
