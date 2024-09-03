<?php
class Estudiante_model extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

    public function get_all() {
        $query = $this->db->get('estudiantes');
        return $query->result_array();
    }

    public function get_by_id($id) {
        $query = $this->db->get_where('estudiantes', array('id' => $id));
        return $query->row_array();
    }

    public function insert($data) {
        return $this->db->insert('estudiantes', $data);
    }

    public function update($id, $data) {
        $this->db->where('id', $id);
        return $this->db->update('estudiantes', $data);
    }

    public function delete($id) {
        return $this->db->delete('estudiantes', array('id' => $id));
    }
}
