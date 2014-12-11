<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

	public function index(){
		$this->members();
	}

	public function members(){
		echo "Hello and welcome to Mr. At Bat . You can follow the Twitter account here <a href='https://twitter.com/mratbat'>@mratbat</a>";

		$this->load->model('model_main');

		$data['hRank'] = $this->model_main->hRank();
		$this->load->view('body2', $data);
	}
}