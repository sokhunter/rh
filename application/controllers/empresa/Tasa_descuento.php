<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tasa_descuento extends CI_Controller {

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
		$this->items['menu'] = $this->smarty_tpl->view('menu_empresa', $this->items, TRUE);
    }

    public function guardar(){
        $this->load->library('b_tasa_descuento');
        $response = "No se pudo procesar la acción";
        $response = $this->b_tasa_descuento->editar();
        echo $response;
    }

}
