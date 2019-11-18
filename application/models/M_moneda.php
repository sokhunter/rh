<?php

require_once APPPATH . 'libraries/Modelo_DB.php';

class M_moneda extends Modelo_DB {

    public function __construct() {
        parent::__construct();
        parent::setTabla('moneda');
        parent::setAlias('t');
        parent::setTabla_id('id');
    }

    public function get_query() {
        $this->CI->db->from($this->tabla . " " . $this->alias);
        $this->CI->db->order_by('nombre', 'asc');
    }

}
