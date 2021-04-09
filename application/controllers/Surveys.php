<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Surveys extends CI_Controller {

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
		$this->load->view('survey/index');
	}

	public function process_form(){
		echo $this->input->post("name");
        $num = 1;
        $session_data = array(
            "name" => $this->input->post("name"),
            "dojo-location" => $this->input->post("dojo-location"),
            "favorite-language" => $this->input->post("favorite-language"),
            "comment" => $this->input->post("comment"),
            "n-time-of-submission" => ($this->session->userdata('name') == $this->input->post("name") ? $num = $num + 1 : $num)
        );

        $this->session->set_userdata($session_data);

        $this->session->set_flashdata("submit-success","submission was successful " . $this->session->userdata('n-time-of-submission'));
        redirect("result");
		
	}

    public function result(){
        if($this->session->userdata()){
            $this->load->view('survey/result');
        }else{
           redirect(base_url());
        }
		
		// $this->load->view('welcome_message');
	}


}
