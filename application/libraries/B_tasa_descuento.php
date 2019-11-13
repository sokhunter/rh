<?php

class B_tasa_descuento {

	function __construct() {
		$this->CI =& get_instance();
        $library = array('session');
        $this->CI->load->library($library);
		// Datos de la sesion
		if(!$this->CI->session->has_userdata('sys_id')) {
			redirect('', 'refresh');
			EXIT;
		}
		$this->CI->items['session'] = $this->CI->session->userdata();
    }

    function agregar($empresa_id = ""){
        $this->CI->load->model('m_tasa_descuento');
        $d_tasa['valor'] = 10;
        $d_tasa['empresa_id'] = $empresa_id;
        $result = $this->CI->m_tasa_descuento->agregar($d_tasa);
        if($result !== FALSE) {
            return "Edición exitosa";
        }else{
            return "Ha ocurrido un error";
        }
    }

    function editar(){
        $this->CI->load->model('m_tasa_descuento');
        $valor = $this->CI->input->post('valor');
        $d_tasa['valor'] = $valor;
        $result = $this->CI->m_tasa_descuento->editar($d_tasa, array('empresa_id' => $this->CI->items['session']['sys_id']));
        if($result !== FALSE) {
            $sesion['sys_tasa'] = $valor;
            $this->CI->session->set_userdata($sesion);
            return "Edición exitosa";
        }else{
            return "Ha ocurrido un error";
        }
    }

}
