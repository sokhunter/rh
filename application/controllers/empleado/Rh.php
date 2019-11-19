<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rh extends CI_Controller {

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
        $this->items['active'] = 'rh';
		$this->items['menu'] = $this->smarty_tpl->view('menu_empleado', $this->items, TRUE);
    }

    public function listar()
    {
        $this->load->model('m_recibo_honorario');
        $this->load->library(array('table', 'b_rh'));
        $data['titulo_pagina'] = 'Lista';
        $data['titulo_tabla'] = 'Listado de recibos por honorario';
        $data['btn_agregar'] = base_url() . 'empleado/rh/emitir';
        // ------------------------------------------------------------ //
        $listado = $this->b_rh->listar_por_empleado($this->items['session']['sys_id']);
        $template = array('table_open' => '<table class="table datatable">');
        $this->table->set_template($template);
        $this->table->set_heading('F. Emisión', 'F. Pago', 'F. Adelanto', 'Empresa', 'Monto', 'Estado');
        $data['tabla'] = $this->table->generate($listado);
        // ------------------------------------------------------------ //
        $data = array_merge($data, $this->items);
        $this->smarty_tpl->view('header', $data);
        $this->smarty_tpl->view('lista', $data);
        $this->smarty_tpl->view('footer', $data);
    }

    public function emitir($empresa_id = ""){
    	$this->load->model(array('m_empresa', 'm_moneda', 'm_empleado'));
        $data['titulo_pagina'] = 'Agregar recibo por honorario';
        // ------------------------------------------------------------ //
    	$data['empleado'] = $this->m_empleado->mostrar('t.id', $this->items['session']['sys_id']);
    	$data['empresa'] = $this->m_empresa->mostrar('t.id', $empresa_id);
        // $data['monedas'] = $this->m_moneda->mostrar_todo();
    	$data['monedas'] = $this->m_moneda->listar();
        // ------------------------------------------------------------ //
        $data = array_merge($data, $this->items);
        $this->smarty_tpl->view('header', $data);
        $this->smarty_tpl->view('rh_agregar', $data);
        $this->smarty_tpl->view('footer', $data);
    }

    public function guardar(){
    	$this->load->library('b_rh');
        $response = "No se pudo procesar la acción";
        $response = $this->b_rh->agregar();
        echo $response;
        echo direccionar(base_url() . '/' . $this->items['session']['sys_rol'] . '/' . 'rh/listar');
    }

}
