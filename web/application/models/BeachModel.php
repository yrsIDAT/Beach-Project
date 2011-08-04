<?php 
class BeachModel extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }
    
    function getAll($sort)
    {
    	//if ($sort == false) 
    	$result = $this->db->query("SELECT * FROM beaches ORDER BY rating DESC");
    	//else $result = $this->db->query("SELECT * FROM beaches ORDER BY $sort DESC")
    	return $result;
    }
}
?>