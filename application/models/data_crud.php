<?php
/**
 *
 */
 	class Data_crud extends CI_Model {

 		function tampil_datarute(){
  			return $this->db->get('rute');
 		}

     function tampil_datatransportation(){
        return $this->db->get('transportation');
    }
     function tampil_datauser(){
        return $this->db->get('user');
    }

 		function input_datarute($data,$table){
  			$this->db->insert($table,$data);
 		}

 		function cek_login($table,$where){
			return $this->db->get_where($table, $where);
		}


    function input_datauser($data,$table){
        $this->db->insert($table,$data);
    }

		function hapus_datarute($where,$table){
 			$this->db->where($where);
 			$this->db->delete($table);
		}

        public function edit_rute($where, $table)
        {
            return $this->db->get_where($table, $where);
        }

        function update_data($where,$data,$table){
    		$this->db->where($where);
    		$this->db->update($table,$data);
	   }

       function hapus_data($where,$table)
    	{
    		$this->db->where($where);
    		$this->db->delete($table);
    	}
 	}
?>
