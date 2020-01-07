<?php
    class Trabajo_model extends CI_model {

        function __construct() {
            //Invocar el helper security
            $this->load->helper('security');
        }

        function listar() {
            $query = $this->db->get("transporte_trabajo");
            return $query->result_array();  
        }

          
    }
?>