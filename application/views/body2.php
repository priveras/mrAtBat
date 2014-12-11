
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

<table>
	<tr>
		<th>Row</th>
		<th>First Name</th>
		<th>Last Name</th>
		<th>Home Runs</th>
	</tr>
<?php

$i = 1;

echo date("Y-m-d h:i:sa");
foreach ($hRank as $row) { 

	?>
		
		<tr>
			<td><?php echo $i ?></td>
			<td><?php echo $row['nameFirst'] ?></td>
			<td><?php echo $row['nameLast'] ?></td>	
			<td><?php echo $row['H'] ?></td>
		</tr>


		<?php
		$i++;
}

?>
</table>