<?php

class Category_model extends CI_MODEL {

    public function __construct()
    {
        $this->load->database();
    }

    public function get_categ($Categ_name='FALSE',$SubCateg_name='FALSE')
    {
        if($Categ_name == 'FALSE')
        {
            $query = $this->db->get('categories');
            return $query->result_array();
        }

        if (($Categ_name != 'FALSE') && ($SubCateg_name == 'FALSE'))
        {
            $query = $this->db->get_where('categories', array('Categ_name' => $Categ_name));
            return $query->result_array();
        }

        if (($Categ_name != 'FALSE') && ($SubCateg_name != 'FALSE'))
        {
            $query = $this->db->get_where('categories', array('Categ_name' => $Categ_name,'SubCateg_name' => $SubCateg_name));
            return $query->result_array();
        }
    }

}

?>