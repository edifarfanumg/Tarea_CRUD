<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Estudiantes extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Estudiante_model');
        $this->load->helper('url');
    }

    public function index() {
        $data['estudiantes'] = $this->Estudiante_model->get_all();
        $this->load->view('estudiantes/index', $data);
    }

    public function crear() {
        $this->load->view('estudiantes/crear');
    }

    public function guardar() {
        $data = array(
            'nombre' => $this->input->post('nombre'),
            'apellido' => $this->input->post('apellido'),
            'telefono' => $this->input->post('telefono'),
            'direccion' => $this->input->post('direccion'),
            'correo_electronico' => $this->input->post('correo_electronico'),
            'curso' => $this->input->post('curso'),
            'edad' => $this->input->post('edad')
        );
        $this->Estudiante_model->insert($data);
        redirect('estudiantes');
    }

    public function editar($id) {
        $data['estudiante'] = $this->Estudiante_model->get_by_id($id);
        $this->load->view('estudiantes/editar', $data);
    }

    public function actualizar() {
        $id = $this->input->post('id');
        $data = array(
            'nombre' => $this->input->post('nombre'),
            'apellido' => $this->input->post('apellido'),
            'telefono' => $this->input->post('telefono'),
            'direccion' => $this->input->post('direccion'),
            'correo_electronico' => $this->input->post('correo_electronico'),
            'curso' => $this->input->post('curso'),
            'edad' => $this->input->post('edad')
        );
        $this->Estudiante_model->update($id, $data);
        redirect('estudiantes');
    }

    public function eliminar($id) {
        $this->Estudiante_model->delete($id);
        redirect('estudiantes');
    }
}
