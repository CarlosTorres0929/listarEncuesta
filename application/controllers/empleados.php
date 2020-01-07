<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Empleados extends CI_Controller 
{
    function __construct() {

        parent:: __construct();

        //Cargar libreria de grocery_crud
        $this->load->library('grocery_CRUD');

        $this->load->model("Empleados_model");

        //instanciar la libreria
        $this->crud = new grocery_CRUD();

    }

    public function index() {


        $data["titulo"] = "Empleados";
        $data["descripcion"] = "Crud de empleados";

        //Tema del crud.
        $this->crud->set_theme('flexigrid');

        //Cargar la tabla
        $this->crud->set_table('empleados');

        //Si queremes relacionar dos tablas y que podemos por medio de un select asociar un dato de una
        //de ellas usamos set_relation (campo de la tabla set table, la tabla asociar, que campo mostrar de la tabla asociar)
       // $this->crud->set_relation("pacienteid","citaspacientes","pacienteid");
        //$this->crud->set_relation("medicoid","citaspacientes","medicoid");
        //$this->crud->set_relation("fechacita","citaspacientes","fechacita");

        //Definicion de campos.
        $this->crud->fields("cedula","nombre");

        //Campos requeridos
        $this->crud->required_fields("cedula","nombre");

        //Redefinir un titulo a la tabla
        $this->crud->set_subject("Empleados");

        $this->crud->display_as("cedula","Cedula");
        $this->crud->display_as("nombre","Nombre");

        $this->crud->columns("cedula","nombre");
        
        //Aplicar el render, que es ejecutar estas variables y esperar los tres componentes para cargar en la vista.
        $tabla = $this->crud->render();
        
        //Los tres componentes se llaman output, js_files y css_files
        $data["contenido"] = $tabla->output;
        $data["js_files"]  = $tabla->js_files;
        $data["css_files"] = $tabla->css_files;


        $this->load->view('crud', $data);
    }
}

