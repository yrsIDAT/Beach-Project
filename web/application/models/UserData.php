<?php 
class UserData extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }
    
    function busySubmit($id, $rating)
    {
    	$this->db->query("INSERT INTO userdata (type,beach,rating) VALUES ('busy','$id','$rating')");
    }
    
    function getToday()
    {
    	return $this->db->query('SELECT * FROM userdata WHERE date=NOW() ORDER BY beach');
    }
}
?>