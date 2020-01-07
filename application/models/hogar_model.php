<?php
    class Hogar_model extends CI_model {

        function __construct() {
            //Invocar el helper security
            $this->load->helper('security');
        }

        function listar() {
            $query = $this->db->get("transporte_hogar");
            return $query->result_array();  
        }

    
      
    }
?>