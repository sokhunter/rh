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
        $this->items['active'] = 'empresa';
		$this->items['menu'] = $this->smarty_tpl->view('menu_admin', $this->items, TRUE);
    }
	
	public function index()
	{
        redirect('admin/empresa/listar', 'location');
	}

}
