<?php
class productmodel extends CI_Model {

        public function __construct()
        {       
                parent::__construct();
                $this->load->database();
        }

        public function getProductList($data){
                $this->db->where($data);
                $this->db->from('e_listing');
                $this->db->join('e_entity','e_entity.Id = e_listing.UserCreated');

                $query = $this->db->get();
                return $query->result_array();
        }
        public function updateProductItem($data,$Id){
                $this->db->where("ProductId",$Id);
                $this->db->update("e_listing",$data);
                return "ok";
        }       
}