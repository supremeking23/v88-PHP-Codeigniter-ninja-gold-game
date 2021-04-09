<?php
defined('BASEPATH') OR exit('No direct script access allowed');

date_default_timezone_set('Asia/Manila');

class Golds extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

    
	public function index()
	{	
		$this->load->view('gold/index');
	}

	public function process_form(){
        echo "process money";
        $curr_date = date("F jS Y H:i:s a",time());
        
        if(!($this->session->has_userdata("score"))){
            $session_data = array(
                "score" => 0,
            );
            $this->session->set_userdata($session_data);
        }

        if(($this->session->has_userdata("activities"))){
            $activities = $this->session->userdata("activities");
        }else{
            $activities = array();
        }

        $building = $this->input->post("building");
        switch($building){
            case "farm":
                $random_score =  rand(11,20);
                $this->session->set_userdata("score", $this->session->userdata("score") + $random_score);

                array_push($activities, "<p class=\"add-points\">You entered a farm and earned {$random_score} golds ($curr_date)</p>");
               
                
            break;
            case "cave":
                $random_score =  rand(6,10);
               
                $this->session->set_userdata("score", $this->session->userdata("score") + $random_score);
                array_push($activities, "<p class=\"add-points\">You entered a farm and earned {$random_score} golds ($curr_date)</p>");
               
            break;
            case "house":
                $random_score = rand(2,5);
                // $_SESSION["score"] = $_SESSION["score"] + $random_score;
                $this->session->set_userdata("score", $this->session->userdata("score") + $random_score);

                array_push($activities, "<p class=\"add-points\">You entered a farm and earned {$random_score} golds ($curr_date)</p>");
               
            break;
            case "casino":
                $random_score = rand(0,50);
                $add_or_deduct = rand(0,1);
                if($add_or_deduct === 0){
                   
                    $this->session->set_userdata("score", $this->session->userdata("score") - $random_score);
                    array_push($activities, "<p class=\"deduct-points\">You entered a casino and lost {$random_score} golds... Ouch ($curr_date)</p>");
                }else{
                    // $_SESSION["score"] = $_SESSION["score"] + rand(0,50);
                    $this->session->set_userdata("score", $this->session->userdata("score") + $random_score);
                    array_push($activities, "<p class=\"add-points\">You entered a casino and earned {$random_score} golds ($curr_date)</p>");
                }
                
            break;
    
        }
        
        
        $this->session->set_userdata("activities",$activities);
        
        redirect(base_url());

    }
}
