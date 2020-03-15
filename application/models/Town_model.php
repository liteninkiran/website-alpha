<?php 

    class Town_model extends CI_Model
    {

        public function getTowns()
        {
            // Retrieve all town records
            $rs = $this->db->get('town');

            return $rs->result();
        }

        public function getTown($townId)
        {
            // Limit to one record
            $this->db->where('id', $townId);

            // Retrieve town record
            $rs = $this->db->get('town');

            return $rs->result();
        }

        public function createTown($data)
        {
            $this->db->insert('town', $data);
        }

        public function updateTown($townId, $data)
        {
            $this->db->where('id', $townId);
            $this->db->update('town', $data);
        }

        public function deleteTown($townId)
        {
            $this->db->where('id', $townId);
            $this->db->delete('town');
        }
    }

 ?>
 