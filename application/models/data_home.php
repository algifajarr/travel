<?php
 	class data_home extends CI_Model {
    function rute_from(){
      $this->db->select("rute_from");
      $this->db->distinct("rute_from");
      $this->db->from('rute');
      return $this->db->get()->result();
    }
    function rute_to(){
      $this->db->select("rute_to");
      $this->db->distinct("rute_to");
      $this->db->from('rute');
      return $this->db->get()->result();
    }
    function cari(){
      $this->db->select('*');
      $this->db->from('rute');
      $this->db->where('rute_from', $this->input->get('rute_from'));
      $this->db->where('rute_to', $this->input->get('rute_to'));
      $this->db->like('depart_at', $this->input->get('depart_at'));
      $this->db->join('transportation', 'rute.id_transportation = transportation.id_transportation');
      return $this->db->get()->result();
    }
    function sisa(){
      $this->db->select('count(id_reservation) as lol');
      $this->db->from('rute');
      $this->db->where('rute_from', $this->input->get('rute_from'));
      $this->db->where('rute_to', $this->input->get('rute_to'));
      $this->db->like('reservation.depart_at', $this->input->get('depart_at'));
      $this->db->join('reservation', 'rute.id_rute = reservation.id_rute');
      return $this->db->get()->row();
    }
 	}
?>
