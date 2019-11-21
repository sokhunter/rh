<?php

require_once APPPATH . 'libraries/Modelo_DB.php';

class M_recibo_honorario extends Modelo_DB {

    public function __construct() {
        parent::__construct();
        parent::setTabla('recibo_honorario');
        parent::setAlias('t');
        parent::setTabla_id('id');
    }

    public function get_query() {
        $this->CI->db->from($this->tabla . " " . $this->alias);
    }

    public function listar_por_empresa($id = ''){
    	$this->CI->db->select('t.id, f_emision, f_pago, f_adelanto, CONCAT(e.nombre, " ", e.a_paterno, " ", e.a_materno) AS empleado, CONCAT(m.simbolo, t.total) as total');
    	$this->CI->db->from($this->tabla . " " . $this->alias);
    	$this->CI->db->join('empleado e', 'e.id = t.empleado_id', 'join');
    	$this->CI->db->join('moneda m', 'm.id = t.moneda_id', 'join');
        $this->CI->db->where('t.empresa_id', $id);
    	return $this->CI->db->get()->result_array();
    }

    public function listar_por_empleado($id = ''){
        $this->CI->db->select('t.id, f_emision, f_pago, f_adelanto, e.razon_social, CONCAT(m.simbolo, t.total) as total');
        $this->CI->db->from($this->tabla . " " . $this->alias);
        $this->CI->db->join('empresa e', 'e.id = t.empresa_id', 'join');
        $this->CI->db->join('moneda m', 'm.id = t.moneda_id', 'join');
        $this->CI->db->where('t.empleado_id', $id);
        return $this->CI->db->get()->result_array();
    }

    public function listar_cartera($fecha = '', $empleado_doc = '', $empresa_id = ''){
        $this->CI->db->select('t.id, f_emision, f_pago, f_adelanto, e.razon_social, CONCAT(m.simbolo, t.total) as total, CONCAT(tcea, "%")');
        $this->CI->db->from($this->tabla . " " . $this->alias);
        $this->CI->db->join('empresa e', 'e.id = t.empresa_id', 'join');
        $this->CI->db->join('usuario u', 'u.id = t.empleado_id', 'join');
        $this->CI->db->join('moneda m', 'm.id = t.moneda_id', 'join');
        $this->CI->db->where('u.documento', $empleado_doc);
        $this->CI->db->where('t.f_emision', $fecha);
        if($empresa_id != ''){
            $this->CI->db->where('t.empresa_id', $empresa_id);
        }
        return $this->CI->db->get()->result_array();
    }

}
