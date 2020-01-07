<?php
    class Empleados_model extends CI_model {

        function __construct() {
            //Invocar el helper security
            $this->load->helper('security');
        }

        function listar() {
            $query = $this->db->get("empleados");
            return $query->result_array();  
        }

        //Ingresa los datos a la bd de las personas registradas.
        function ingresar() {
          
            $cedula     = $this->input->post('cedula');
            $nombre     = $this->input->post('nombre');

            $cedula     = $this->security->xss_clean($cedula);
            $nombre     = $this->security->xss_clean($nombre);
       

            //Validar si un usuario ya existe en la bd.
            $query     = $this->db->get_where('empleados', array('cedula' => $cedula));
            $resultado = $query->result_array();

            //Validar si trae datos.
            if (count($resultado) > 0) {
                $resp = "Este registro ya se encuentra. Por favor verifica nuevamente";
            } else {
                //Pasar los datos en un array para poder insertar.
                $vector = Array(
                    "cedula"   => $cedula,
                    "nombre"     => $nombre
                    
                );

                $this->db->insert("empleados", $vector);
                $resp = "Registro insertado con exito";
            }
            return $resp;
        }

      

    }
?>