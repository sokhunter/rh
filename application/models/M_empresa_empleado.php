<?php

require_once APPPATH . 'libraries/Modelo_DB.php';

class M_empresa_empleado extends Modelo_DB {

    public function __construct() {
        parent::__construct();
        parent::setTabla('empresa_empleado');
        parent::setAlias('t');
        parent::setTabla_id('id');
    }

    public function get_query() {
        $this->CI->db->from($this->tabla . " " . $this->alias);
        $this->CI->db->order_by('nombre', 'asc');
    }

}
