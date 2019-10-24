<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
	// public function index()
	// {
	// 	$this->load->view('welcome_message');
	// }

	public function page_not_found()
	{
		//error page
		print "Error Page";
		
	}

	public function index()
	{
		redirect(base_url().'dashboard/'); 
        $url = 'https://smartrepair.io';
       // redirect($url,'refresh');
	}


	/*check if any users want to do wrong with any wrong url or null url*/
	public function redirector($url = NULL){
		if ($url == NULL) {
			$referrer = $this->agent->referrer();
		} else {
			$referrer = base_url().$url;
		}
		redirect($referrer,'refresh');
	}
}
