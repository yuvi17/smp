<?php
	Class Faquser extends CI_Model
	{
	 function __construct()  
      {  
         // Call the Model constructor  
         parent::__construct();  
      } 
	
	 function record_count() {
        return $this->db->count_all("faq");
    }

     function fetch_data($limit, $start) {
        $this->db->limit($limit, $start);
		$this->db->where('answered',1);
        $this->db->order_by("timeStamp","desc");
        $query = $this->db->get("faq");
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
   }
}
?>