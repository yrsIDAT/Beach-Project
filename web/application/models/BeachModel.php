<?php 
class BeachModel extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }
    
    function getAll($sort)
    {
    	if ($sort == false)
    	{
    		$result = $this->db->query("SELECT * FROM beaches ORDER BY rating DESC");
    	}
    	else {
    		$sort = explode(',',$sort);
    		$result = $this->db->query('SELECT * FROM beaches ORDER BY ' . $sort[0] . ' ' . $sort[1]);
    	}
    	return $result;
    }
}
?>