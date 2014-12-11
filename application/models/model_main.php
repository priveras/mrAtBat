<?php

class Model_main extends CI_Model{

	public function master(){

		$birthMonth = date('m', strtotime("-6 hours"));
		$birthDay = date('d', strtotime("-6 hours"));

		$sql = sprintf("SELECT b.playerID, m.playerID, m.nameFirst, m.nameLast, m.birthMonth, m.birthDay, m.birthYear, m.debut, SUM(b.AB) as AB, SUM(b.R) as R, SUM(b.H) as H, SUM(b.HR) as HR, SUM(b.RBI) as RBI
			FROM Batting b
			JOIN Master m on m.playerID = b.playerID
			WHERE m.birthMonth = %d AND m.birthDay = %d
			GROUP BY b.playerID
			ORDER BY HR DESC
			", $birthMonth,$birthDay);


		$query = $this->db->query($sql);
		$return = $query->result_array();
   
		return $return;
	}

	public function hrRank(){

		$sql = sprintf("SELECT b.playerID, m.playerID, m.nameFirst, m.nameLast, SUM(b.HR) as HR
			FROM Batting b
			JOIN Master m on m.playerID = b.playerID
			GROUP BY b.playerID
			ORDER BY HR DESC
			");


		$query = $this->db->query($sql);
		$return = $query->result_array();
   
		return $return;
	}


	public function hRank(){

		$sql = sprintf("SELECT b.playerID, m.playerID, m.nameFirst, m.nameLast, SUM(b.H) as H
			FROM Batting b
			JOIN Master m on m.playerID = b.playerID
			GROUP BY b.playerID
			ORDER BY H DESC
			");


		$query = $this->db->query($sql);
		$return = $query->result_array();
   
		return $return;
	}
}