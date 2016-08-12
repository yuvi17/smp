<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Question extends CI_Controller {

 function __construct()
 {
   parent::__construct();
	$this->load->helper("url");
        $this->load->model("faquser");
        $this->load->library("pagination");
 }
 
	function showFaq()
	{
		//echo "yuvraj";
		$config = array();
        $config["base_url"] = base_url() . "Question/showFaq";
        $config["total_rows"] = $this->faquser->record_count();
        $config["per_page"] = 10;
        $config["uri_segment"] = 3;
        $config['first_link']='FALSE';
        $config['last_link']='FALSE';
        $config['full_tag_open']='<ul class="pagination center" ';
        $config['full_tag_close']="</ul>";
        $config['cur_tag_open'] ='<li>';
        $config['cur_tag_close'] ='</li>';
        $this->pagination->initialize($config);

        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		  $data["result"] = $this->faquser->
            fetch_data($config["per_page"], $page);
        $data["links"] = $this->pagination->create_links();
		$this->load->view('faqView',$data);
	}
	function ask()
	{
		$this->load->view('askQues');
	}
	function fill()
	{
		$this->load->model('askqs');
		$id=$this->askqs->fillQs();
		$data[0]=$id;
		$this->load->view('return',$id);
	}
}
 ?>