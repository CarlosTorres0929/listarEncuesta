<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Informehogar extends CI_Controller 
{
    function __construct() {

        parent:: __construct();

        //Cargar libreria de grocery_crud
        $this->load->library('grocery_CRUD');

        $this->load->model('hogar_model');
      

       
    }

    public function _example_output($output = null)
    {
        $this->load->view('example.php',(array)$output);
    }

    public function index() {
  

        $data["titulo"] = "Informe hogar";
        $data["descripcion"] = "Como te movilizaste ayer para ir a tu hogar";
        // $data['titulo']   = "Listado de pacientes";
          //instanciar la libreria
        $crud= new grocery_CRUD();
        //Tema del crud.
        $crud->set_theme('flexigrid');

        //Cargar la tabla
        $crud->set_table('transporte_hogar');
        $crud->set_relation('id_empleado','empleados','{cedula} - {nombre} - {dependencia}');
        $crud->display_as('id_empleado','Empleado');
       
        $crud->columns(
                     'id_empleado',
                     'bus',
                     'sistema_metro',
                     'carro',
                     'moto',
                     'carro_compartido',
                     'moto_compartida',
                     'bicicleta',
                     'caminar',
                     'vehiculo_electrico',
                     'otro',
                     'fecha_registro',
                     'totalh');
        


        $crud->display_as("bus","Bus");
        $crud->display_as("sistema_metro","Metro");
        $crud->display_as("carro","Carro");
        $crud->display_as("moto","Moto");
        $crud->display_as("carro_compartido","Carro Compartido");
        $crud->display_as("moto_compartida","Moto compartida");
        $crud->display_as("bicicleta","Bicicleta");
        $crud->display_as("caminar","Caminar");
        $crud->display_as("vehiculo_electrico","Vehiculo electrico");
        $crud->display_as("diasincarro","Dia sin carro");
        $crud->display_as("diasinmoto","Dia sin moto");
        $crud->display_as("otro","Otro");
        $crud->display_as("fecha_registro","Fecha de registro");
        $crud->display_as("totalh","Total");

       // $this->crud->set_relation("nombre","empleados","nombre");

         //Aplicar el render, que es ejecutar estas variables y esperar los tres componentes para cargar en la vista.
        $tabla = $crud->render();
        
        //Los tres componentes se llaman output, js_files y css_files
        $data["contenido"] = $tabla->output;
        $data["js_files"]  = $tabla->js_files;
        $data["css_files"] = $tabla->css_files; 

        $this->load->view('crud', $data);

        
    }

}
