<?php
class API extends CI_Controller {

	// function __construct()
	// {
	// 	parent::__construct();
	// 	 // $this->load->model('user_dashboard_model');
		
	// }
	 public function view(){
	      $golfdata = json_decode(
	 
    	file_get_contents("https://api.sportradar.us/golf-t1/schedule/pga/2015/tournaments/schedule.json?api_key=6vbrenhxw9c66dry2532xqhz")
		);

            if (empty($golfdata))
        {
            show_404();
        }else{

	 		// $data['data'] = array($this->$golfdata);
	 		$data2['data2'] = array('golfdata' => $golfdata);
	 		// $data['title'] = 'Home';
	 		// $data['content'] = 'Welcome to my website';

            $this->load->view('templates/header_li');
            $this->load->view('pages/user_dashboard', $data2);
            $this->load->view('templates/footer');
        }
    
	}   
}


	
