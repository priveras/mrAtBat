<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cron extends CI_Controller {

	function __construct(){
        parent::__construct();
        $this->load->model('model_main');
 
        // this controller can only be called from the command line
        if (!$this->input->is_cli_request()) show_error('Direct access is not allowed');

        require_once(APPPATH.'libraries/codebird-php-develop/src/codebird.php');
    }

	public function birthdays(){

		$result = $this->model_main->master();

		foreach ($result as $row) { 

			if((date('Y', strtotime("-1 hours")) - $row['birthYear']) < 40 && $row['HR'] > 10) {

				\Codebird\Codebird::setConsumerKey("PvDmgS82fSDNvp0s9LF3IRtU3", "uYr2ryaX88W1Y1l2cGPtzRk2KG9qFaQOsJlgFkpyg5XkGGpfaC");
				$cb = \Codebird\Codebird::getInstance();
				$cb->setToken("2905820229-7g4Fy09ZqhRpsMWzKKDKaZFja4XPvtchDS7Oumm", "7IEcQdm6UVKp9d7S1cB2rWEtIRqIkEb4zPVw9m74e5Jva");
				 
				$params = array(
				  'status' => 'Today is ' . $row['nameFirst'] . " " . $row['nameLast'] . " " . (date('Y', strtotime("-6 hours")) - $row['birthYear']) . "th birthday. After " . (date('Y', strtotime("-6 hours")) - $row['debut']) . " years in the MLB, he has AB:" . number_format($row['AB']) . " R:" . number_format($row['R']) . " H:" . number_format($row['H']) . " and HR:" . number_format($row['HR']) . ". #baseballstats #baseball #mlb"
				);
				if($reply = $cb->statuses_update($params)){
					echo "birthday Success";
				}else{
					echo "Something wen't wrong";
				}
			}
		}
	}

	public function hrRank(){

		$result = $this->model_main->hrRank();

		for ($i = 0; $i < 365 ; $i++) { 

			if($i == date("z")){

				$i++;

				\Codebird\Codebird::setConsumerKey("PvDmgS82fSDNvp0s9LF3IRtU3", "uYr2ryaX88W1Y1l2cGPtzRk2KG9qFaQOsJlgFkpyg5XkGGpfaC");
				$cb = \Codebird\Codebird::getInstance();
				$cb->setToken("2905820229-7g4Fy09ZqhRpsMWzKKDKaZFja4XPvtchDS7Oumm", "7IEcQdm6UVKp9d7S1cB2rWEtIRqIkEb4zPVw9m74e5Jva");
				 
				$params = array(
				  'status' => $result[$i]['nameFirst'] . " " . $result[$i]['nameLast'] . " is ranked at the " . $i . " place of most Home Runs in history with " . number_format($result[$i]['HR']) . " homers! #baseballstats #baseball #mlb #homeruns"
				);
				if($reply = $cb->statuses_update($params)){
					echo "hrRank Success";
				}else{
					echo "Something wen't wrong";
				}
			}
		}
	}

	public function hRank(){

		$result = $this->model_main->hRank();

		for ($i = 0; $i < 365 ; $i++) { 

			if($i == date("z")){

				$i++;

				$j = 365 - $i;
				$k = $j -1;

				\Codebird\Codebird::setConsumerKey("PvDmgS82fSDNvp0s9LF3IRtU3", "uYr2ryaX88W1Y1l2cGPtzRk2KG9qFaQOsJlgFkpyg5XkGGpfaC");
				$cb = \Codebird\Codebird::getInstance();
				$cb->setToken("2905820229-7g4Fy09ZqhRpsMWzKKDKaZFja4XPvtchDS7Oumm", "7IEcQdm6UVKp9d7S1cB2rWEtIRqIkEb4zPVw9m74e5Jva");
				 
				$params = array(
				  'status' => $result[$k]['nameFirst'] . " " . $result[$k]['nameLast'] . " is ranked at the " . $j . " place of most Hits in history with " . number_format($result[$k]['H']) . "! #baseballstats #baseball #mlb #hits"
				);
				if($reply = $cb->statuses_update($params)){
					echo "hRank Success";
				}else{
					echo "Something wen't wrong";
				}
			}
		}
	}
}