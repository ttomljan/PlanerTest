<?php 

$dbc = mysql_connect('localhost', 'ttomljanovic', '11');
if (!$dbc) {
	die ("Not connected :" . mysql_error());
}

$db_selected = mysql_select_db("testdb", $dbc);
if (!$db_selected)
{
 	die ("can connect : " . mysql_error());
}


?>