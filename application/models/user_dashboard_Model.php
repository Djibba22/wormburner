<?php
class user_dashboard_model extends CI_Model {
	function __construct()
	{
		parent::__construct();


	}
	public function get_jason()
		{
            $golfdata = json_decode(
    	file_get_contents("https://api.sportradar.us/golf-t1/schedule/pga/2015/tournaments/schedule.json?api_key=rwppn9ub7aqmde94djw23ggm")
		);

            if (empty($golfdata))
        {
            show_404();
        }

		    $data = array(
		        $tourname = $golfdata->{'tournaments'}[0]->{'venue'}->{'name'};,
		        $year = $gofdata->{'season'}->{'year'};
		         $tour => $golfdata->{'tour'}->{'name'};
		    );

		    return  $data;
		}

}
