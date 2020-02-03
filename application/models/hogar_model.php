<?php
    class Hogar_model extends CI_model {

        function __construct() {
            //Invocar el helper security
            $this->load->helper('security');
        }

        function listar() {
            
            $this->load->library('table');
           $sql = "SELECT em.cedula, em.nombre, em.dependencia, th.bus, th.sistema_metro, th.carro, th.moto, th.carro_compartido, th.moto_compartida, th.bicicleta, th.caminar, th.vehiculo_electrico, th.otro, th.fecha_registro, th.totalh
                 FROM empleados em, transporte_hogar th WHERE em.cedula = th.cedula";

            $query = $this->db->query($sql);
            return $query->result_array();  
        }

    
      
    }
?>