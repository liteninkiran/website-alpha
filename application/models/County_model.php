<?php 

    class County_model extends CI_Model
    {

        public function getCountys($orderBy = "id", $sortOrder = "ASC")
        {
            // Set ordering fields
            $this->db->order_by($orderBy, $sortOrder);

            // Retrieve all county records
            $rs = $this->db->get('county');

            return $rs->result();
        }

        public function getCounty($countyId)
        {
            // Limit to one record
            $this->db->where('id', $countyId);

            // Retrieve county record
            $rs = $this->db->get('county');

            return $rs->result();
        }

        public function createCounty($data)
        {
            $this->db->insert('county', $data);
        }

        public function updateCounty($countyId, $data)
        {
            $this->db->where('id', $countyId);
            $this->db->update('county', $data);
        }

        public function deleteCounty($countyId)
        {
            $this->db->where('id', $countyId);
            $this->db->delete('county');
        }
    }

 ?>
 