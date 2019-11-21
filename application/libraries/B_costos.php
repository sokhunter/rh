<?php

class B_costos {

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

    function listar($empresa_id, $url = ""){
    	$this->CI->load->model(array('m_costos'));
    	$listado = $this->CI->m_costos->listar('id, nombre, monto, if(inicial = 0, "Final", "Inicial")', array('empresa_id' => $empresa_id));
    	$i = 0;
    	foreach ($listado as $l) {
    		$listado[$i]['opcion'] = '<a href="' . $url . 'costos/editar/' . $l['id'] . '" class="btn btn-sm btn-info">Editar</a>';
    		unset($listado[$i]['id']);
    		$i++;
    	}
    	return $listado;
    }
    
	function agregar(){
        $this->CI->load->model(array('m_costos'));
        $nombre = $this->CI->input->post('nombre');
        $monto = $this->CI->input->post('monto');
        $inicial = $this->CI->input->post('inicial');

        // VALIDACIONES
        $this->CI->load->library('form_validation');
        $this->CI->form_validation->set_rules('nombre', 'Nombre', 'required');
        $this->CI->form_validation->set_rules('monto', 'Monto', 'required');
        $this->CI->form_validation->set_rules('inicial', 'Tipo', 'required');

        $this->CI->form_validation->set_message('required','El campo {field} es obligatorio');

        if(!$this->CI->form_validation->run()){
            $response['msg'] = validation_errors('<li>', '</li>');
            $response['status'] = 400;
            return json_encode($response);
        }

        $d_costo['nombre'] = $nombre;
        $d_costo['monto'] = $monto;
        $d_costo['inicial'] = $inicial;
        $d_costo['empresa_id'] = $this->CI->items['session']['sys_id'];
        $result = $this->CI->m_costos->agregar($d_costo);

        if($result !== FALSE) {
            $response['msg'] = "Registro exitoso";
            $response['status'] = 200;
            return json_encode($response);
        }else{
            $response['msg'] = "Ha ocurrido un error";
            $response['status'] = 500;
            return json_encode($response);
        }
	}

    function editar(){
        $this->CI->load->model(array('m_costos'));
        $id = $this->CI->input->post('id');
        $nombre = $this->CI->input->post('nombre');
        $monto = $this->CI->input->post('monto');
        $inicial = $this->CI->input->post('inicial');

        // VALIDACIONES
        $this->CI->load->library('form_validation');
        $this->CI->form_validation->set_rules('nombre', 'Nombre', 'required');
        $this->CI->form_validation->set_rules('monto', 'Monto', 'required');
        $this->CI->form_validation->set_rules('inicial', 'Tipo', 'required');

        $this->CI->form_validation->set_message('required','El campo {field} es obligatorio');

        if(!$this->CI->form_validation->run()){
            $response['msg'] = validation_errors('<li>', '</li>');
            $response['status'] = 400;
            return json_encode($response);
        }

        $d_costo['nombre'] = $nombre;
        $d_costo['monto'] = $monto;
        $d_costo['inicial'] = $inicial;
        $result = $this->CI->m_costos->editar($d_costo, $id);

        if($result !== FALSE) {
            $response['msg'] = "Registro exitoso";
            $response['status'] = 200;
            return json_encode($response);
        }else{
            $response['msg'] = "Ha ocurrido un error";
            $response['status'] = 500;
            return json_encode($response);
        }
    }

}
