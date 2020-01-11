<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Informehogar extends CI_Controller 
{
    function __construct() {

        parent:: __construct();

        //Cargar libreria de grocery_crud
        $this->load->library('grocery_CRUD');

        $this->load->model('hogar_model');

        //instanciar la libreria
        $this->crud = new grocery_CRUD();

       
    }

    public function index() {
  

        $data["titulo"] = "Informe hogar";
        $data["descripcion"] = "Como te movilizaste ayer para ir a tu hogar";

        //Tema del crud.
        $this->crud->set_theme('flexigrid');

        //Cargar la tabla
        $this->crud->set_table('transporte_hogar');

        //Definicion de campos.
        $this->crud->fields("cedula","bus","sistema_metro","carro","moto","carro_compartido","moto_compartida","bicicleta","caminar","vehiculo_electrico","diasincarro","diasinmoto","otro","fecha_registro","totalh");

        //Campos requeridos
        //$this->crud->required_fields("pacienteid","nombre","apellido","telefono","email","direccion","ciudad");

        //Redefinir un titulo a la tabla
        $this->crud->set_subject("Trabajo");

        $this->crud->display_as("cedula","Cedula");
        $this->crud->display_as("bus","Bus");
        $this->crud->display_as("sistema_metro","Metro");
        $this->crud->display_as("carro","Carro");
        $this->crud->display_as("moto","Moto");
        $this->crud->display_as("carro_compartido","Carro Compartido");
        $this->crud->display_as("moto_compartida","Moto compartida");
        $this->crud->display_as("bicicleta","Bicicleta");
        $this->crud->display_as("caminar","Caminar");
        $this->crud->display_as("vehiculo_electrico","Vehiculo electrico");
        $this->crud->display_as("diasincarro","Dia sin carro");
        $this->crud->display_as("diasinmoto","Dia sin moto");
        $this->crud->display_as("otro","Otro");
        $this->crud->display_as("fecha_registro","Fecha de registro");
        $this->crud->display_as("totalh","Total");

        $this->crud->unset_add();
        $this->crud->unset_edit();
        $this->crud->unset_read();
        $this->crud->unset_clone();
        $this->crud->unset_delete();
        $this->crud->unset_back_to_list(); //quitar botones adicionales

        $this->crud->columns("cedula","bus","sistema_metro","carro","moto","carro_compartido","moto_compartida","bicicleta","caminar","vehiculo_electrico","diasincarro","diasinmoto","otro","fecha_registro","totalh");
        
        //Aplicar el render, que es ejecutar estas variables y esperar los tres componentes para cargar en la vista.
        $tabla = $this->crud->render();
        
        //Los tres componentes se llaman output, js_files y css_files
        $data["contenido"] = $tabla->output;
        $data["js_files"]  = $tabla->js_files;
        $data["css_files"] = $tabla->css_files;


        $this->load->view('crud', $data);
    }
}
