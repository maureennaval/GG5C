<?php // pokemonQuery.php 
require_once 'getGamers.php'; 
$db_server = mysql_connect($db_hostname, $db_username, $db_password);
if (!$db_server) die("Unable to connect to MySQL: " . mysql_error());

	mysql_select_db($db_database)    
		or die("Unable to select database: " . mysql_error());
		
$query = "SELECT * FROM pokemon_gamers"; 
$result = mysql_query($query);

if (!$result) die ("Database access failed: " . mysql_error());

$rows = mysql_num_rows($result);

for ($j = 0 ; $j < $rows ; ++$j) {    
echo '<strong>Name</strong> '   . mysql_result($result,$j,'name')   . '<br />';    
echo 'College: '    . mysql_result($result,$j,'college')    . '<br />';    
echo 'Year: ' . mysql_result($result,$j,'year') . '<br />';    
echo 'Friend Code: '     . mysql_result($result,$j,'friend_code')     . '<br />';    
echo 'Email: '     . mysql_result($result,$j,'email')     . '<br />';
echo 'Style: '     . mysql_result($result,$j,'style')     . '<br /><br />'; } 

?>