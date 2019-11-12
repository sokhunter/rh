<?php

class Modelo_DB {

    var $CI;
    var $tabla;
    var $alias;
    var $tabla_id;

    function __construct() {
        $this->CI =& get_instance();
        $this->CI->load->database();
    }

    public function setTabla($tabla) {
        $this->tabla = $tabla;
    }

    public function setAlias($alias) {
        $this->alias = $alias;
    }

    public function setTabla_id($tabla_id) {
        $this->tabla_id = $tabla_id;
    }

    public function agregar($data) {
        $agregar = $this->CI->db->insert($this->tabla, $data);
        if ($agregar) {
            return $this->CI->db->insert_id();
        } else {
            return false;
        }
    }

    public function editar($data, $where, $valor = FALSE) {
        $this->get_where($where, $valor);
        $update = $this->CI->db->update($this->tabla, $data);
        if ($update) {
            return true;
        } else {
            return false;
        }
    }

    public function mostrar($where, $valor = FALSE, $datos = FALSE) {

        if ($datos){
            $this->CI->db->select($datos);
        } else {
            $this->CI->db->select();
        }
        $this->get_query();
        $this->get_where($where, $valor);
        $this->CI->db->limit(1);
        return $this->CI->db->get()->row_array();
    }

    public function eliminar($where, $valor = FALSE) {
        $this->get_where($where, $valor);
        $delete = $this->CI->db->delete($this->tabla);
        if ($delete) {
            return true;
        } else {
            return false;
        }
    }
    
    public function mostrar_todo($datos = FALSE, $order_by = FALSE) {
        
        if ($datos){
            $this->CI->db->select($datos);
        } else {
            $this->CI->db->select();
        }

        $this->get_query();
        if($order_by){
            foreach ($order_by as $order) {
                $this->CI->db->order_by($order['order'], $order['type']);
            }
        }
        return $this->CI->db->get()->result_array();
    }

    public function existe_campo($campo, $valor, $id = '') {
        if ($id == '') {
            $this->get_query();
            $this->get_where('t.' . $campo, $valor);
            // $this->limit(1);
            $resultSet = $this->CI->db->get()->row_array();
        } else {
            $this->get_query();
            $this->get_where('t.id', $id);
            $this->limit(1);
            $stm = $this->CI->db->get()->row_array();
            $this->get_query();
            $this->get_where('t.' . $campo . '!=', $stm[$campo]);
            $this->get_where('t.' . $campo, $valor);
            $this->limit(1);
            $resultSet = $this->CI->db->get()->row_array();
        }
        if (count($resultSet) > 0) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function buscar($like) {

        $this->get_query();

        $this->get_like($like);

        return $this->CI->db->get()->result_array();

    }

    public function buscar_cuando($where, $like, $datos = FALSE, $order_by = FALSE) {
        
        if ($datos){
            $this->CI->db->select($datos);
        } else {
            $this->CI->db->select();
        }

        $this->get_query();

        if ($like) {

            $this->CI->db->group_start();

            $this->get_like($like);

            $this->CI->db->group_end();
        }

        if ($where) {

            $this->CI->db->group_start();

            $this->get_where($where);

            $this->CI->db->group_end();
        }
        if($order_by){
            foreach ($order_by as $order) {
                $this->CI->db->order_by($order['order'], $order['type']);
            }
        }
        return $this->CI->db->get()->result_array();
    }

    public function total_filas($where = FALSE, $like = FALSE) {

        $this->get_query();

        if ($like) {

            $this->CI->db->group_start();

            $this->get_like($like);

            $this->CI->db->group_end();

        }

        if ($where) {

            $this->CI->db->group_start();

            $this->get_where($where);

            $this->CI->db->group_end();

        }

        return $this->CI->db->get()->num_rows();

    }

    public function get_where($where, $value = FALSE) {
        if (is_array($where)) {
            foreach ($where as $k => $v) {
                if(is_array($v)){
                    foreach ($v as $val) {
                        $this->CI->db->where($k, $val);
                    }
                }else{
                    $this->CI->db->where($k, $v);
                }
            }
        } else if ($where !== FALSE) {
            if ($value === FALSE) {
                $value = $where;
                $where = $this->tabla_id;
            }
            $this->CI->db->where($where, $value);
        }
    }

    public function get_like($like) {
        if (is_array($like)) {
            foreach ($like as $k => $v) {
                $this->CI->db->or_like($k, $v);
            }
        }
    }

}