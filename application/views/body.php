
<?php 

//require codebird
/*require_once(APPPATH.'libraries/codebird-php-develop/src/codebird.php');
 
\Codebird\Codebird::setConsumerKey("PvDmgS82fSDNvp0s9LF3IRtU3", "uYr2ryaX88W1Y1l2cGPtzRk2KG9qFaQOsJlgFkpyg5XkGGpfaC");
$cb = \Codebird\Codebird::getInstance();
$cb->setToken("2905820229-7g4Fy09ZqhRpsMWzKKDKaZFja4XPvtchDS7Oumm", "7IEcQdm6UVKp9d7S1cB2rWEtIRqIkEb4zPVw9m74e5Jva");
 
$params = array(
  'status' => 'Auto Post on Twitter with PHP http://goo.gl/OZHaQD #php #twitter'
);
$reply = $cb->statuses_update($params);
*/

?>

<?php

for ($i = 0; $i < 365 ; $i++) { 

	if($i == $dayNumber = date("z")){
		echo $hRank[$i]['nameFirst'] . " " . $hRank[$i]['nameLast'] . " " . $hRank[$i]['H'];
	}
}

?>